<?php

namespace App\Repository;

use App\Entity\Veicoli;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping\Entity;

/**
 * @extends ServiceEntityRepository<Veicoli>
 *
 * @method Veicoli|null find($id, $lockMode = null, $lockVersion = null)
 * @method Veicoli|null findOneBy(array $criteria, array $orderBy = null)
 * @method Veicoli[]    findAll()
 * @method Veicoli[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VeicoliRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Veicoli::class);
    }

    public function save(Veicoli $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Veicoli $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
    public function getVeicoloDescription(string $stringToFind): array
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT p
            FROM App\Entity\Veicoli p
            WHERE p.descrizion  LIKE :des'
            )->setParameter('des', $stringToFind.'%');
            
            // returns an array
            return $query->getResult();
    }
    
    public function getVeicoloDescriptionByIdVeicolo(int $idVeicolo): array
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT p
            FROM App\Entity\Veicoli p
            WHERE p.idVeicolo  = :idVeicolo'
            )->setParameter('idVeicolo', $idVeicolo);
            
            // returns an array
            return $query->getResult();
    }
    
    public function getVeicoloByDescriptionAndTarga(string $descrizione, string $targa): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "select top 30 * FROM v_veicoli_web where 1=1 ";
       
        $vuoto_descr=0;
        $vuoto_targa=0;
        if ($descrizione == "*" || empty($descrizione)) {
            $vuoto_descr=1;
        }
        if ($targa == "*" || empty($targa)) {
            $vuoto_targa=1;
        }

        if ($vuoto_descr>0 && $vuoto_targa>0) {
            $sql .= " and 1=0 "; 
        }
        else{

        
            if ($descrizione != "*") {
                
                $sql = $sql . " AND  descrizion LIKE  '%" . $descrizione . "%'";
               
            }
            if ($targa != "*") {
               
                $sql = $sql . " AND targa LIKE  '%" . $targa . "%'";
               
            }
        }
        $sql .= " ORDER by descrizion,targa"; 
        $stmt = $conn->prepare($sql);
       

        $resultSet = $stmt->executeQuery();
        
        // returns an array
        return $resultSet->fetchAllAssociative();
    }
   

    public function getVeicolowebById(int $id_veicolo): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "select top 1 * FROM v_veicoli_web where id_veicolo=:id_veicolo ";
       
        $resultSet = $conn->executeQuery($sql, ['id_veicolo' => $id_veicolo]);
        $aLab=array();
        foreach($resultSet->fetchAllAssociative() as $r){
            $aLab=$r;
        }
        
        // returns an array
        return $aLab;
    }


}
