<?php

namespace App\Repository;

use App\Entity\Righe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Datetime;

/**
 * @extends ServiceEntityRepository<Righe>
 *
 * @method Righe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Righe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Righe[]    findAll()
 * @method Righe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RigheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Righe::class);
    }

    public function save(Righe $entity, bool $flush = false): void
    {
        $date = new DateTime();
        if ($entity->getid()>0){

        }else{
            $entity->setDataCreazione($date);
            $entity->setUtenteCreazione(0);
        }
        $entity->setDataModifica($date);
        $entity->setUtenteModifica(0);
        $entity->setIdRReal(0);
         $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Righe $entity, bool $flush = false): void
    {
        
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
    public function getRigheForTesta(int $id_testa): array
    {
       
            $conn = $this->getEntityManager()->getConnection();
            // returns an array
            $sql = "
            select r.descrizione_anomalia
            ,id_l_fk
            ,id_riga
            ,r.descrizione_intervento
            ,r.id_meccanico
            ,r.ore
            ,t.tipo_intervento
            ,o.intervento
            from righe as r
            inner join teste as t on r.id_testa_fk = t.id_testa
            left join off_intervento as o on o.id_off_intervento = r.id_off_intervento
            where id_testa_fk = :id_testa
            ";

            $resultSet = $conn->executeQuery($sql,["id_testa"=>$id_testa]);

            $a1 = $resultSet->fetchAllAssociative();
            

            return $a1;




    }
    
    public function setRReal(int $idRiga, int $value): void
    {
        $conn = $this->getEntityManager()->getConnection();
                
        $sql="update righe set id_r_real = " .$value. " where id = " .$idRiga;
        
        $stmt = $conn->prepare($sql);
        $stmt->executeQuery();
        
        $sql="update righe set stato='OK' where id = " .$idRiga;
        $stmt = $conn->prepare($sql);
        $stmt->executeQuery();
    }
    
    public function setStatoToOk(): void {
        $conn = $this->getEntityManager()->getConnection();
        $sql="update righe set stato = 'OK' where stato = 'TO CONFIRM'";
        $stmt = $conn->prepare($sql);
        $stmt->executeQuery();
    }
    
    public function getRigheForTestaWithChild(int $idTesta, int $idTestaOriginal): array
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT p
            FROM App\Entity\Righe p
            WHERE p.id_r_real != -2 AND  (p.id_testa_fk  =  :des or p.id_testa_fk  = :des2) order by p.data_creazione'
            )->setParameter('des', $idTesta)->setParameter('des2', $idTestaOriginal);
            
            // returns an array
            return $query->getResult();
    }
    
    public function getAllRigheForTestaWithChild(int $idTesta, int $idTestaOriginal): array
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT p
            FROM App\Entity\Righe p
            WHERE   p.id_testa_fk  =  :des or p.id_testa_fk  = :des2 order by p.data_creazione'
            )->setParameter('des', $idTesta)->setParameter('des2', $idTestaOriginal);
            
            // returns an array
            return $query->getResult();
    }
    
    
    public function deleteRigheForTestaId(int $idTesta, $idTestaReal): void
    {
        $conn = $this->getEntityManager()->getConnection();
        //Cancello quelle che puntano ad un altra riga perch� appese in modifia
        $sql="delete from righe where  id_r_real > 0  and (id_testa_fk = " .$idTesta. " or id_testa_fk = " .$idTestaReal. ")";
        
        $stmt = $conn->prepare($sql);
        $stmt->executeQuery();
        //rimettto a posto le righe precedentemente in stato di update con id_r_real == -2
        $sql="update righe set id_r_real = 0 where  id_r_real = -2 and id_testa_fk = " .$idTesta. " or id_testa_fk = " .$idTestaReal;
        $stmt = $conn->prepare($sql);
        $stmt->executeQuery();
        
        $sql="delete from righe where stato = 'TO CONFIRM'";
        $stmt = $conn->prepare($sql);
        $stmt->executeQuery();
    }
    
    public function deleteAllRigheForTestaId(int $idTesta): void
    {

        $query = $this->getEntityManager()->createQuery(
            'SELECT p
            FROM App\Entity\Righe p
            WHERE   p.id_testa_fk  =  :idTesta '
            )->setParameter('idTesta', $idTesta);

            $aRigheEntity = $query->getResult();
            foreach($aRigheEntity as $riga){
                $this->remove($riga,true);
            }

    }
    
    
    public function deleteRigheForId(int $idRiga): void
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql="delete from righe where id = " .$idRiga;
          
        $stmt = $conn->prepare($sql);
        $stmt->executeQuery();
    }
    
    public function moveRigheFromTempToOriginal(int $idTesta, int $idTestaOriginal): void
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql="update  righe set id_testa_fk = " .$idTestaOriginal. "  where id_testa_fk = " .$idTesta;
        
        
        $stmt = $conn->prepare($sql);
        $stmt->executeQuery();
    }
    
    public function getRigaForRigaId(int $id): array
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT p
            FROM App\Entity\Righe p
            WHERE   p.id  =  :des '
            )->setParameter('des', $id);
            
            // returns an array
            return $query->getResult();
    }


    public function getRigheByTesta($id_testa): array
    {

            $conn = $this->getEntityManager()->getConnection();
            // returns an array
            $sql = "
            select r.*
            ,isnull(oi.intervento,'') as intervento
            from righe as r
            left join off_intervento as oi on r.id_off_intervento = oi.id_off_intervento
            where r.id_testa_fk = :id_testa
            order by r.id_riga
            ";

            $resultSet = $conn->executeQuery($sql,["id_testa" => $id_testa]);

            $a1 = $resultSet->fetchAllAssociative();
            $aLab= array();
            foreach($a1 as $r){


                $aLab[]=$r;
            }

            return $aLab;
    }


//    /**
//     * @return Righe[] Returns an array of Righe objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Righe
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
