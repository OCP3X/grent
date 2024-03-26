<?php

namespace App\Repository;

use App\Entity\Revisione;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Revisione>
 *
 * @method Revisione|null find($id, $lockMode = null, $lockVersion = null)
 * @method Revisione|null findOneBy(array $criteria, array $orderBy = null)
 * @method Revisione[]    findAll()
 * @method Revisione[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RevisioneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Revisione::class);
    }


    public function list(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT 'Collaudo' AS Tipo_Revisione, collaudo AS data, id_l, targa, collaudo_pross, collaudo_alert FROM veicoli_info WHERE collaudo IS NOT NULL
        UNION
        SELECT 'Tachigrafi' AS Tipo_Revisione, tachigrafi AS data, id_l, targa, tachigrafi_pross, tachigrafi_alert FROM veicoli_info WHERE tachigrafi IS NOT NULL
        UNION
        SELECT 'Estintori' AS Tipo_Revisione, estintori AS data, id_l, targa, estintori_pross, estintori_alert FROM veicoli_info WHERE estintori IS NOT NULL
        UNION
        SELECT 'Casetta Pronto Soccorso' AS Tipo_Revisione, casetta_ps AS data, id_l, targa, casetta_ps_pross, casetta_ps_alert FROM veicoli_info WHERE casetta_ps IS NOT NULL
        UNION
        SELECT 'Sistema Antincendio Pullman' AS Tipo_Revisione, sistema_ap AS data, id_l, targa, sistema_ap_pross, sistema_ap_alert FROM veicoli_info WHERE sistema_ap IS NOT NULL";
    

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $aRes = $resultSet->fetchAllAssociative();

        // returns an array
        return  $aRes;
    }

    public function notifica(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT 
        collaudo_alert, 
        tachigrafi_alert, 
        estintori_alert, 
        casetta_ps_alert, 
        sistema_ap_alert 
    FROM veicoli_info
    WHERE DATEDIFF(DAY, collaudo_alert, GETDATE()) <= 30
       OR DATEDIFF(DAY, tachigrafi_alert, GETDATE()) <= 30
       OR DATEDIFF(DAY, estintori_alert, GETDATE()) <= 30
       OR DATEDIFF(DAY, casetta_ps_alert, GETDATE()) <= 30
       OR DATEDIFF(DAY, sistema_ap_alert, GETDATE()) <= 30;
    ";
    

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $aRes = $resultSet->fetchAllAssociative();

        // returns an array
        return  $aRes;
    }

//    /**
//     * @return Revisione[] Returns an array of Revisione objects
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

//    public function findOneBySomeField($value): ?Revisione
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
