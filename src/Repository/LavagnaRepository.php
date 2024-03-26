<?php

namespace App\Repository;

use App\Entity\Lavagna;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Datetime;


/**
 * @extends ServiceEntityRepository<Lavagna>
 *
 * @method Lavagna|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lavagna|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lavagna[]    findAll()
 * @method Lavagna[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LavagnaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry
    , private UrlGeneratorInterface $router
    , private Security $security
    )
    {
        parent::__construct($registry, Lavagna::class);
    }

    public function save(Lavagna $entity, bool $flush = false): void
    {
        $adesso = new Datetime();
        $user = $this->security->getUser();
        $id_utente = $user->getIdWu();

        if ($entity->getIdL()>0){
        }else{
            
            $entity->setDc($adesso);
            $entity->setUc($id_utente);
        }

        $entity->setDm($adesso);
        $entity->setUm($id_utente);

       



        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Lavagna $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAnomaliaJoinVeicoli(string $anomalia, string $descrizione, string $targa): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "select top 100 v.id_veicolo, v.descrizion, v.targa, l.anomalia, l.id_l 
        ,l.data_lavagna,w.username
        FROM v_veicoli_web v 
        INNER JOIN Lavagna l on l.id_veicolo = v.id_veicolo 
        left join webuser as w on l.uc = w.id_wu
        left join righe as r on r.id_l_fk = l.id_l
        WHERE r.id_riga is null
        
        ";

        if ($anomalia != "*") {
                
            $sql = $sql . " AND  l.anomalia LIKE '%" . $anomalia . "%'";
           
        }

            if ($descrizione != "*") {
                
                $sql = $sql . " AND  v.descrizion LIKE  '%" . $descrizione . "%'";
               
            }
            if ($targa != "*") {
               
                $sql = $sql . " AND v.targa LIKE  '%" . $targa . "%'";
               
            }
        $sql .= " ORDER by l.data_lavagna desc,targa"; 




        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $aRes = $resultSet->fetchAllAssociative();

         // returns an array
         $aLab = array();
         foreach($aRes as $r){
 
             $r["href_dett"]=$this->router->generate('app_lavagna_edit', [
                 'idL' => $r["id_l"],
             ]);
             $r["href_duplica"]=$this->router->generate('app_lavagna_duplicate', [
                 'idL' => $r["id_l"],
             ]);
 
 
             $aLab[]=$r;
         }
 
        
        // returns an array
        return $aLab;
    }
    
    public function findTargaJoinVeicoli(string $stringToFind): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql="select v.id_veicolo, v.descrizion, v.targa, l.anomalia, l.id_l FROM v_veicoli_web v INNER JOIN Lavagna l on l.id_veicolo = v.id_veicolo ";
        
        if ($stringToFind != "*" )  {
            //caso input vuoto carico la lista
            $sql = $sql. "WHERE v.targa LIKE  '" .$stringToFind. "%'";
        }
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        
        // returns an array
        return $resultSet->fetchAllAssociative();
    }
    
    public function getAnomaliaForIdVeicolo(int $idVeicolo): array
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT p
            FROM App\Entity\Lavagna p
            WHERE p.id_veicolo  =  :des'
            )->setParameter('des', $idVeicolo);
            
            $conn = $this->getEntityManager()->getConnection();
            // returns an array
            $sql = "
            select 
            l.id_l
            ,anomalia
            from lavagna as l
            left join righe as r on l.id_l = r.id_l_fk
            where id_veicolo = :id_veicolo
            and r.id_riga is null
            ";

            $resultSet = $conn->executeQuery($sql,[
                "id_veicolo"=>$idVeicolo
            ]);

            $a1 = $resultSet->fetchAllAssociative();
            $aLab= array();
            foreach($a1 as $r){
                $r["href_sel"]= $this->router->generate('righe_evadi_lavagna', [
                    'id_testa' => 'id_testa_xxxx',
                    'id_l' => $r["id_l"],
                ]);
                $aLab[]=$r;
            }



            // returns an array
            return $aLab;
    }
    
    public function findDescrizioneJoinVeicoli(string $stringToFind): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql="select v.id_veicolo, v.descrizion, v.targa, l.anomalia, l.id_l FROM v_veicoli_web v INNER JOIN Lavagna l on l.id_veicolo = v.id_veicolo ";
        
        if ($stringToFind != "*" )  {
            //caso input vuoto carico la lista
            $sql = $sql. "WHERE v.descrizion LIKE  '" .$stringToFind. "%'";
        }
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        
        // returns an array
        return $resultSet->fetchAllAssociative();
    }
    
    public function getAnomaliaJoinVeicoli(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql='select top 100 v.id_veicolo, v.descrizion, v.targa, l.anomalia, l.id_l 
        ,l.data_lavagna
        FROM v_veicoli_web v 
        INNER JOIN Lavagna l on l.id_veicolo = v.id_veicolo
        left join righe as r on r.id_l_fk = l.id_l
        where r.id_riga is null
        ORDER by anomalia, targa';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $aRes = $resultSet->fetchAllAssociative();
        // returns an array
        $aLab = array();
        foreach($aRes as $r){

            $r["href_dett"]=$this->router->generate('app_lavagna_edit', [
                'idL' => $r["id_l"],
            ]);
            $r["href_duplica"]=$this->router->generate('app_lavagna_duplicate', [
                'idL' => $r["id_l"],
            ]);


            $aLab[]=$r;
        }



        return $aLab;
    }
    
 
//    /**
//     * @return Lavagna[] Returns an array of Lavagna objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Lavagna
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
