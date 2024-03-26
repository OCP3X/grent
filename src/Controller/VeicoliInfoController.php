<?php

namespace App\Controller;

use App\Entity\VeicoliInfo;
use App\Entity\Veicoli;
use App\Form\VeicoliInfoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Attribute\IsGranted;
//provisional
use App\Service\rpx;
use App\Repository\TesteRepository;
use App\Entity\Righe;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;



#[IsGranted('ROLE_USER')]
#[Route('/VeicoliInfo')]
//#[IsGranted('ROLE_USER')]
class VeicoliInfoController extends AbstractController
{


    #[Route('/', name: 'app_VeicoliInfo_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
               
        return $this->render('VeicoliInfo/index.html.twig');
    }
  

    #[Route('/{idL}', name: 'app_VeicoliInfo_delete', methods: ['POST'])]
    public function delete(Request $request, VeicoliInfo $VeicoliInfo, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($VeicoliInfo);
        $entityManager->flush();

        return $this->redirectToRoute('app_VeicoliInfo_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/delete/{idL}', name: 'app_VeicoliInfo_delete_form_less', methods: ['GET'])]
    public function deleteFormLess(Request $request, VeicoliInfo $VeicoliInfo, EntityManagerInterface $entityManager): Response
{
    try {
        $entityManager->remove($VeicoliInfo);
        $entityManager->flush();
    } catch (\Exception $e) {
        
        return new Response('Error al eliminar el registro: ' . $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    return $this->redirectToRoute('app_VeicoliInfo_index', [], Response::HTTP_SEE_OTHER);
}



#[Route('/aggiorna/', name: 'app_VeicoliInfo_aggiorna', methods: ['POST'])]
public function aggiorna(Request $request, EntityManagerInterface $entityManager): Response
{
    $data = json_decode($request->getContent(), true);

      
    $targa = $data['targa']; 
    $anno = $data['anno'];   
    $telaio = $data['telaio'];
    $dimensioni = $data['dimensioni'];
    $modello_motore = $data['modello_motore'];
    $modello_colore = $data['modello_colore'];
    $scadenza_garanzia = $data['scadenza_garanzia'];
    $obra = $data['obra'];
    $posti = $data['posti'];
    $nm_motore = $data['nm_motore'];

    $collaudo = $data['collaudo'];
    $tachigrafi = $data['tachigrafi'];
    $estintori = $data['estintori'];
    $casetta_ps = $data['casetta_ps'];
    $sistema_ap = $data['sistema_ap'];
        
    $tipo_olio_cambio_tc = $data['tipo_olio_cambio_tc'];
    $tipo_olio_diff_tc = $data['tipo_olio_diff_tc'];
    $tipo_olio_rallentatore_tc = $data['tipo_olio_rallentatore_tc'];
    $tipo_olio_idroventola_tc = $data['tipo_olio_idroventola_tc'];
    $olio_mozzi_ant_tc = $data['olio_mozzi_ant_tc'];
    $olio_mozzi_post_tc = $data['olio_mozzi_post_tc'];
    $altro_olio_tc = $data['altro_olio_tc'];

    $tipo_olio_cambio_qd = $data['tipo_olio_cambio_qd'];
    $tipo_olio_diff_qd = $data['tipo_olio_diff_qd'];
    $tipo_olio_rallentatore_qd = $data['tipo_olio_rallentatore_qd'];
    $tipo_olio_idroventola_qd = $data['tipo_olio_idroventola_qd'];
    $olio_mozzi_ant_qd = $data['olio_mozzi_ant_qd'];
    $olio_mozzi_post_qd = $data['olio_mozzi_post_qd'];
    $altro_olio_qd = $data['altro_olio_qd'];

    $tipo_olio_cambio_f = $data['tipo_olio_cambio_f'];
    $tipo_olio_diff_f = $data['tipo_olio_diff_f'];
    $tipo_olio_rallentatore_f = $data['tipo_olio_rallentatore_f'];
    $tipo_olio_idroventola_f = $data['tipo_olio_idroventola_f'];
    $olio_mozzi_ant_f = $data['olio_mozzi_ant_f'];
    $olio_mozzi_post_f = $data['olio_mozzi_post_f'];
    $altro_olio_f = $data['altro_olio_f'];

    $cinghia_servizi_cm = $data['cinghia_servizi_cm'];
    $rullo_cinghia_servizi_cm = $data['rullo_cinghia_servizi_cm'];
    $tenditore_cinghia_servizi_cm = $data['tenditore_cinghia_servizi_cm'];

    $cinghia_servizi_fm = $data['cinghia_servizi_fm'];
    $rullo_cinghia_servizi_fm = $data['rullo_cinghia_servizi_fm'];
    $tenditore_cinghia_servizi_fm = $data['tenditore_cinghia_servizi_fm'];

    $cinghia_servizi_i = $data['cinghia_servizi_i'];
    $rullo_cinghia_servizi_i = $data['rullo_cinghia_servizi_i'];
    $tenditore_cinghia_servizi_i = $data['tenditore_cinghia_servizi_i'];
    //aut
    $cinghia_ac_aut_cm = $data['cinghia_ac_aut_cm'];
    $rullo_cinghia_ac_aut_cm = $data['rullo_cinghia_ac_aut_cm'];
    $tenditore_cinghia_ac_aut_cm = $data['tenditore_cinghia_ac_aut_cm'];

    $cinghia_ac_aut_fm = $data['cinghia_ac_aut_fm'];
    $rullo_cinghia_ac_aut_fm = $data['rullo_cinghia_ac_aut_fm'];
    $tenditore_cinghia_ac_aut_fm = $data['tenditore_cinghia_ac_aut_fm'];

    $cinghia_ac_aut_i = $data['cinghia_ac_aut_i'];
    $rullo_cinghia_ac_aut_i = $data['rullo_cinghia_ac_aut_i'];
    $tenditore_cinghia_ac_aut_i = $data['tenditore_cinghia_ac_aut_i'];
    //pass
    $cinghia_ac_pass_cm = $data['cinghia_ac_pass_cm'];
    $rullo_cinghia_ac_pass_cm = $data['rullo_cinghia_ac_pass_cm'];
    $tenditore_cinghia_ac_pass_cm = $data['tenditore_cinghia_ac_pass_cm'];

    $cinghia_ac_pass_fm = $data['cinghia_ac_pass_fm'];
    $rullo_cinghia_ac_pass_fm = $data['rullo_cinghia_ac_pass_fm'];
    $tenditore_cinghia_ac_pass_fm = $data['tenditore_cinghia_ac_pass_fm'];

    $cinghia_ac_pass_i = $data['cinghia_ac_pass_i'];
    $rullo_cinghia_ac_pass_i = $data['rullo_cinghia_ac_pass_i'];
    $tenditore_cinghia_ac_pass_i = $data['tenditore_cinghia_ac_pass_i'];
    //altri
    $altre_cinghie_cm = $data['altre_cinghie_cm'];
    $altri_rulli_cm = $data['altri_rulli_cm'];
    $altri_tenditore_cm = $data['altri_tenditore_cm'];

    $altre_cinghie_fm = $data['altre_cinghie_fm'];
    $altri_rulli_fm = $data['altri_rulli_fm'];
    $altri_tenditore_fm = $data['altri_tenditore_fm'];

    $altre_cinghie_i = $data['altre_cinghie_i'];
    $altri_rulli_i = $data['altri_rulli_i'];
    $altri_tenditore_i = $data['altri_tenditore_i'];
    //filtro
    $filtro_gasolio_c = $data['filtro_gasolio_c'];
    $prefiltro_gasolio_c = $data['prefiltro_gasolio_c'];
    $altro_filtro_gasolio_c = $data['altro_filtro_gasolio_c'];
    $filtro_area_motore_c = $data['filtro_area_motore_c'];
    $filtro_olio_motore_c = $data['filtro_olio_motore_c'];
    $kit_filtro_centrifugo_c = $data['kit_filtro_centrifugo_c'];
    $filtro_essiccatore_c = $data['filtro_essiccatore_c'];
    $filtro_urea_c = $data['filtro_urea_c'];
    $filtro_idroventola_c = $data['filtro_idroventola_c'];
    $filtro_olio_cambio_c = $data['filtro_olio_cambio_c'];
    $filtro_olio_diff_c = $data['filtro_olio_diff_c'];
    $filtro_olio_rellantatore_c = $data['filtro_olio_rellantatore_c'];
    $filtro_aria_ac_autista_c = $data['filtro_aria_ac_autista_c'];
    $filtro_aria_ac_pass_c = $data['filtro_aria_ac_pass_c'];

    $filtro_gasolio_f = $data['filtro_gasolio_f'];
    $prefiltro_gasolio_f = $data['prefiltro_gasolio_f'];
    $altro_filtro_gasolio_f = $data['altro_filtro_gasolio_f'];
    $filtro_area_motore_f = $data['filtro_area_motore_f'];
    $filtro_olio_motore_f = $data['filtro_olio_motore_f'];
    $kit_filtro_centrifugo_f = $data['kit_filtro_centrifugo_f'];
    $filtro_essiccatore_f = $data['filtro_essiccatore_f'];
    $filtro_urea_f = $data['filtro_urea_f'];
    $filtro_idroventola_f = $data['filtro_idroventola_f'];
    $filtro_olio_cambio_f = $data['filtro_olio_cambio_f'];
    $filtro_olio_diff_f = $data['filtro_olio_diff_f'];
    $filtro_olio_rellantatore_f = $data['filtro_olio_rellantatore_f'];
    $filtro_aria_ac_autista_f = $data['filtro_aria_ac_autista_f'];
    $filtro_aria_ac_pass_f = $data['filtro_aria_ac_pass_f'];

    $filtro_gasolio_i = $data['filtro_gasolio_i'];
    $prefiltro_gasolio_i = $data['prefiltro_gasolio_i'];
    $altro_filtro_gasolio_i = $data['altro_filtro_gasolio_i'];
    $filtro_area_motore_i = $data['filtro_area_motore_i'];
    $filtro_olio_motore_i = $data['filtro_olio_motore_i'];
    $kit_filtro_centrifugo_i = $data['kit_filtro_centrifugo_i'];
    $filtro_essiccatore_i = $data['filtro_essiccatore_i'];
    $filtro_urea_i = $data['filtro_urea_i'];
    $filtro_idroventola_i = $data['filtro_idroventola_i'];
    $filtro_olio_cambio_i = $data['filtro_olio_cambio_i'];
    $filtro_olio_diff_i = $data['filtro_olio_diff_i'];
    $filtro_olio_rellantatore_i = $data['filtro_olio_rellantatore_i'];
    $filtro_aria_ac_autista_i = $data['filtro_aria_ac_autista_i'];
    $filtro_aria_ac_pass_i = $data['filtro_aria_ac_pass_i'];
    //freno
    $pastiglie_freno_ant_c = $data['pastiglie_freno_ant_c'];
    $pastiglie_freno_post_c = $data['pastiglie_freno_post_c'];
    $pastiglie_freno_ant_f = $data['pastiglie_freno_ant_f'];
    $pastiglie_freno_post_f = $data['pastiglie_freno_post_f'];
    $pastiglie_freno_ant_n = $data['pastiglie_freno_ant_n'];
    $pastiglie_freno_post_n = $data['pastiglie_freno_post_n'];
    //batteria
    $batterie_c = $data['batterie_c'];
    $modello_spazzole_tergi_c = $data['modello_spazzole_tergi_c'];
    $gomme_ant_c = $data['gomme_ant_c'];
    $gomme_post_c = $data['gomme_post_c'];
    $batterie_f = $data['batterie_f'];
    $modello_spazzole_tergi_f = $data['modello_spazzole_tergi_f'];
    $gomme_ant_f = $data['gomme_ant_f'];
    $gomme_post_f = $data['gomme_post_f'];
    $batterie_n = $data['batterie_n'];
    $modello_spazzole_tergi_n = $data['modello_spazzole_tergi_n'];
    $gomme_ant_n = $data['gomme_ant_n'];
    $gomme_post_n = $data['gomme_post_n'];
    
    $veicoloExistente = $entityManager->getRepository(VeicoliInfo::class)->findOneBy(['targa' => $targa]);

    try {
        
        if ($veicoloExistente) {
            $veicoloExistente->setAnno($anno);
            $veicoloExistente->setTelaio($telaio);
            $veicoloExistente->setDimensioni($dimensioni);
            $veicoloExistente->setModello_motore($modello_motore);
            $veicoloExistente->setModello_colore($modello_colore);
            $veicoloExistente->setScadenza_garanzia($scadenza_garanzia);
            $veicoloExistente->setObra($obra);
            $veicoloExistente->setPosti($posti);
            $veicoloExistente->setNm_motore($nm_motore);

            $veicoloExistente->setCollaudo(new \DateTime($collaudo));
            $veicoloExistente->setTachigrafi(new \DateTime($tachigrafi));
            $veicoloExistente->setEstintori(new \DateTime($estintori));
            $veicoloExistente->setCasetta_ps(new \DateTime($casetta_ps));
            $veicoloExistente->setSistema_ap(new \DateTime($sistema_ap));
            //PROSS
            //collaudo_pross
            $veicoloExistente->setCollaudo_pross(new \DateTime($collaudo));            
            $collaudoProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCollaudo_pross());
            $collaudoProssModified = $collaudoProssImmutable->add(new \DateInterval('P1Y'));           
            $veicoloExistente->setCollaudo_pross(\DateTime::createFromImmutable($collaudoProssModified));            
            //tachigrafi_pross
            $veicoloExistente->setTachigrafi_pross(new \DateTime($tachigrafi));            
            $tachigrafiProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getTachigrafi_pross());
            $tachigrafiProssModified = $tachigrafiProssImmutable->add(new \DateInterval('P2Y'));           
            $veicoloExistente->setTachigrafi_pross(\DateTime::createFromImmutable($tachigrafiProssModified)); 
            //estintori_pross
            $veicoloExistente->setEstintori_pross(new \DateTime($estintori));           
            $estintoriProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getEstintori_pross());
            $estintoriProssModified = $estintoriProssImmutable->add(new \DateInterval('P6M'));            
            $veicoloExistente->setEstintori_pross(\DateTime::createFromImmutable($estintoriProssModified));
             //casetta_ps_pross
             $veicoloExistente->setCasetta_ps_pross(new \DateTime($casetta_ps));            
             $casetta_psProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCasetta_ps_pross());
             $casetta_psProssModified = $casetta_psProssImmutable->add(new \DateInterval('P1Y'));           
             $veicoloExistente->setCasetta_ps_pross(\DateTime::createFromImmutable($casetta_psProssModified));
             //sistema_ap_pross
             $veicoloExistente->setSistema_ap_pross(new \DateTime($sistema_ap));            
             $sistema_apProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getSistema_ap_pross());
             $sistema_apProssModified = $sistema_apProssImmutable->add(new \DateInterval('P1Y'));           
             $veicoloExistente->setSistema_ap_pross(\DateTime::createFromImmutable($sistema_apProssModified));
            //ALERT
            $veicoloExistente->setCollaudo_alert(new \DateTime($collaudo));            
            $collaudoAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCollaudo_alert());
            $collaudoAlertModified = $collaudoAlertImmutable->add(new \DateInterval('P11M'));           
            $veicoloExistente->setCollaudo_alert(\DateTime::createFromImmutable($collaudoAlertModified));
            //tachigrafi_alert
            $veicoloExistente->setTachigrafi_alert(new \DateTime($tachigrafi));            
            $tachigrafiAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getTachigrafi_alert());
            $tachigrafiAlertModified = $tachigrafiAlertImmutable->add(new \DateInterval('P1Y11M'));           
            $veicoloExistente->setTachigrafi_alert(\DateTime::createFromImmutable($tachigrafiAlertModified));
             //estintori_alert
             $veicoloExistente->setEstintori_alert(new \DateTime($estintori));           
             $estintoriAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getEstintori_alert());
             $estintoriAlertModified = $estintoriAlertImmutable->add(new \DateInterval('P5M'));            
             $veicoloExistente->setEstintori_alert(\DateTime::createFromImmutable($estintoriAlertModified));
              //casetta_ps_alert
              $veicoloExistente->setCasetta_ps_alert(new \DateTime($casetta_ps));            
              $casetta_psAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCasetta_ps_alert());
              $casetta_psAlertModified = $casetta_psAlertImmutable->add(new \DateInterval('P11M'));           
              $veicoloExistente->setCasetta_ps_alert(\DateTime::createFromImmutable($casetta_psAlertModified)); 
              //sistema_ap_alert
             $veicoloExistente->setSistema_ap_alert(new \DateTime($sistema_ap));            
             $sistema_apAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getSistema_ap_alert());
             $sistema_apAlertModified = $sistema_apAlertImmutable->add(new \DateInterval('P11M'));           
             $veicoloExistente->setSistema_ap_alert(\DateTime::createFromImmutable($sistema_apAlertModified));


            $veicoloExistente->setTipo_olio_cambio_tc($tipo_olio_cambio_tc);
            $veicoloExistente->setTipo_olio_diff_tc($tipo_olio_diff_tc);
            $veicoloExistente->setTipo_olio_rallentatore_tc($tipo_olio_rallentatore_tc);
            $veicoloExistente->setTipo_olio_idroventola_tc($tipo_olio_idroventola_tc);
            $veicoloExistente->setOlio_mozzi_ant_tc($olio_mozzi_ant_tc);
            $veicoloExistente->setOlio_mozzi_post_tc($olio_mozzi_post_tc);
            $veicoloExistente->setAltro_olio_tc($altro_olio_tc);
            //qd
            $veicoloExistente->setTipo_olio_cambio_qd($tipo_olio_cambio_qd);
            $veicoloExistente->setTipo_olio_diff_qd($tipo_olio_diff_qd);
            $veicoloExistente->setTipo_olio_rallentatore_qd($tipo_olio_rallentatore_qd);
            $veicoloExistente->setTipo_olio_idroventola_qd($tipo_olio_idroventola_qd);
            $veicoloExistente->setOlio_mozzi_ant_qd($olio_mozzi_ant_qd);
            $veicoloExistente->setOlio_mozzi_post_qd($olio_mozzi_post_qd);
            $veicoloExistente->setAltro_olio_qd($altro_olio_qd);
            //f
            $veicoloExistente->setTipo_olio_cambio_f($tipo_olio_cambio_f);
            $veicoloExistente->setTipo_olio_diff_f($tipo_olio_diff_f);
            $veicoloExistente->setTipo_olio_rallentatore_f($tipo_olio_rallentatore_f);
            $veicoloExistente->setTipo_olio_idroventola_f($tipo_olio_idroventola_f);
            $veicoloExistente->setOlio_mozzi_ant_f($olio_mozzi_ant_f);
            $veicoloExistente->setOlio_mozzi_post_f($olio_mozzi_post_f);
            $veicoloExistente->setAltro_olio_f($altro_olio_f);
            //nuevo
            $veicoloExistente->setCinghia_servizi_cm($cinghia_servizi_cm);
            $veicoloExistente->setRullo_cinghia_servizi_cm($rullo_cinghia_servizi_cm);
            $veicoloExistente->setTenditore_cinghia_servizi_cm($tenditore_cinghia_servizi_cm);

            $veicoloExistente->setCinghia_servizi_fm($cinghia_servizi_fm);
            $veicoloExistente->setRullo_cinghia_servizi_fm($rullo_cinghia_servizi_fm);
            $veicoloExistente->setTenditore_cinghia_servizi_fm($tenditore_cinghia_servizi_fm);

            $veicoloExistente->setCinghia_servizi_i($cinghia_servizi_i);
            $veicoloExistente->setRullo_cinghia_servizi_i($rullo_cinghia_servizi_i);
            $veicoloExistente->setTenditore_cinghia_servizi_i($tenditore_cinghia_servizi_i);
            //
            $veicoloExistente->setCinghia_ac_aut_cm($cinghia_ac_aut_cm);
            $veicoloExistente->setRullo_cinghia_ac_aut_cm($rullo_cinghia_ac_aut_cm);
            $veicoloExistente->setTenditore_cinghia_ac_aut_cm($tenditore_cinghia_ac_aut_cm);

            $veicoloExistente->setCinghia_ac_aut_fm($cinghia_ac_aut_fm);
            $veicoloExistente->setRullo_cinghia_ac_aut_fm($rullo_cinghia_ac_aut_fm);
            $veicoloExistente->setTenditore_cinghia_ac_aut_fm($tenditore_cinghia_ac_aut_fm);

            $veicoloExistente->setCinghia_ac_aut_i($cinghia_ac_aut_i);
            $veicoloExistente->setRullo_cinghia_ac_aut_i($rullo_cinghia_ac_aut_i);
            $veicoloExistente->setTenditore_cinghia_ac_aut_i($tenditore_cinghia_ac_aut_i);
            //pass
            $veicoloExistente->setCinghia_ac_pass_cm($cinghia_ac_pass_cm);
            $veicoloExistente->setRullo_cinghia_ac_pass_cm($rullo_cinghia_ac_pass_cm);
            $veicoloExistente->setTenditore_cinghia_ac_pass_cm($tenditore_cinghia_ac_pass_cm);

            $veicoloExistente->setCinghia_ac_pass_fm($cinghia_ac_pass_fm);
            $veicoloExistente->setRullo_cinghia_ac_pass_fm($rullo_cinghia_ac_pass_fm);
            $veicoloExistente->setTenditore_cinghia_ac_pass_fm($tenditore_cinghia_ac_pass_fm);

            $veicoloExistente->setCinghia_ac_pass_i($cinghia_ac_pass_i);
            $veicoloExistente->setRullo_cinghia_ac_pass_i($rullo_cinghia_ac_pass_i);
            $veicoloExistente->setTenditore_cinghia_ac_pass_i($tenditore_cinghia_ac_pass_i);
            //altri
            $veicoloExistente->setAltre_cinghie_cm($altre_cinghie_cm);
            $veicoloExistente->setAltri_rulli_cm($altri_rulli_cm);
            $veicoloExistente->setAltri_tenditore_cm($altri_tenditore_cm);

            $veicoloExistente->setAltre_cinghie_fm($altre_cinghie_fm);
            $veicoloExistente->setAltri_rulli_fm($altri_rulli_fm);
            $veicoloExistente->setAltri_tenditore_fm($altri_tenditore_fm);

            $veicoloExistente->setAltre_cinghie_i($altre_cinghie_i);
            $veicoloExistente->setAltri_rulli_i($altri_rulli_i);
            $veicoloExistente->setAltri_tenditore_i($altri_tenditore_i);
            //filtro
            $veicoloExistente->setFiltro_gasolio_c($filtro_gasolio_c);
            $veicoloExistente->setPrefiltro_gasolio_c($prefiltro_gasolio_c);
            $veicoloExistente->setAltro_filtro_gasolio_c($altro_filtro_gasolio_c);
            $veicoloExistente->setFiltro_area_motore_c($filtro_area_motore_c);
            $veicoloExistente->setFiltro_olio_motore_c($filtro_olio_motore_c);
            $veicoloExistente->setKit_filtro_centrifugo_c($kit_filtro_centrifugo_c);
            $veicoloExistente->setFiltro_essiccatore_c($filtro_essiccatore_c);
            $veicoloExistente->setFiltro_urea_c($filtro_urea_c);
            $veicoloExistente->setFiltro_idroventola_c($filtro_idroventola_c);
            $veicoloExistente->setFiltro_olio_cambio_c($filtro_olio_cambio_c);
            $veicoloExistente->setFiltro_olio_diff_c($filtro_olio_diff_c);
            $veicoloExistente->setFiltro_olio_rellantatore_c($filtro_olio_rellantatore_c);
            $veicoloExistente->setFiltro_aria_ac_autista_c($filtro_aria_ac_autista_c);
            $veicoloExistente->setFiltro_aria_ac_pass_c($filtro_aria_ac_pass_c);

            $veicoloExistente->setFiltro_gasolio_f($filtro_gasolio_f);
            $veicoloExistente->setPrefiltro_gasolio_f($prefiltro_gasolio_f);
            $veicoloExistente->setAltro_filtro_gasolio_f($altro_filtro_gasolio_f);
            $veicoloExistente->setFiltro_area_motore_f($filtro_area_motore_f);
            $veicoloExistente->setFiltro_olio_motore_f($filtro_olio_motore_f);
            $veicoloExistente->setKit_filtro_centrifugo_f($kit_filtro_centrifugo_f);
            $veicoloExistente->setFiltro_essiccatore_f($filtro_essiccatore_f);
            $veicoloExistente->setFiltro_urea_f($filtro_urea_f);
            $veicoloExistente->setFiltro_idroventola_f($filtro_idroventola_f);
            $veicoloExistente->setFiltro_olio_cambio_f($filtro_olio_cambio_f);
            $veicoloExistente->setFiltro_olio_diff_f($filtro_olio_diff_f);
            $veicoloExistente->setFiltro_olio_rellantatore_f($filtro_olio_rellantatore_f);
            $veicoloExistente->setFiltro_aria_ac_autista_f($filtro_aria_ac_autista_f);
            $veicoloExistente->setFiltro_aria_ac_pass_f($filtro_aria_ac_pass_f);

            $veicoloExistente->setFiltro_gasolio_i($filtro_gasolio_i);
            $veicoloExistente->setPrefiltro_gasolio_i($prefiltro_gasolio_i);
            $veicoloExistente->setAltro_filtro_gasolio_i($altro_filtro_gasolio_i);
            $veicoloExistente->setFiltro_area_motore_i($filtro_area_motore_i);
            $veicoloExistente->setFiltro_olio_motore_i($filtro_olio_motore_i);
            $veicoloExistente->setKit_filtro_centrifugo_i($kit_filtro_centrifugo_i);
            $veicoloExistente->setFiltro_essiccatore_i($filtro_essiccatore_i);
            $veicoloExistente->setFiltro_urea_i($filtro_urea_i);
            $veicoloExistente->setFiltro_idroventola_i($filtro_idroventola_i);
            $veicoloExistente->setFiltro_olio_cambio_i($filtro_olio_cambio_i);
            $veicoloExistente->setFiltro_olio_diff_i($filtro_olio_diff_i);
            $veicoloExistente->setFiltro_olio_rellantatore_i($filtro_olio_rellantatore_i);
            $veicoloExistente->setFiltro_aria_ac_autista_i($filtro_aria_ac_autista_i);
            $veicoloExistente->setFiltro_aria_ac_pass_i($filtro_aria_ac_pass_i);
            //freno
            $veicoloExistente->setPastiglie_freno_ant_c($pastiglie_freno_ant_c);
            $veicoloExistente->setPastiglie_freno_post_c($pastiglie_freno_post_c);
            $veicoloExistente->setPastiglie_freno_ant_f($pastiglie_freno_ant_f);
            $veicoloExistente->setPastiglie_freno_post_f($pastiglie_freno_post_f);
            $veicoloExistente->setPastiglie_freno_ant_n($pastiglie_freno_ant_n);
            $veicoloExistente->setPastiglie_freno_post_n($pastiglie_freno_post_n);
            //batteria
            $veicoloExistente->setBatterie_c($batterie_c);
            $veicoloExistente->setModello_spazzole_tergi_c($modello_spazzole_tergi_c);
            $veicoloExistente->setGomme_ant_c($gomme_ant_c);
            $veicoloExistente->setGomme_post_c($gomme_post_c);
            $veicoloExistente->setBatterie_f($batterie_f);
            $veicoloExistente->setModello_spazzole_tergi_f($modello_spazzole_tergi_f);
            $veicoloExistente->setGomme_ant_f($gomme_ant_f);
            $veicoloExistente->setGomme_post_f($gomme_post_f);
            $veicoloExistente->setBatterie_n($batterie_n);
            $veicoloExistente->setModello_spazzole_tergi_n($modello_spazzole_tergi_n);
            $veicoloExistente->setGomme_ant_n($gomme_ant_n);
            $veicoloExistente->setGomme_post_n($gomme_post_n);
            
        } else {
            
            $veicoloExistente = new VeicoliInfo();
            $veicoloExistente->setTarga($targa); 
            $veicoloExistente->setAnno($anno);      
            $veicoloExistente->setTelaio($telaio);
            $veicoloExistente->setDimensioni($dimensioni);
            $veicoloExistente->setModello_motore($modello_motore);
            $veicoloExistente->setModello_colore($modello_colore);
            $veicoloExistente->setScadenza_garanzia($scadenza_garanzia);
            $veicoloExistente->setObra($obra);
            $veicoloExistente->setPosti($posti);
            $veicoloExistente->setNm_motore($nm_motore);

            $veicoloExistente->setCollaudo(new \DateTime($collaudo));
            $veicoloExistente->setTachigrafi(new \DateTime($tachigrafi));
            $veicoloExistente->setEstintori(new \DateTime($estintori));
            $veicoloExistente->setCasetta_ps(new \DateTime($casetta_ps));
            $veicoloExistente->setSistema_ap(new \DateTime($sistema_ap));
             //PROSS
            //collaudo_pross
            $veicoloExistente->setCollaudo_pross(new \DateTime($collaudo));            
            $collaudoProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCollaudo_pross());
            $collaudoProssModified = $collaudoProssImmutable->add(new \DateInterval('P1Y'));           
            $veicoloExistente->setCollaudo_pross(\DateTime::createFromImmutable($collaudoProssModified));            
            //tachigrafi_pross
            $veicoloExistente->setTachigrafi_pross(new \DateTime($tachigrafi));            
            $tachigrafiProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getTachigrafi_pross());
            $tachigrafiProssModified = $tachigrafiProssImmutable->add(new \DateInterval('P2Y'));           
            $veicoloExistente->setTachigrafi_pross(\DateTime::createFromImmutable($tachigrafiProssModified));
            //estintori_pross
            $veicoloExistente->setEstintori_pross(new \DateTime($estintori));           
            $estintoriProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getEstintori_pross());
            $estintoriProssModified = $estintoriProssImmutable->add(new \DateInterval('P6M'));            
            $veicoloExistente->setEstintori_pross(\DateTime::createFromImmutable($estintoriProssModified));
             //casetta_ps_pross
             $veicoloExistente->setCasetta_ps_pross(new \DateTime($casetta_ps));            
             $casetta_psProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCasetta_ps_pross());
             $casetta_psProssModified = $casetta_psProssImmutable->add(new \DateInterval('P1Y'));           
             $veicoloExistente->setCasetta_ps_pross(\DateTime::createFromImmutable($casetta_psProssModified));
             //sistema_ap_pross
             $veicoloExistente->setSistema_ap_pross(new \DateTime($sistema_ap));            
             $sistema_apProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getSistema_ap_pross());
             $sistema_apProssModified = $sistema_apProssImmutable->add(new \DateInterval('P1Y'));           
             $veicoloExistente->setSistema_ap_pross(\DateTime::createFromImmutable($sistema_apProssModified));
            //ALERT
            $veicoloExistente->setCollaudo_alert(new \DateTime($collaudo));            
            $collaudoAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCollaudo_alert());
            $collaudoAlertModified = $collaudoAlertImmutable->add(new \DateInterval('P11M'));           
            $veicoloExistente->setCollaudo_alert(\DateTime::createFromImmutable($collaudoAlertModified));
             //tachigrafi_alert
             $veicoloExistente->setTachigrafi_alert(new \DateTime($tachigrafi));            
             $tachigrafiAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getTachigrafi_alert());
             $tachigrafiAlertModified = $tachigrafiAlertImmutable->add(new \DateInterval('P1Y11M'));           
             $veicoloExistente->setTachigrafi_alert(\DateTime::createFromImmutable($tachigrafiAlertModified));
              //estintori_alert
              $veicoloExistente->setEstintori_alert(new \DateTime($estintori));           
              $estintoriAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getEstintori_alert());
              $estintoriAlertModified = $estintoriAlertImmutable->add(new \DateInterval('P5M'));            
              $veicoloExistente->setEstintori_alert(\DateTime::createFromImmutable($estintoriAlertModified));
               //casetta_ps_alert
               $veicoloExistente->setCasetta_ps_alert(new \DateTime($casetta_ps));            
               $casetta_psAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCasetta_ps_alert());
               $casetta_psAlertModified = $casetta_psAlertImmutable->add(new \DateInterval('P11M'));           
               $veicoloExistente->setCasetta_ps_alert(\DateTime::createFromImmutable($casetta_psAlertModified)); 
               //sistema_ap_alert
              $veicoloExistente->setSistema_ap_alert(new \DateTime($sistema_ap));            
              $sistema_apAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getSistema_ap_alert());
              $sistema_apAlertModified = $sistema_apAlertImmutable->add(new \DateInterval('P11M'));           
              $veicoloExistente->setSistema_ap_alert(\DateTime::createFromImmutable($sistema_apAlertModified));
        
            $veicoloExistente->setTipo_olio_cambio_tc($tipo_olio_cambio_tc);
            $veicoloExistente->setTipo_olio_diff_tc($tipo_olio_diff_tc);
            $veicoloExistente->setTipo_olio_rallentatore_tc($tipo_olio_rallentatore_tc);
            $veicoloExistente->setTipo_olio_idroventola_tc($tipo_olio_idroventola_tc);
            $veicoloExistente->setOlio_mozzi_ant_tc($olio_mozzi_ant_tc);
            $veicoloExistente->setOlio_mozzi_post_tc($olio_mozzi_post_tc);
            $veicoloExistente->setAltro_olio_tc($altro_olio_tc);
            //qd
            $veicoloExistente->setTipo_olio_cambio_qd($tipo_olio_cambio_qd);
            $veicoloExistente->setTipo_olio_diff_qd($tipo_olio_diff_qd);
            $veicoloExistente->setTipo_olio_rallentatore_qd($tipo_olio_rallentatore_qd);
            $veicoloExistente->setTipo_olio_idroventola_qd($tipo_olio_idroventola_qd);
            $veicoloExistente->setOlio_mozzi_ant_qd($olio_mozzi_ant_qd);
            $veicoloExistente->setOlio_mozzi_post_qd($olio_mozzi_post_qd);
            $veicoloExistente->setAltro_olio_qd($altro_olio_qd);
            //f
            $veicoloExistente->setTipo_olio_cambio_f($tipo_olio_cambio_f);
            $veicoloExistente->setTipo_olio_diff_f($tipo_olio_diff_f);
            $veicoloExistente->setTipo_olio_rallentatore_f($tipo_olio_rallentatore_f);
            $veicoloExistente->setTipo_olio_idroventola_f($tipo_olio_idroventola_f);
            $veicoloExistente->setOlio_mozzi_ant_f($olio_mozzi_ant_f);
            $veicoloExistente->setOlio_mozzi_post_f($olio_mozzi_post_f);
            $veicoloExistente->setAltro_olio_f($altro_olio_f);

             //nuevo
             $veicoloExistente->setCinghia_servizi_cm($cinghia_servizi_cm);
             $veicoloExistente->setRullo_cinghia_servizi_cm($rullo_cinghia_servizi_cm);
             $veicoloExistente->setTenditore_cinghia_servizi_cm($tenditore_cinghia_servizi_cm);
 
             $veicoloExistente->setCinghia_servizi_fm($cinghia_servizi_fm);
             $veicoloExistente->setRullo_cinghia_servizi_fm($rullo_cinghia_servizi_fm);
             $veicoloExistente->setTenditore_cinghia_servizi_fm($tenditore_cinghia_servizi_fm);
 
             $veicoloExistente->setCinghia_servizi_i($cinghia_servizi_i);
             $veicoloExistente->setRullo_cinghia_servizi_i($rullo_cinghia_servizi_i);
             $veicoloExistente->setTenditore_cinghia_servizi_i($tenditore_cinghia_servizi_i);
 
             $veicoloExistente->setCinghia_ac_aut_cm($cinghia_ac_aut_cm);
            $veicoloExistente->setRullo_cinghia_ac_aut_cm($rullo_cinghia_ac_aut_cm);
            $veicoloExistente->setTenditore_cinghia_ac_aut_cm($tenditore_cinghia_ac_aut_cm);

            $veicoloExistente->setCinghia_ac_aut_fm($cinghia_ac_aut_fm);
            $veicoloExistente->setRullo_cinghia_ac_aut_fm($rullo_cinghia_ac_aut_fm);
            $veicoloExistente->setTenditore_cinghia_ac_aut_fm($tenditore_cinghia_ac_aut_fm);

            $veicoloExistente->setCinghia_ac_aut_i($cinghia_ac_aut_i);
            $veicoloExistente->setRullo_cinghia_ac_aut_i($rullo_cinghia_ac_aut_i);
            $veicoloExistente->setTenditore_cinghia_ac_aut_i($tenditore_cinghia_ac_aut_i);
             //pass
             $veicoloExistente->setCinghia_ac_pass_cm($cinghia_ac_pass_cm);
             $veicoloExistente->setRullo_cinghia_ac_pass_cm($rullo_cinghia_ac_pass_cm);
             $veicoloExistente->setTenditore_cinghia_ac_pass_cm($tenditore_cinghia_ac_pass_cm);
 
             $veicoloExistente->setCinghia_ac_pass_fm($cinghia_ac_pass_fm);
             $veicoloExistente->setRullo_cinghia_ac_pass_fm($rullo_cinghia_ac_pass_fm);
             $veicoloExistente->setTenditore_cinghia_ac_pass_fm($tenditore_cinghia_ac_pass_fm);
 
             $veicoloExistente->setCinghia_ac_pass_i($cinghia_ac_pass_i);
             $veicoloExistente->setRullo_cinghia_ac_pass_i($rullo_cinghia_ac_pass_i);
             $veicoloExistente->setTenditore_cinghia_ac_pass_i($tenditore_cinghia_ac_pass_i);
             //altri
            $veicoloExistente->setAltre_cinghie_cm($altre_cinghie_cm);
            $veicoloExistente->setAltri_rulli_cm($altri_rulli_cm);
            $veicoloExistente->setAltri_tenditore_cm($altri_tenditore_cm);

            $veicoloExistente->setAltre_cinghie_fm($altre_cinghie_fm);
            $veicoloExistente->setAltri_rulli_fm($altri_rulli_fm);
            $veicoloExistente->setAltri_tenditore_fm($altri_tenditore_fm);

            $veicoloExistente->setAltre_cinghie_i($altre_cinghie_i);
            $veicoloExistente->setAltri_rulli_i($altri_rulli_i);
            $veicoloExistente->setAltri_tenditore_i($altri_tenditore_i);
             //filtro
             $veicoloExistente->setFiltro_gasolio_c($filtro_gasolio_c);
             $veicoloExistente->setPrefiltro_gasolio_c($prefiltro_gasolio_c);
             $veicoloExistente->setAltro_filtro_gasolio_c($altro_filtro_gasolio_c);
             $veicoloExistente->setFiltro_area_motore_c($filtro_area_motore_c);
             $veicoloExistente->setFiltro_olio_motore_c($filtro_olio_motore_c);
             $veicoloExistente->setKit_filtro_centrifugo_c($kit_filtro_centrifugo_c);
             $veicoloExistente->setFiltro_essiccatore_c($filtro_essiccatore_c);
             $veicoloExistente->setFiltro_urea_c($filtro_urea_c);
             $veicoloExistente->setFiltro_idroventola_c($filtro_idroventola_c);
             $veicoloExistente->setFiltro_olio_cambio_c($filtro_olio_cambio_c);
             $veicoloExistente->setFiltro_olio_diff_c($filtro_olio_diff_c);
             $veicoloExistente->setFiltro_olio_rellantatore_c($filtro_olio_rellantatore_c);
             $veicoloExistente->setFiltro_aria_ac_autista_c($filtro_aria_ac_autista_c);
             $veicoloExistente->setFiltro_aria_ac_pass_c($filtro_aria_ac_pass_c);
 
             $veicoloExistente->setFiltro_gasolio_f($filtro_gasolio_f);
             $veicoloExistente->setPrefiltro_gasolio_f($prefiltro_gasolio_f);
             $veicoloExistente->setAltro_filtro_gasolio_f($altro_filtro_gasolio_f);
             $veicoloExistente->setFiltro_area_motore_f($filtro_area_motore_f);
             $veicoloExistente->setFiltro_olio_motore_f($filtro_olio_motore_f);
             $veicoloExistente->setKit_filtro_centrifugo_f($kit_filtro_centrifugo_f);
             $veicoloExistente->setFiltro_essiccatore_f($filtro_essiccatore_f);
             $veicoloExistente->setFiltro_urea_f($filtro_urea_f);
             $veicoloExistente->setFiltro_idroventola_f($filtro_idroventola_f);
             $veicoloExistente->setFiltro_olio_cambio_f($filtro_olio_cambio_f);
             $veicoloExistente->setFiltro_olio_diff_f($filtro_olio_diff_f);
             $veicoloExistente->setFiltro_olio_rellantatore_f($filtro_olio_rellantatore_f);
             $veicoloExistente->setFiltro_aria_ac_autista_f($filtro_aria_ac_autista_f);
             $veicoloExistente->setFiltro_aria_ac_pass_f($filtro_aria_ac_pass_f);
 
             $veicoloExistente->setFiltro_gasolio_i($filtro_gasolio_i);
             $veicoloExistente->setPrefiltro_gasolio_i($prefiltro_gasolio_i);
             $veicoloExistente->setAltro_filtro_gasolio_i($altro_filtro_gasolio_i);
             $veicoloExistente->setFiltro_area_motore_i($filtro_area_motore_i);
             $veicoloExistente->setFiltro_olio_motore_i($filtro_olio_motore_i);
             $veicoloExistente->setKit_filtro_centrifugo_i($kit_filtro_centrifugo_i);
             $veicoloExistente->setFiltro_essiccatore_i($filtro_essiccatore_i);
             $veicoloExistente->setFiltro_urea_i($filtro_urea_i);
             $veicoloExistente->setFiltro_idroventola_i($filtro_idroventola_i);
             $veicoloExistente->setFiltro_olio_cambio_i($filtro_olio_cambio_i);
             $veicoloExistente->setFiltro_olio_diff_i($filtro_olio_diff_i);
             $veicoloExistente->setFiltro_olio_rellantatore_i($filtro_olio_rellantatore_i);
             $veicoloExistente->setFiltro_aria_ac_autista_i($filtro_aria_ac_autista_i);
             $veicoloExistente->setFiltro_aria_ac_pass_i($filtro_aria_ac_pass_i);
              //freno
            $veicoloExistente->setPastiglie_freno_ant_c($pastiglie_freno_ant_c);
            $veicoloExistente->setPastiglie_freno_post_c($pastiglie_freno_post_c);
            $veicoloExistente->setPastiglie_freno_ant_f($pastiglie_freno_ant_f);
            $veicoloExistente->setPastiglie_freno_post_f($pastiglie_freno_post_f);
            $veicoloExistente->setPastiglie_freno_ant_n($pastiglie_freno_ant_n);
            $veicoloExistente->setPastiglie_freno_post_n($pastiglie_freno_post_n);
            //batteria
            $veicoloExistente->setBatterie_c($batterie_c);
            $veicoloExistente->setModello_spazzole_tergi_c($modello_spazzole_tergi_c);
            $veicoloExistente->setGomme_ant_c($gomme_ant_c);
            $veicoloExistente->setGomme_post_c($gomme_post_c);
            $veicoloExistente->setBatterie_f($batterie_f);
            $veicoloExistente->setModello_spazzole_tergi_f($modello_spazzole_tergi_f);
            $veicoloExistente->setGomme_ant_f($gomme_ant_f);
            $veicoloExistente->setGomme_post_f($gomme_post_f);
            $veicoloExistente->setBatterie_n($batterie_n);
            $veicoloExistente->setModello_spazzole_tergi_n($modello_spazzole_tergi_n);
            $veicoloExistente->setGomme_ant_n($gomme_ant_n);
            $veicoloExistente->setGomme_post_n($gomme_post_n);
 

            // Persiste la entidad
            $entityManager->getRepository(VeicoliInfo::class)->saveform($veicoloExistente);
        }

        // Flushea la entidad
        $entityManager->flush();
        
        return new JsonResponse(['message' => 'Fatto', 'data' => $data], Response::HTTP_OK);
    } catch (\Exception $e) {
        
        return new JsonResponse(['message' => 'Error.'], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}


#[Route('/stampa/{targa}/{data}', name: 'app_VeicoliInfo_stampa', methods: ['GET'])]
public function stampa(Request $request, EntityManagerInterface $entityManager, string $targa, string $data): Response
{
    
    $dataArray = json_decode($data, true);    
    return $this->render('VeicoliInfo/stampa.html.twig', [
        'targa' => $targa,
        'data' => $dataArray,
    ]);
   
}
    
  
    
    
    #[Route('/list/VeicoliInfo', name: 'app_VeicoliInfo_list', methods: ['GET'])]
    public function findAnomalia(Request $request, EntityManagerInterface $entityManager): Response
    {
        
        $repositoryVeicoliInfo = $entityManager->getRepository(VeicoliInfo::class);
        $data = $repositoryVeicoliInfo->list();
        
        return new JsonResponse($data);
    }
    
 //stampa

 #[Route('/stampa_veicolo_info/{id_l}/{targa}/{ok_pdf}', name: 'app_stampa_doc_info', methods: ['GET', 'POST'])]
    public function app_stampa_doc(rpx $rpx,Request $request, EntityManagerInterface $em, TesteRepository $testeRepository,int $id_l,string $targa,int $ok_pdf = 1): Response
    {
        $id_lx = $testeRepository->find($id_l);
       
        $veicoloInfo = $em->getrepository(VeicoliInfo::class)->getVeicolowebById($targa);
        $docmodelli = $_SERVER["RP_DOCMODELLI"];
        $doctemp = $_SERVER["RP_DOCTEMP"];
              

        switch($id_lx->getTipoIntervento()){
                case "Programmata":
                    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($docmodelli.'/targa.docx');
                  
                    $templateProcessor->setValue('targa', $veicoloInfo['targa']); 
                    $templateProcessor->setValue('anno', $veicoloInfo['anno']);     
                    $templateProcessor->setValue('telaio', $veicoloInfo['telaio']); 
                    $templateProcessor->setValue('dimensioni', $veicoloInfo['dimensioni']); 
                    $templateProcessor->setValue('modello_motore', $veicoloInfo['modello_motore']); 
                    $templateProcessor->setValue('modello_colore', $veicoloInfo['modello_colore']); 
                    $templateProcessor->setValue('scadenza_garanzia', $veicoloInfo['scadenza_garanzia']); 
                    $templateProcessor->setValue('obra', $veicoloInfo['obra']);   
                    $templateProcessor->setValue('posti', $veicoloInfo['posti']); 
                    $templateProcessor->setValue('nm_motore', $veicoloInfo['nm_motore']); 
                    //revisione
                    $templateProcessor->setValue('collaudo', $veicoloInfo['collaudo']); 
                    $templateProcessor->setValue('tachigrafi', $veicoloInfo['tachigrafi']);
                    $templateProcessor->setValue('estintori', $veicoloInfo['estintori']);
                    $templateProcessor->setValue('casetta_ps', $veicoloInfo['casetta_ps']);
                    $templateProcessor->setValue('sistema_ap', $veicoloInfo['sistema_ap']);
                   //olio tc
                    $templateProcessor->setValue('tipo_olio_cambio_tc', $veicoloInfo['tipo_olio_cambio_tc']); 
                    $templateProcessor->setValue('tipo_olio_diff_tc', $veicoloInfo['tipo_olio_diff_tc']);     
                    $templateProcessor->setValue('tipo_olio_rallentatore_tc', $veicoloInfo['tipo_olio_rallentatore_tc']); 
                    $templateProcessor->setValue('tipo_olio_idroventola_tc', $veicoloInfo['tipo_olio_idroventola_tc']); 
                    $templateProcessor->setValue('olio_mozzi_ant_tc', $veicoloInfo['olio_mozzi_ant_tc']); 
                    $templateProcessor->setValue('olio_mozzi_post_tc', $veicoloInfo['olio_mozzi_post_tc']); 
                    $templateProcessor->setValue('altro_olio_tc', $veicoloInfo['altro_olio_tc']); 
                   //olio qd
                    $templateProcessor->setValue('tipo_olio_cambio_qd', $veicoloInfo['tipo_olio_cambio_qd']); 
                    $templateProcessor->setValue('tipo_olio_diff_qd', $veicoloInfo['tipo_olio_diff_qd']);     
                    $templateProcessor->setValue('tipo_olio_rallentatore_qd', $veicoloInfo['tipo_olio_rallentatore_qd']); 
                    $templateProcessor->setValue('tipo_olio_idroventola_qd', $veicoloInfo['tipo_olio_idroventola_qd']); 
                    $templateProcessor->setValue('olio_mozzi_ant_qd', $veicoloInfo['olio_mozzi_ant_qd']); 
                    $templateProcessor->setValue('olio_mozzi_post_qd', $veicoloInfo['olio_mozzi_post_qd']); 
                    $templateProcessor->setValue('altro_olio_qd', $veicoloInfo['altro_olio_qd']); 
                    //olio f
                    $templateProcessor->setValue('tipo_olio_cambio_f', $veicoloInfo['tipo_olio_cambio_f']); 
                    $templateProcessor->setValue('tipo_olio_diff_f', $veicoloInfo['tipo_olio_diff_f']);     
                    $templateProcessor->setValue('tipo_olio_rallentatore_f', $veicoloInfo['tipo_olio_rallentatore_f']); 
                    $templateProcessor->setValue('tipo_olio_idroventola_f', $veicoloInfo['tipo_olio_idroventola_f']); 
                    $templateProcessor->setValue('olio_mozzi_ant_f', $veicoloInfo['olio_mozzi_ant_f']); 
                    $templateProcessor->setValue('olio_mozzi_post_f', $veicoloInfo['olio_mozzi_post_f']); 
                    $templateProcessor->setValue('altro_olio_f', $veicoloInfo['altro_olio_f']); 
                    //Cinghia cm
                    $templateProcessor->setValue('cinghia_servizi_cm', $veicoloInfo['cinghia_servizi_cm']); 
                    $templateProcessor->setValue('rullo_cinghia_servizi_cm', $veicoloInfo['rullo_cinghia_servizi_cm']);     
                    $templateProcessor->setValue('tenditore_cinghia_servizi_cm', $veicoloInfo['tenditore_cinghia_servizi_cm']); 
                    $templateProcessor->setValue('cinghia_ac_aut_cm', $veicoloInfo['cinghia_ac_aut_cm']); 
                    $templateProcessor->setValue('rullo_cinghia_ac_aut_cm', $veicoloInfo['rullo_cinghia_ac_aut_cm']); 
                    $templateProcessor->setValue('tenditore_cinghia_ac_aut_cm', $veicoloInfo['tenditore_cinghia_ac_aut_cm']); 
                    $templateProcessor->setValue('cinghia_ac_pass_cm', $veicoloInfo['cinghia_ac_pass_cm']); 
                    $templateProcessor->setValue('rullo_cinghia_ac_pass_cm', $veicoloInfo['rullo_cinghia_ac_pass_cm']); 
                    $templateProcessor->setValue('tenditore_cinghia_ac_pass_cm', $veicoloInfo['tenditore_cinghia_ac_pass_cm']); 
                    $templateProcessor->setValue('altre_cinghie_cm', $veicoloInfo['altre_cinghie_cm']); 
                    $templateProcessor->setValue('altri_rulli_cm', $veicoloInfo['altri_rulli_cm']); 
                    $templateProcessor->setValue('altri_tenditore_cm', $veicoloInfo['altri_tenditore_cm']); 
                    //Cinghia fm
                    $templateProcessor->setValue('cinghia_servizi_fm', $veicoloInfo['cinghia_servizi_fm']); 
                    $templateProcessor->setValue('rullo_cinghia_servizi_fm', $veicoloInfo['rullo_cinghia_servizi_fm']);     
                    $templateProcessor->setValue('tenditore_cinghia_servizi_fm', $veicoloInfo['tenditore_cinghia_servizi_fm']); 
                    $templateProcessor->setValue('cinghia_ac_aut_fm', $veicoloInfo['cinghia_ac_aut_fm']); 
                    $templateProcessor->setValue('rullo_cinghia_ac_aut_fm', $veicoloInfo['rullo_cinghia_ac_aut_fm']); 
                    $templateProcessor->setValue('tenditore_cinghia_ac_aut_fm', $veicoloInfo['tenditore_cinghia_ac_aut_fm']); 
                    $templateProcessor->setValue('cinghia_ac_pass_fm', $veicoloInfo['cinghia_ac_pass_fm']); 
                    $templateProcessor->setValue('rullo_cinghia_ac_pass_fm', $veicoloInfo['rullo_cinghia_ac_pass_fm']); 
                    $templateProcessor->setValue('tenditore_cinghia_ac_pass_fm', $veicoloInfo['tenditore_cinghia_ac_pass_fm']); 
                    $templateProcessor->setValue('altre_cinghie_fm', $veicoloInfo['altre_cinghie_fm']); 
                    $templateProcessor->setValue('altri_rulli_fm', $veicoloInfo['altri_rulli_fm']); 
                    $templateProcessor->setValue('altri_tenditore_fm', $veicoloInfo['altri_tenditore_fm']);
                    //Cinghia i
                    $templateProcessor->setValue('cinghia_servizi_i', $veicoloInfo['cinghia_servizi_i']); 
                    $templateProcessor->setValue('rullo_cinghia_servizi_i', $veicoloInfo['rullo_cinghia_servizi_i']);     
                    $templateProcessor->setValue('tenditore_cinghia_servizi_i', $veicoloInfo['tenditore_cinghia_servizi_i']); 
                    $templateProcessor->setValue('cinghia_ac_aut_i', $veicoloInfo['cinghia_ac_aut_i']); 
                    $templateProcessor->setValue('rullo_cinghia_ac_aut_i', $veicoloInfo['rullo_cinghia_ac_aut_i']); 
                    $templateProcessor->setValue('tenditore_cinghia_ac_aut_i', $veicoloInfo['tenditore_cinghia_ac_aut_i']); 
                    $templateProcessor->setValue('cinghia_ac_pass_i', $veicoloInfo['cinghia_ac_pass_i']); 
                    $templateProcessor->setValue('rullo_cinghia_ac_pass_i', $veicoloInfo['rullo_cinghia_ac_pass_i']); 
                    $templateProcessor->setValue('tenditore_cinghia_ac_pass_i', $veicoloInfo['tenditore_cinghia_ac_pass_i']); 
                    $templateProcessor->setValue('altre_cinghie_i', $veicoloInfo['altre_cinghie_i']); 
                    $templateProcessor->setValue('altri_rulli_i', $veicoloInfo['altri_rulli_i']); 
                    $templateProcessor->setValue('altri_tenditore_i', $veicoloInfo['altri_tenditore_i']);
                    //Filtro c
                    $templateProcessor->setValue('filtro_gasolio_c', $veicoloInfo['filtro_gasolio_c']);
                    $templateProcessor->setValue('prefiltro_gasolio_c', $veicoloInfo['prefiltro_gasolio_c']);
                    $templateProcessor->setValue('altro_filtro_gasolio_c', $veicoloInfo['altro_filtro_gasolio_c']);
                    $templateProcessor->setValue('filtro_area_motore_c', $veicoloInfo['filtro_area_motore_c']);
                    $templateProcessor->setValue('filtro_olio_motore_c', $veicoloInfo['filtro_olio_motore_c']);
                    $templateProcessor->setValue('kit_filtro_centrifugo_c', $veicoloInfo['kit_filtro_centrifugo_c']);
                    $templateProcessor->setValue('filtro_essiccatore_c', $veicoloInfo['filtro_essiccatore_c']);
                    $templateProcessor->setValue('filtro_urea_c', $veicoloInfo['filtro_urea_c']);
                    $templateProcessor->setValue('filtro_idroventola_c', $veicoloInfo['filtro_idroventola_c']);
                    $templateProcessor->setValue('filtro_olio_cambio_c', $veicoloInfo['filtro_olio_cambio_c']);
                    $templateProcessor->setValue('filtro_olio_diff_c', $veicoloInfo['filtro_olio_diff_c']);
                    $templateProcessor->setValue('filtro_olio_rellantatore_c', $veicoloInfo['filtro_olio_rellantatore_c']);
                    $templateProcessor->setValue('filtro_aria_ac_autista_c', $veicoloInfo['filtro_aria_ac_autista_c']);
                    $templateProcessor->setValue('filtro_aria_ac_pass_c', $veicoloInfo['filtro_aria_ac_pass_c']);
                    //Filtro f
                    $templateProcessor->setValue('filtro_gasolio_f', $veicoloInfo['filtro_gasolio_f']);
                    $templateProcessor->setValue('prefiltro_gasolio_f', $veicoloInfo['prefiltro_gasolio_f']);
                    $templateProcessor->setValue('altro_filtro_gasolio_f', $veicoloInfo['altro_filtro_gasolio_f']);
                    $templateProcessor->setValue('filtro_area_motore_f', $veicoloInfo['filtro_area_motore_f']);
                    $templateProcessor->setValue('filtro_olio_motore_f', $veicoloInfo['filtro_olio_motore_f']);
                    $templateProcessor->setValue('kit_filtro_centrifugo_f', $veicoloInfo['kit_filtro_centrifugo_f']);
                    $templateProcessor->setValue('filtro_essiccatore_f', $veicoloInfo['filtro_essiccatore_f']);
                    $templateProcessor->setValue('filtro_urea_f', $veicoloInfo['filtro_urea_f']);
                    $templateProcessor->setValue('filtro_idroventola_f', $veicoloInfo['filtro_idroventola_f']);
                    $templateProcessor->setValue('filtro_olio_cambio_f', $veicoloInfo['filtro_olio_cambio_f']);
                    $templateProcessor->setValue('filtro_olio_diff_f', $veicoloInfo['filtro_olio_diff_f']);
                    $templateProcessor->setValue('filtro_olio_rellantatore_f', $veicoloInfo['filtro_olio_rellantatore_f']);
                    $templateProcessor->setValue('filtro_aria_ac_autista_f', $veicoloInfo['filtro_aria_ac_autista_f']);
                    $templateProcessor->setValue('filtro_aria_ac_pass_f', $veicoloInfo['filtro_aria_ac_pass_f']);
                    //Filtro i
                    $templateProcessor->setValue('filtro_gasolio_i', $veicoloInfo['filtro_gasolio_i']);
                    $templateProcessor->setValue('prefiltro_gasolio_i', $veicoloInfo['prefiltro_gasolio_i']);
                    $templateProcessor->setValue('altro_filtro_gasolio_i', $veicoloInfo['altro_filtro_gasolio_i']);
                    $templateProcessor->setValue('filtro_area_motore_i', $veicoloInfo['filtro_area_motore_i']);
                    $templateProcessor->setValue('filtro_olio_motore_i', $veicoloInfo['filtro_olio_motore_i']);
                    $templateProcessor->setValue('kit_filtro_centrifugo_i', $veicoloInfo['kit_filtro_centrifugo_i']);
                    $templateProcessor->setValue('filtro_essiccatore_i', $veicoloInfo['filtro_essiccatore_i']);
                    $templateProcessor->setValue('filtro_urea_i', $veicoloInfo['filtro_urea_i']);
                    $templateProcessor->setValue('filtro_idroventola_i', $veicoloInfo['filtro_idroventola_i']);
                    $templateProcessor->setValue('filtro_olio_cambio_i', $veicoloInfo['filtro_olio_cambio_i']);
                    $templateProcessor->setValue('filtro_olio_diff_i', $veicoloInfo['filtro_olio_diff_i']);
                    $templateProcessor->setValue('filtro_olio_rellantatore_i', $veicoloInfo['filtro_olio_rellantatore_i']);
                    $templateProcessor->setValue('filtro_aria_ac_autista_i', $veicoloInfo['filtro_aria_ac_autista_i']);
                    $templateProcessor->setValue('filtro_aria_ac_pass_i', $veicoloInfo['filtro_aria_ac_pass_i']);
                    //Pastiglie C
                    $templateProcessor->setValue('pastiglie_freno_ant_c', $veicoloInfo['pastiglie_freno_ant_c']);
                    $templateProcessor->setValue('pastiglie_freno_post_c', $veicoloInfo['pastiglie_freno_post_c']);
                    $templateProcessor->setValue('batterie_c', $veicoloInfo['batterie_c']);
                    $templateProcessor->setValue('modello_spazzole_tergi_c', $veicoloInfo['modello_spazzole_tergi_c']);
                    $templateProcessor->setValue('gomme_ant_c', $veicoloInfo['gomme_ant_c']);
                    $templateProcessor->setValue('gomme_post_c', $veicoloInfo['gomme_post_c']);
                    //Pastiglie f
                    $templateProcessor->setValue('pastiglie_freno_ant_f', $veicoloInfo['pastiglie_freno_ant_f']);
                    $templateProcessor->setValue('pastiglie_freno_post_f', $veicoloInfo['pastiglie_freno_post_f']);
                    $templateProcessor->setValue('batterie_f', $veicoloInfo['batterie_f']);
                    $templateProcessor->setValue('modello_spazzole_tergi_f', $veicoloInfo['modello_spazzole_tergi_f']);
                    $templateProcessor->setValue('gomme_ant_f', $veicoloInfo['gomme_ant_f']);
                    $templateProcessor->setValue('gomme_post_f', $veicoloInfo['gomme_post_f']);
                    //Pastiglie n
                    $templateProcessor->setValue('pastiglie_freno_ant_n', $veicoloInfo['pastiglie_freno_ant_n']);
                    $templateProcessor->setValue('pastiglie_freno_post_n', $veicoloInfo['pastiglie_freno_post_n']);
                    $templateProcessor->setValue('batterie_n', $veicoloInfo['batterie_n']);
                    $templateProcessor->setValue('modello_spazzole_tergi_n', $veicoloInfo['modello_spazzole_tergi_n']);
                    $templateProcessor->setValue('gomme_ant_n', $veicoloInfo['gomme_ant_n']);
                    $templateProcessor->setValue('gomme_post_n', $veicoloInfo['gomme_post_n']);


                   //fin
                    $fname_unico=$rpx->get_random_name("targa");

                break;
               
               
    

        }
        
       /////////////////////////////////////////////////// nuovo metodo stampa
       
       
       $docxFilePath =$doctemp.'/'.$fname_unico.'.docx';
       $templateProcessor->saveAs($docxFilePath);
       $pdfFilePath = $rpx->get_docx2pdf($docxFilePath);
       if (!file_exists($pdfFilePath)) {
        return new Response("Errore:".$pdfFilePath, 500);
        }

       $response = new BinaryFileResponse($pdfFilePath);
        $nome_finale = $targa;
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $nome_finale.'.pdf'
        );

       
        
        return $response;



    }
    
    
   
  
}
