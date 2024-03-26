<?php 
// src/Service/rpx.php
namespace App\Service;
use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Filesystem\Filesystem;

class rpx
{
    private $session;
    private $em;

    public function __construct(
        private RequestStack $requestStack,
        EntityManagerInterface $em,
        private Security $security,
    ) {
        // Accessing the session in the constructor is *NOT* recommended, since
        // it might not be accessible yet or lead to unwanted side-effects
        // $this->session = $requestStack->getSession();
        $this->em = $em;
    }

    // inizio
    public function start_app(): void
    {
        //
        $this->session = $this->requestStack->getSession();
        $this->session->start();
        $app_started = $this->session->get('app_started', 0);
        $user = $this->security->getUser();

        if ($app_started==0){
           $this->session->set('app_started', '1');
          
        }// qui posso anche in teoria aggiungere cose aumentando il valore di app_started (quasi una versione della session)
       
        
    }

    public function logout(): string
    {
       $this->security->logout(false);
        return "0";
    }


    public function sid(): string
    {
        $this->start_app();
        return $this->session->getid();
    }

    public function upgrade_db(): string
    {
        $this->start_app();
        $ret="";
        $ret.=$this->add_column("teste","sid","char(20)");
        $ret.="<br>";
        return $ret;
    }

    public function add_column($table,$field,$option): string
    {
        $this->start_app();
        $conn = $this->em->getConnection();
        $nret = $this->check_field_exist($table,$field);
        if ($nret>0){
            $sql = $field." già presente nella taballe ".$table;
            
        }
        else{
            $sql = "ALTER TABLE ".$table." ADD ".$field. " ".$option;
            $conn->executeQuery($sql);
        }
        
        return $sql;
        
    }

    public function check_field_exist($table,$field): string
    {
        $this->start_app();
        $conn = $this->em->getConnection();

$sql="

if exists(
    SELECT 1
              FROM   INFORMATION_SCHEMA.COLUMNS
              WHERE  TABLE_NAME = '".$table."'
                     AND COLUMN_NAME = '".$field. " ')
                     begin
                     select 1 as ret
                     end
                     else
                     begin
                     select 0 as ret
                     end

";

        $resultSet = $conn->executeQuery($sql);
        $dd = $resultSet->fetchAllAssociative();
        
        return $dd[0]["ret"];
        
    }

    public function get_random_name($prefix=''): string
    {
    // Genera un UUID v4 (casuale)
    $uuid = Uuid::v4();

    // Crea un nome di file con l'UUID
    $filename = $prefix . $uuid ;
    return $filename;

    }

    public function get_docx2pdf($source): string
    {
        $rp_soffice = $_SERVER["RP_SOFFICE"];
        if (!file_exists($source)) {
            return "Non esiste il file ".$source;
        }

        $command = '"'.$rp_soffice."\soffice".'"'." --headless --convert-to pdf " . escapeshellarg($source) . " --outdir " . escapeshellarg(dirname($source));
        shell_exec($command);

        $target_real = str_replace('docx', 'pdf', $source);
        if (file_exists($target_real)) {
            $this->eliminaFileAction($source);
            return $target_real;
        }else{
            return "Non esiste il file ".$target_real;
        }

    }


    public function eliminaFileAction($percorsoDelFile): int
    {
        $filesystem = new Filesystem();
    
        try {
            // Verifica se il file esiste prima di tentare di eliminarlo
            if ($filesystem->exists($percorsoDelFile)) {
                // Elimina il file
                $filesystem->remove($percorsoDelFile);
    
                // Il file è stato eliminato con successo
                return 1;
            } else {
                // Il file non esiste
                return 0;
            }
        } catch (\Exception $e) {
            // Gestisci eventuali eccezioni durante l'eliminazione
            return -1;
        }
    }



  




}