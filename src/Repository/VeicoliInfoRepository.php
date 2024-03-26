<?php

namespace App\Repository;

use App\Entity\VeicoliInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Datetime;

/**
 * @extends ServiceEntityRepository<VeicoliInfo>
 *
 * @method VeicoliInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method VeicoliInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method VeicoliInfo[]    findAll()
 * @method VeicoliInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VeicoliInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry
    , private UrlGeneratorInterface $router
    , private Security $security
    )
    {
        parent::__construct($registry, VeicoliInfo::class);
    }

    
    public function saveform(VeicoliInfo $entity, bool $flush = false): void
    {
       
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(VeicoliInfo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

         if ($flush) {
            $this->getEntityManager()->flush();
        } 
    }

    public function list(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "select  veicoli_info.*, v_veicoli_web.descrizion ,v_veicoli_web.targa as targax from v_veicoli_web
        left join veicoli_info on v_veicoli_web.targa = veicoli_info.targa              
        ";        

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $aRes = $resultSet->fetchAllAssociative();

        // returns an array
        return  $aRes;
    }


    public function getVeicolowebById(string $targa): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "select * FROM veicoli_info where targa=:targa ";
       
        $resultSet = $conn->executeQuery($sql, ['targa' => $targa]);
        $aLab=array();
        foreach($resultSet->fetchAllAssociative() as $r){
            $aLab=$r;
        }
        
        // returns an array
        return $aLab;
    }

   /*  public function stampa(string $targa): array
    {
    $conn = $this->getEntityManager()->getConnection();

    $sql = "SELECT *
            FROM veicoli_info
            WHERE targa = :targa";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':targa', $targa);
    $stmt->execute();
    
    $result = $stmt->fetchAssociative();

    
    return $result;
    } */
    
     
 
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
