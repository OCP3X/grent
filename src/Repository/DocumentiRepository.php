<?php

namespace App\Repository;

use App\Entity\Documenti;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\GroupBy;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Documenti>
 *
 * @method Documenti|null find($id, $lockMode = null, $lockVersion = null)
 * @method Documenti|null findOneBy(array $criteria, array $orderBy = null)
 * @method Documenti[]    findAll()
 * @method Documenti[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Documenti::class);
    }

    public function list(int $id_veicolo): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT * FROM files WHERE id_veicolo = :id_veicolo  ORDER BY idfile DESC";
        
        $resultSet = $conn->executeQuery($sql, ['id_veicolo' => $id_veicolo]);
        $aLab = $resultSet->fetchAllAssociative();
        
        // returns an array
        return $aLab;
    }

   

//    /**
//     * @return Documenti[] Returns an array of Documenti objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Documenti
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
