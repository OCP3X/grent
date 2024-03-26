<?php

namespace App\Repository;

use App\Entity\OffIntervento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OffIntervento>
 *
 * @method OffIntervento|null find($id, $lockMode = null, $lockVersion = null)
 * @method OffIntervento|null findOneBy(array $criteria, array $orderBy = null)
 * @method OffIntervento[]    findAll()
 * @method OffIntervento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffInterventoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OffIntervento::class);
    }

//    /**
//     * @return OffIntervento[] Returns an array of OffIntervento objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OffIntervento
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
