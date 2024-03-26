<?php

namespace App\Repository;

use App\Entity\Teste;
use App\Entity\Righe;
use App\Service\rpx;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Datetime;
use PhpParser\Node\Stmt\Break_;
use Symfony\Bundle\SecurityBundle\Security;


/**
 * @extends ServiceEntityRepository<Teste>
 *
 * @method Teste|null find($id, $lockMode = null, $lockVersion = null)
 * @method Teste|null findOneBy(array $criteria, array $orderBy = null)
 * @method Teste[]    findAll()
 * @method Teste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TesteRepository extends ServiceEntityRepository
{
    private $rpx;
    public function __construct(ManagerRegistry $registry
    , private UrlGeneratorInterface $router
    ,rpx $rpx
    , private Security $security
    )
    {
        parent::__construct($registry, Teste::class);
        $this->rpx = $rpx;
    }

    public function save(Teste $entity, bool $flush = false): ?Teste
    {

        $adesso = new Datetime();
        $user = $this->security->getUser();
        $id_utente = $user->getIdWu();

        if ($entity->getid()>0){
        }else{
            
            $entity->setDataCreazione($adesso);
            $entity->setUtenteCreazione($id_utente);
        }

        // controllo il numerodoc
        $nNumeroDoc=$entity->getNumeroDoc();
        if (is_null($nNumeroDoc) || $nNumeroDoc==0 ){
            
            //devo recuperare il prossimo numero libero
            $entity->setNumeroDoc($this->get_next_numerodoc());
            
        }
        $entity->setDataModifica($adesso);
        $entity->setIdMeccanico(0);
        $entity->setUtenteModifica($id_utente);
        $entity->setIdTReal(0);
        $entity->setState('');
        $entity->setSid('');


        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
        return $entity;
    }

    
    public function remove(Teste $entity, bool $flush = false): void
    {
        // qui devo prima eliminare tutte le righe relative, poi eventualmente ci inseriamo qualche regola
        // devo chiamare il repository
         $this->getEntityManager()->getRepository(Righe::class)->deleteAllRigheForTestaId($entity->getid());
        
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
        
    }
    

    public function get_next_numerodoc(): int
    {
        $conn = $this->getEntityManager()->getConnection();
        // returns an array
        $sql = "
        select max(numero_doc) as max 
        from teste as t 
        ";

        $resultSet = $conn->executeQuery($sql);

        $a1 = $resultSet->fetchAllAssociative();
        $next_numero = 1;
        foreach($a1 as $r){
            $next_numero =$r["max"] + 1;
        }
        return $next_numero;

    }

    public function getTesteForTesteId(int $idTeste): array
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT p
            FROM App\Entity\Teste p
            WHERE p.id  =  :des'
            )->setParameter('des', $idTeste);
            
            // returns an array
            return $query->getResult();
    }
    
    public function getTesteCanBeShowInIndex($filtro=array()): array
    {

        /*
        $query = $this->getEntityManager()->createQuery(
            'SELECT p
            FROM App\Entity\Teste p
            WHERE p.id_t_real != -2 order by p.data_creazione'
            );

            */

            $cwhere='';
            //dd($filtro);
            foreach($filtro as $k=>$val){
                switch($k){
                    case "terminato":
                        switch($val){
                            case 0:
                                $cwhere.=' AND (t.terminato = 0 or t.terminato is null)';
                                break;
                            case 1:
                                $cwhere.=' AND t.terminato = 1 ';
                                break;
                            }
                        break;

                }
            }
            $conn = $this->getEntityManager()->getConnection();
            // returns an array
            $sql = "
            select t.*
            ,v.descrizion as veicolo_descr
            ,v.targa
            from teste as t 
            inner join v_veicoli_web as v on t.id_veicolo = v.id_veicolo
            ".$cwhere."
            order by data_doc desc
            ";

            $resultSet = $conn->executeQuery($sql);

            $a1 = $resultSet->fetchAllAssociative();
            $aLab= array();
            foreach($a1 as $r){

                $r["href_dettaglio"] = $this->router->generate('app_teste_dett', [
                    'id_testa' => $r["id_testa"],
                ]);

                if ($r["terminato"]>0){
                    $r["terminato_class"]=' table-secondary ';
                }else{
                    $r["terminato_class"]='';
                }

                $r["href_stampa_doc"] = $this->router->generate('app_stampa_doc', [
                    'id_testa' => $r["id_testa"],
                ]);


                $aLab[]=$r;
            }

            return $aLab;
    }
    
   

    public function getTesteForIdTesteReal($value): array
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT p
            FROM App\Entity\Teste p
            WHERE p.id_t_real = :des'
            )->setParameter('des', $value);
        
        // returns an array
        return $query->getResult();
    }

    public function getTempTestaBySid($sid): array
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT t
            FROM App\Entity\Teste t
            WHERE t.id_t_real = -1
            and trim(t.sid) = :sid'
            )->setParameter('sid', trim($sid));
        
           

        return $query->getResult();
    }

    public function duplica($source,$target,$tipo='TEMP'): void
    {
        $target->setTipoDoc($source->getTipoDoc());
        $target->setNumeroDoc($source->getNumeroDoc());
        $target->setDataDoc($source->getDataDoc());
        $target->setIdVeicolo($source->getIdVeicolo());
        $target->setIdMeccanico($source->getIdMeccanico());
        $target->setTipoIntervento($source->getTipoIntervento());
        $target->setDataCreazione($source->getDataCreazione());
        $target->setDataModifica($source->getDataModifica());
        $target->setUtenteCreazione($source->getUtenteCreazione());
        $target->setUtenteModifica($source->getUtenteModifica());
        if ($tipo=='TEMP'){
            $target->setIdTReal($source->getId()); // recupero l'id originale
        }else{
            $target->setIdTReal(0); // recupero l'id originale
        }

        $c_sid=$source->getSid();
        if (is_null($c_sid)){
            $c_sid = $this->rpx->sid();
        }
        $target->setSid($c_sid);
        
    
    }


   


//    /**
//     * @return Teste[] Returns an array of Teste objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Teste
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
