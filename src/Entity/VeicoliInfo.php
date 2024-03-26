<?php

namespace App\Entity;

use App\Repository\VeicoliInfoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VeicoliInfoRepository::class)]
class VeicoliInfo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_l")]
    private ?int $idL = null;

    #[ORM\Column(length: 50)]
    private ?string $targa = null;

    #[ORM\Column(length: 50)]
    private ?string $anno = null;
    
    #[ORM\Column(length: 50)]
    private ?string $telaio = null;

    #[ORM\Column(length: 50)]
    private ?string $dimensioni = null;

    #[ORM\Column(length: 50)]
    private ?string $modello_motore = null;

    #[ORM\Column(length: 50)]
    private ?string $modello_colore = null;

    #[ORM\Column(length: 50)]
    private ?string $scadenza_garanzia = null;

    #[ORM\Column(length: 50)]
    private ?string $obra = null;

    #[ORM\Column(length: 50)]
    private ?string $posti = null;

    #[ORM\Column(length: 50)]
    private ?string $nm_motore = null;
//editando revisione
    
#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $collaudo = null;


#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $tachigrafi = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $estintori = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $casetta_ps = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $sistema_ap = null;

//PROSS
#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $collaudo_pross = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $tachigrafi_pross = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $estintori_pross = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $casetta_ps_pross = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $sistema_ap_pross = null;

//ALERT
#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $collaudo_alert = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $tachigrafi_alert = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $estintori_alert = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $casetta_ps_alert = null;

#[ORM\Column(type: Types::DATETIME_MUTABLE)]
private ?\DateTimeInterface $sistema_ap_alert = null;

//editando revisione
    //tc
    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_cambio_tc = null;

    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_diff_tc = null;

    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_rallentatore_tc = null;

    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_idroventola_tc = null;

    #[ORM\Column(length: 50)]
    private ?string $olio_mozzi_ant_tc = null;

    #[ORM\Column(length: 50)]
    private ?string $olio_mozzi_post_tc = null;

    #[ORM\Column(length: 50)]
    private ?string $altro_olio_tc = null;
    //qd
    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_cambio_qd = null;

    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_diff_qd = null;

    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_rallentatore_qd = null;

    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_idroventola_qd = null;

    #[ORM\Column(length: 50)]
    private ?string $olio_mozzi_ant_qd = null;

    #[ORM\Column(length: 50)]
    private ?string $olio_mozzi_post_qd = null;

    #[ORM\Column(length: 50)]
    private ?string $altro_olio_qd = null;
    //f
    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_cambio_f = null;

    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_diff_f = null;

    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_rallentatore_f = null;

    #[ORM\Column(length: 50)]
    private ?string $tipo_olio_idroventola_f = null;

    #[ORM\Column(length: 50)]
    private ?string $olio_mozzi_ant_f = null;

    #[ORM\Column(length: 50)]
    private ?string $olio_mozzi_post_f = null;

    #[ORM\Column(length: 50)]
    private ?string $altro_olio_f= null;

    //Ricambio 2

    #[ORM\Column(length: 50)]
    private ?string $cinghia_servizi_cm= null;
    #[ORM\Column(length: 50)]
    private ?string $rullo_cinghia_servizi_cm= null;
    #[ORM\Column(length: 50)]
    private ?string $tenditore_cinghia_servizi_cm= null;
    #[ORM\Column(length: 50)]
    private ?string $cinghia_servizi_fm= null;
    #[ORM\Column(length: 50)]
    private ?string $rullo_cinghia_servizi_fm= null;
    #[ORM\Column(length: 50)]
    private ?string $tenditore_cinghia_servizi_fm= null;
    #[ORM\Column(length: 50)]
    private ?string $cinghia_servizi_i= null;
    #[ORM\Column(length: 50)]
    private ?string $rullo_cinghia_servizi_i= null;
    #[ORM\Column(length: 50)]
    private ?string $tenditore_cinghia_servizi_i= null;
    #[ORM\Column(length: 50)]
    private ?string $cinghia_ac_aut_cm= null;
    #[ORM\Column(length: 50)]
    private ?string $rullo_cinghia_ac_aut_cm= null;
    #[ORM\Column(length: 50)]
    private ?string $tenditore_cinghia_ac_aut_cm= null;
    #[ORM\Column(length: 50)]
    private ?string $cinghia_ac_aut_fm= null;
    #[ORM\Column(length: 50)]
    private ?string $rullo_cinghia_ac_aut_fm= null;
    #[ORM\Column(length: 50)]
    private ?string $tenditore_cinghia_ac_aut_fm= null;
    #[ORM\Column(length: 50)]
    private ?string $cinghia_ac_aut_i= null;
    #[ORM\Column(length: 50)]
    private ?string $rullo_cinghia_ac_aut_i= null;
    #[ORM\Column(length: 50)]
    private ?string $tenditore_cinghia_ac_aut_i= null;
    //pass
    #[ORM\Column(length: 50)]
    private ?string $cinghia_ac_pass_cm= null;
    #[ORM\Column(length: 50)]
    private ?string $rullo_cinghia_ac_pass_cm= null;
    #[ORM\Column(length: 50)]
    private ?string $tenditore_cinghia_ac_pass_cm= null;

    #[ORM\Column(length: 50)]
    private ?string $cinghia_ac_pass_fm= null;
    #[ORM\Column(length: 50)]
    private ?string $rullo_cinghia_ac_pass_fm= null;
    #[ORM\Column(length: 50)]
    private ?string $tenditore_cinghia_ac_pass_fm= null;

    #[ORM\Column(length: 50)]
    private ?string $cinghia_ac_pass_i= null;
    #[ORM\Column(length: 50)]
    private ?string $rullo_cinghia_ac_pass_i= null;
    #[ORM\Column(length: 50)]
    private ?string $tenditore_cinghia_ac_pass_i= null;
    //altri
    #[ORM\Column(length: 50)]
    private ?string $altre_cinghie_cm= null;
    #[ORM\Column(length: 50)]
    private ?string $altri_rulli_cm= null;
    #[ORM\Column(length: 50)]
    private ?string $altri_tenditore_cm= null;

    #[ORM\Column(length: 50)]
    private ?string $altre_cinghie_fm= null;
    #[ORM\Column(length: 50)]
    private ?string $altri_rulli_fm= null;
    #[ORM\Column(length: 50)]
    private ?string $altri_tenditore_fm= null;

    #[ORM\Column(length: 50)]
    private ?string $altre_cinghie_i= null;
    #[ORM\Column(length: 50)]
    private ?string $altri_rulli_i= null;
    #[ORM\Column(length: 50)]
    private ?string $altri_tenditore_i= null;
//filtro
    #[ORM\Column(length: 50)]
    private ?string $filtro_gasolio_c= null;
    #[ORM\Column(length: 50)]
    private ?string $prefiltro_gasolio_c= null;
    #[ORM\Column(length: 50)]
    private ?string $altro_filtro_gasolio_c= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_area_motore_c= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_olio_motore_c= null;
    #[ORM\Column(length: 50)]
    private ?string $kit_filtro_centrifugo_c= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_essiccatore_c= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_urea_c= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_idroventola_c= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_olio_cambio_c= null;
    #[ORM\Column(length: 50)]   
    private ?string $filtro_olio_diff_c= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_olio_rellantatore_c= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_aria_ac_autista_c= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_aria_ac_pass_c= null;
    //f
    #[ORM\Column(length: 50)]
    private ?string $filtro_gasolio_f= null;
    #[ORM\Column(length: 50)]
    private ?string $prefiltro_gasolio_f= null;
    #[ORM\Column(length: 50)]
    private ?string $altro_filtro_gasolio_f= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_area_motore_f= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_olio_motore_f= null;
    #[ORM\Column(length: 50)]
    private ?string $kit_filtro_centrifugo_f= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_essiccatore_f= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_urea_f= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_idroventola_f= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_olio_cambio_f= null;
    #[ORM\Column(length: 50)]   
    private ?string $filtro_olio_diff_f= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_olio_rellantatore_f= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_aria_ac_autista_f= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_aria_ac_pass_f= null;
    //i
    #[ORM\Column(length: 50)]
    private ?string $filtro_gasolio_i= null;
    #[ORM\Column(length: 50)]
    private ?string $prefiltro_gasolio_i= null;
    #[ORM\Column(length: 50)]
    private ?string $altro_filtro_gasolio_i= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_area_motore_i= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_olio_motore_i= null;
    #[ORM\Column(length: 50)]
    private ?string $kit_filtro_centrifugo_i= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_essiccatore_i= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_urea_i= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_idroventola_i= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_olio_cambio_i= null;
    #[ORM\Column(length: 50)]   
    private ?string $filtro_olio_diff_i= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_olio_rellantatore_i= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_aria_ac_autista_i= null;
    #[ORM\Column(length: 50)]
    private ?string $filtro_aria_ac_pass_i= null;
//frenos
    #[ORM\Column(length: 50)]
    private ?string $pastiglie_freno_ant_c= null;
    #[ORM\Column(length: 50)]
    private ?string $pastiglie_freno_post_c= null;
    #[ORM\Column(length: 50)]
    private ?string $pastiglie_freno_ant_f= null;
    #[ORM\Column(length: 50)]
    private ?string $pastiglie_freno_post_f= null;
    #[ORM\Column(length: 50)]
    private ?string $pastiglie_freno_ant_n= null;
    #[ORM\Column(length: 50)]
    private ?string $pastiglie_freno_post_n= null;
    //batteria
    #[ORM\Column(length: 50)]
    private ?string $batterie_c= null;
    #[ORM\Column(length: 50)]
    private ?string $modello_spazzole_tergi_c= null;
    #[ORM\Column(length: 50)]
    private ?string $gomme_ant_c= null;
    #[ORM\Column(length: 50)]
    private ?string $gomme_post_c= null;
    //f
    #[ORM\Column(length: 50)]
    private ?string $batterie_f= null;
    #[ORM\Column(length: 50)]
    private ?string $modello_spazzole_tergi_f= null;
    #[ORM\Column(length: 50)]
    private ?string $gomme_ant_f= null;
    #[ORM\Column(length: 50)]
    private ?string $gomme_post_f= null;
    //n
    #[ORM\Column(length: 50)]
    private ?string $batterie_n= null;
    #[ORM\Column(length: 50)]
    private ?string $modello_spazzole_tergi_n= null;
    #[ORM\Column(length: 50)]
    private ?string $gomme_ant_n= null;
    #[ORM\Column(length: 50)]
    private ?string $gomme_post_n= null;



//******************************************************************************************** */
    
    
    //funciones
    public function getIdL(): ?int
    {
        return $this->idL;
    }

    public function getTarga(): ?string
    {
        return $this->targa;
    }

    public function setTarga(string $targa): self
    {
        $this->targa = $targa;
        return $this;
    }

    //anno
    public function getAnno(): ?string
    {
        return $this->anno;
    }

    public function setAnno(string $anno): self
    {
        $this->anno = $anno;
        return $this;
    }

    public function getTelaio(): ?string
    {
        return $this->telaio;
    }

    public function setTelaio(?string $telaio): self
    {
        $this->telaio = $telaio;
        return $this;
    }

    public function getDimensioni(): ?string
    {
        return $this->dimensioni;
    }

    public function setDimensioni(?string $dimensioni): self
    {
        $this->dimensioni = $dimensioni;
        return $this;
    }

//modello_motore
    public function getModello_motore(): ?string
    {
        return $this->modello_motore;
    }

    public function setModello_motore(?string $modello_motore): self
    {
        $this->modello_motore = $modello_motore;
        return $this;
    }
//modello_colore
public function getModello_colore(): ?string
{
    return $this->modello_colore;
}

public function setModello_colore(?string $modello_colore): self
{
    $this->modello_colore = $modello_colore;
    return $this;
}
//scadenza_garanzia
public function getScadenza_garanzia(): ?string
{
    return $this->scadenza_garanzia;
}

public function setScadenza_garanzia(?string $scadenza_garanzia): self
{
    $this->scadenza_garanzia = $scadenza_garanzia;
    return $this;
}
//obra
public function getObra(): ?string
{
    return $this->obra;
}

public function setObra(?string $obra): self
{
    $this->obra = $obra;
    return $this;
}
//posti
public function getPosti(): ?string
{
    return $this->posti;
}

public function setPosti(?string $posti): self
{
    $this->posti = $posti;
    return $this;
}
//nm_motore
public function getNm_motore(): ?string
{
    return $this->nm_motore;
}

public function setNm_motore(?string $nm_motore): self
{
    $this->nm_motore = $nm_motore;
    return $this;
}

// Collaudo
public function getCollaudo(): ?\DateTimeInterface
{
    return $this->collaudo;
}

public function setCollaudo(?\DateTimeInterface $collaudo): self
{
    $this->collaudo = $collaudo;
    return $this;
}

// Tachigrafi
public function getTachigrafi(): ?\DateTimeInterface
{
    return $this->tachigrafi;
}

public function setTachigrafi(?\DateTimeInterface $tachigrafi): self
{
    $this->tachigrafi = $tachigrafi;
    return $this;
}

// Estintori
public function getEstintori(): ?\DateTimeInterface
{
    return $this->estintori;
}

public function setEstintori(?\DateTimeInterface $estintori): self
{
    $this->estintori = $estintori;
    return $this;
}

// Casetta_ps
public function getCasetta_ps(): ?\DateTimeInterface
{
    return $this->casetta_ps;
}

public function setCasetta_ps(?\DateTimeInterface $casetta_ps): self
{
    $this->casetta_ps = $casetta_ps;
    return $this;
}

// Sistema_ap
public function getSistema_ap(): ?\DateTimeInterface
{
    return $this->sistema_ap;
}

public function setSistema_ap(?\DateTimeInterface $sistema_ap): self
{
    $this->sistema_ap = $sistema_ap;
    return $this;
}
//PROSS
public function getCollaudo_pross(): ?\DateTimeInterface
{
    return $this->collaudo_pross;
}

public function setCollaudo_pross(?\DateTimeInterface $collaudo_pross): self
{
    $this->collaudo_pross = $collaudo_pross;
    return $this;
}

public function getTachigrafi_pross(): ?\DateTimeInterface
{
    return $this->tachigrafi_pross;
}

public function setTachigrafi_pross(?\DateTimeInterface $tachigrafi_pross): self
{
    $this->tachigrafi_pross = $tachigrafi_pross;
    return $this;
}

public function getEstintori_pross(): ?\DateTimeInterface
{
    return $this->estintori_pross;
}

public function setEstintori_pross(?\DateTimeInterface $estintori_pross): self
{
    $this->estintori_pross = $estintori_pross;
    return $this;
}

public function getCasetta_ps_pross(): ?\DateTimeInterface
{
    return $this->casetta_ps_pross;
}

public function setCasetta_ps_pross(?\DateTimeInterface $casetta_ps_pross): self
{
    $this->casetta_ps_pross = $casetta_ps_pross;
    return $this;
}

public function getSistema_ap_pross(): ?\DateTimeInterface
{
    return $this->sistema_ap_pross;
}

public function setSistema_ap_pross(?\DateTimeInterface $sistema_ap_pross): self
{
    $this->sistema_ap_pross = $sistema_ap_pross;
    return $this;
}


//ALERT
public function getCollaudo_alert(): ?\DateTimeInterface
{
    return $this->collaudo_alert;
}

public function setCollaudo_alert(?\DateTimeInterface $collaudo_alert): self
{
    $this->collaudo_alert = $collaudo_alert;
    return $this;
}

public function getTachigrafi_alert(): ?\DateTimeInterface
{
    return $this->tachigrafi_alert;
}

public function setTachigrafi_alert(?\DateTimeInterface $tachigrafi_alert): self
{
    $this->tachigrafi_alert = $tachigrafi_alert;
    return $this;
}

public function getEstintori_alert(): ?\DateTimeInterface
{
    return $this->estintori_alert;
}

public function setEstintori_alert(?\DateTimeInterface $estintori_alert): self
{
    $this->estintori_alert = $estintori_alert;
    return $this;
}

public function getCasetta_ps_alert(): ?\DateTimeInterface
{
    return $this->casetta_ps_alert;
}

public function setCasetta_ps_alert(?\DateTimeInterface $casetta_ps_alert): self
{
    $this->casetta_ps_alert = $casetta_ps_alert;
    return $this;
}

public function getSistema_ap_alert(): ?\DateTimeInterface
{
    return $this->sistema_ap_alert;
}

public function setSistema_ap_alert(?\DateTimeInterface $sistema_ap_alert): self
{
    $this->sistema_ap_alert = $sistema_ap_alert;
    return $this;
}

//tc
public function getTipo_olio_cambio_tc(): ?string
{
    return $this->tipo_olio_cambio_tc;
}

public function setTipo_olio_cambio_tc(?string $tipo_olio_cambio_tc): self
{
    $this->tipo_olio_cambio_tc = $tipo_olio_cambio_tc;
    return $this;
}

public function getTipo_olio_diff_tc(): ?string
{
    return $this->tipo_olio_diff_tc;
}

public function setTipo_olio_diff_tc(?string $tipo_olio_diff_tc): self
{
    $this->tipo_olio_diff_tc = $tipo_olio_diff_tc;
    return $this;
}

public function getTipo_olio_rallentatore_tc(): ?string
{
    return $this->tipo_olio_rallentatore_tc;
}

public function setTipo_olio_rallentatore_tc(?string $tipo_olio_rallentatore_tc): self
{
    $this->tipo_olio_rallentatore_tc = $tipo_olio_rallentatore_tc;
    return $this;
}

public function getTipo_olio_idroventola_tc(): ?string
{
    return $this->tipo_olio_idroventola_tc;
}

public function setTipo_olio_idroventola_tc(?string $tipo_olio_idroventola_tc): self
{
    $this->tipo_olio_idroventola_tc = $tipo_olio_idroventola_tc;
    return $this;
}

public function getOlio_mozzi_ant_tc(): ?string
{
    return $this->olio_mozzi_ant_tc;
}

public function setOlio_mozzi_ant_tc(?string $olio_mozzi_ant_tc): self
{
    $this->olio_mozzi_ant_tc = $olio_mozzi_ant_tc;
    return $this;
}

public function getOlio_mozzi_post_tc(): ?string
{
    return $this->olio_mozzi_post_tc;
}

public function setOlio_mozzi_post_tc(?string $olio_mozzi_post_tc): self
{
    $this->olio_mozzi_post_tc = $olio_mozzi_post_tc;
    return $this;
}

public function getAltro_olio_tc(): ?string
{
    return $this->altro_olio_tc;
}

public function setAltro_olio_tc(?string $altro_olio_tc): self
{
    $this->altro_olio_tc = $altro_olio_tc;
    return $this;
}
//qd
public function getTipo_olio_cambio_qd(): ?string
{
    return $this->tipo_olio_cambio_qd;
}

public function setTipo_olio_cambio_qd(?string $tipo_olio_cambio_qd): self
{
    $this->tipo_olio_cambio_qd = $tipo_olio_cambio_qd;
    return $this;
}

public function getTipo_olio_diff_qd(): ?string
{
    return $this->tipo_olio_diff_qd;
}

public function setTipo_olio_diff_qd(?string $tipo_olio_diff_qd): self
{
    $this->tipo_olio_diff_qd = $tipo_olio_diff_qd;
    return $this;
}

public function getTipo_olio_rallentatore_qd(): ?string
{
    return $this->tipo_olio_rallentatore_qd;
}

public function setTipo_olio_rallentatore_qd(?string $tipo_olio_rallentatore_qd): self
{
    $this->tipo_olio_rallentatore_qd = $tipo_olio_rallentatore_qd;
    return $this;
}

public function getTipo_olio_idroventola_qd(): ?string
{
    return $this->tipo_olio_idroventola_qd;
}

public function setTipo_olio_idroventola_qd(?string $tipo_olio_idroventola_qd): self
{
    $this->tipo_olio_idroventola_qd = $tipo_olio_idroventola_qd;
    return $this;
}

public function getOlio_mozzi_ant_qd(): ?string
{
    return $this->olio_mozzi_ant_qd;
}

public function setOlio_mozzi_ant_qd(?string $olio_mozzi_ant_qd): self
{
    $this->olio_mozzi_ant_qd = $olio_mozzi_ant_qd;
    return $this;
}

public function getOlio_mozzi_post_qd(): ?string
{
    return $this->olio_mozzi_post_qd;
}

public function setOlio_mozzi_post_qd(?string $olio_mozzi_post_qd): self
{
    $this->olio_mozzi_post_qd = $olio_mozzi_post_qd;
    return $this;
}

public function getAltro_olio_qd(): ?string
{
    return $this->altro_olio_qd;
}

public function setAltro_olio_qd(?string $altro_olio_qd): self
{
    $this->altro_olio_qd = $altro_olio_qd;
    return $this;
}
//f
public function getTipo_olio_cambio_f(): ?string
{
    return $this->tipo_olio_cambio_f;
}

public function setTipo_olio_cambio_f(?string $tipo_olio_cambio_f): self
{
    $this->tipo_olio_cambio_f = $tipo_olio_cambio_f;
    return $this;
}

public function getTipo_olio_diff_f(): ?string
{
    return $this->tipo_olio_diff_f;
}

public function setTipo_olio_diff_f(?string $tipo_olio_diff_f): self
{
    $this->tipo_olio_diff_f = $tipo_olio_diff_f;
    return $this;
}

public function getTipo_olio_rallentatore_f(): ?string
{
    return $this->tipo_olio_rallentatore_f;
}

public function setTipo_olio_rallentatore_f(?string $tipo_olio_rallentatore_f): self
{
    $this->tipo_olio_rallentatore_f = $tipo_olio_rallentatore_f;
    return $this;
}

public function getTipo_olio_idroventola_f(): ?string
{
    return $this->tipo_olio_idroventola_f;
}

public function setTipo_olio_idroventola_f(?string $tipo_olio_idroventola_f): self
{
    $this->tipo_olio_idroventola_f = $tipo_olio_idroventola_f;
    return $this;
}

public function getOlio_mozzi_ant_f(): ?string
{
    return $this->olio_mozzi_ant_f;
}

public function setOlio_mozzi_ant_f(?string $olio_mozzi_ant_f): self
{
    $this->olio_mozzi_ant_f = $olio_mozzi_ant_f;
    return $this;
}

public function getOlio_mozzi_post_f(): ?string
{
    return $this->olio_mozzi_post_f;
}

public function setOlio_mozzi_post_f(?string $olio_mozzi_post_f): self
{
    $this->olio_mozzi_post_f = $olio_mozzi_post_f;
    return $this;
}

public function getAltro_olio_f(): ?string
{
    return $this->altro_olio_f;
}

public function setAltro_olio_f(?string $altro_olio_f): self
{
    $this->altro_olio_f = $altro_olio_f;
    return $this;
}

//Ricabio 2
public function getCinghia_servizi_cm(): ?string
{
    return $this->cinghia_servizi_cm;
}

public function setCinghia_servizi_cm(?string $cinghia_servizi_cm): self
{
    $this->cinghia_servizi_cm = $cinghia_servizi_cm;
    return $this;
}

public function getRullo_cinghia_servizi_cm(): ?string
{
    return $this->rullo_cinghia_servizi_cm;
}

public function setRullo_cinghia_servizi_cm(?string $rullo_cinghia_servizi_cm): self
{
    $this->rullo_cinghia_servizi_cm = $rullo_cinghia_servizi_cm;
    return $this;
}
public function getTenditore_cinghia_servizi_cm(): ?string
{
    return $this->tenditore_cinghia_servizi_cm;
}

public function setTenditore_cinghia_servizi_cm(?string $tenditore_cinghia_servizi_cm): self
{
    $this->tenditore_cinghia_servizi_cm = $tenditore_cinghia_servizi_cm;
    return $this;
}
//
public function getCinghia_servizi_fm(): ?string
{
    return $this->cinghia_servizi_fm;
}

public function setCinghia_servizi_fm(?string $cinghia_servizi_fm): self
{
    $this->cinghia_servizi_fm = $cinghia_servizi_fm;
    return $this;
}

public function getRullo_cinghia_servizi_fm(): ?string
{
    return $this->rullo_cinghia_servizi_fm;
}

public function setRullo_cinghia_servizi_fm(?string $rullo_cinghia_servizi_fm): self
{
    $this->rullo_cinghia_servizi_fm = $rullo_cinghia_servizi_fm;
    return $this;
}
public function getTenditore_cinghia_servizi_fm(): ?string
{
    return $this->tenditore_cinghia_servizi_fm;
}

public function setTenditore_cinghia_servizi_fm(?string $tenditore_cinghia_servizi_fm): self
{
    $this->tenditore_cinghia_servizi_fm = $tenditore_cinghia_servizi_fm;
    return $this;
}
//
public function getCinghia_servizi_i(): ?string
{
    return $this->cinghia_servizi_i;
}

public function setCinghia_servizi_i(?string $cinghia_servizi_i): self
{
    $this->cinghia_servizi_i = $cinghia_servizi_i;
    return $this;
}

public function getRullo_cinghia_servizi_i(): ?string
{
    return $this->rullo_cinghia_servizi_i;
}

public function setRullo_cinghia_servizi_i(?string $rullo_cinghia_servizi_i): self
{
    $this->rullo_cinghia_servizi_i = $rullo_cinghia_servizi_i;
    return $this;
}
public function getTenditore_cinghia_servizi_i(): ?string
{
    return $this->tenditore_cinghia_servizi_i;
}

public function setTenditore_cinghia_servizi_i(?string $tenditore_cinghia_servizi_i): self
{
    $this->tenditore_cinghia_servizi_i = $tenditore_cinghia_servizi_i;
    return $this;
}
//
public function getCinghia_ac_aut_cm(): ?string
{
    return $this->cinghia_ac_aut_cm;
}

public function setCinghia_ac_aut_cm(?string $cinghia_ac_aut_cm): self
{
    $this->cinghia_ac_aut_cm = $cinghia_ac_aut_cm;
    return $this;
}

public function getRullo_cinghia_ac_aut_cm(): ?string
{
    return $this->rullo_cinghia_ac_aut_cm;
}

public function setRullo_cinghia_ac_aut_cm(?string $rullo_cinghia_ac_aut_cm): self
{
    $this->rullo_cinghia_ac_aut_cm = $rullo_cinghia_ac_aut_cm;
    return $this;
}
public function getTenditore_cinghia_ac_aut_cm(): ?string
{
    return $this->tenditore_cinghia_ac_aut_cm;
}

public function setTenditore_cinghia_ac_aut_cm(?string $tenditore_cinghia_ac_aut_cm): self
{
    $this->tenditore_cinghia_ac_aut_cm = $tenditore_cinghia_ac_aut_cm;
    return $this;
}
//
public function getCinghia_ac_aut_fm(): ?string
{
    return $this->cinghia_ac_aut_fm;
}

public function setCinghia_ac_aut_fm(?string $cinghia_ac_aut_fm): self
{
    $this->cinghia_ac_aut_fm = $cinghia_ac_aut_fm;
    return $this;
}

public function getRullo_cinghia_ac_aut_fm(): ?string
{
    return $this->rullo_cinghia_ac_aut_fm;
}

public function setRullo_cinghia_ac_aut_fm(?string $rullo_cinghia_ac_aut_fm): self
{
    $this->rullo_cinghia_ac_aut_fm = $rullo_cinghia_ac_aut_fm;
    return $this;
}
public function getTenditore_cinghia_ac_aut_fm(): ?string
{
    return $this->tenditore_cinghia_ac_aut_fm;
}

public function setTenditore_cinghia_ac_aut_fm(?string $tenditore_cinghia_ac_aut_fm): self
{
    $this->tenditore_cinghia_ac_aut_fm = $tenditore_cinghia_ac_aut_fm;
    return $this;
}
//
public function getCinghia_ac_aut_i(): ?string
{
    return $this->cinghia_ac_aut_i;
}

public function setCinghia_ac_aut_i(?string $cinghia_ac_aut_i): self
{
    $this->cinghia_ac_aut_i = $cinghia_ac_aut_i;
    return $this;
}

public function getRullo_cinghia_ac_aut_i(): ?string
{
    return $this->rullo_cinghia_ac_aut_i;
}

public function setRullo_cinghia_ac_aut_i(?string $rullo_cinghia_ac_aut_i): self
{
    $this->rullo_cinghia_ac_aut_i = $rullo_cinghia_ac_aut_i;
    return $this;
}
public function getTenditore_cinghia_ac_aut_i(): ?string
{
    return $this->tenditore_cinghia_ac_aut_i;
}

public function setTenditore_cinghia_ac_aut_i(?string $tenditore_cinghia_ac_aut_i): self
{
    $this->tenditore_cinghia_ac_aut_i = $tenditore_cinghia_ac_aut_i;
    return $this;
}
//pass
public function getCinghia_ac_pass_cm(): ?string
{
    return $this->cinghia_ac_pass_cm;
}

public function setCinghia_ac_pass_cm(?string $cinghia_ac_pass_cm): self
{
    $this->cinghia_ac_pass_cm = $cinghia_ac_pass_cm;
    return $this;
}

public function getRullo_cinghia_ac_pass_cm(): ?string
{
    return $this->rullo_cinghia_ac_pass_cm;
}

public function setRullo_cinghia_ac_pass_cm(?string $rullo_cinghia_ac_pass_cm): self
{
    $this->rullo_cinghia_ac_pass_cm = $rullo_cinghia_ac_pass_cm;
    return $this;
}

public function getTenditore_cinghia_ac_pass_cm(): ?string
{
    return $this->tenditore_cinghia_ac_pass_cm;
}

public function setTenditore_cinghia_ac_pass_cm(?string $tenditore_cinghia_ac_pass_cm): self
{
    $this->tenditore_cinghia_ac_pass_cm = $tenditore_cinghia_ac_pass_cm;
    return $this;
}
//fm
public function getCinghia_ac_pass_fm(): ?string
{
    return $this->cinghia_ac_pass_fm;
}

public function setCinghia_ac_pass_fm(?string $cinghia_ac_pass_fm): self
{
    $this->cinghia_ac_pass_fm = $cinghia_ac_pass_fm;
    return $this;
}

public function getRullo_cinghia_ac_pass_fm(): ?string
{
    return $this->rullo_cinghia_ac_pass_fm;
}

public function setRullo_cinghia_ac_pass_fm(?string $rullo_cinghia_ac_pass_fm): self
{
    $this->rullo_cinghia_ac_pass_fm = $rullo_cinghia_ac_pass_fm;
    return $this;
}

public function getTenditore_cinghia_ac_pass_fm(): ?string
{
    return $this->tenditore_cinghia_ac_pass_fm;
}

public function setTenditore_cinghia_ac_pass_fm(?string $tenditore_cinghia_ac_pass_fm): self
{
    $this->tenditore_cinghia_ac_pass_fm = $tenditore_cinghia_ac_pass_fm;
    return $this;
}
//i
public function getCinghia_ac_pass_i(): ?string
{
    return $this->cinghia_ac_pass_i;
}

public function setCinghia_ac_pass_i(?string $cinghia_ac_pass_i): self
{
    $this->cinghia_ac_pass_i = $cinghia_ac_pass_i;
    return $this;
}

public function getRullo_cinghia_ac_pass_i(): ?string
{
    return $this->rullo_cinghia_ac_pass_i;
}

public function setRullo_cinghia_ac_pass_i(?string $rullo_cinghia_ac_pass_i): self
{
    $this->rullo_cinghia_ac_pass_i = $rullo_cinghia_ac_pass_i;
    return $this;
}

public function getTenditore_cinghia_ac_pass_i(): ?string
{
    return $this->tenditore_cinghia_ac_pass_i;
}

public function setTenditore_cinghia_ac_pass_i(?string $tenditore_cinghia_ac_pass_i): self
{
    $this->tenditore_cinghia_ac_pass_i = $tenditore_cinghia_ac_pass_i;
    return $this;
}

//altri
public function getAltre_cinghie_cm(): ?string
{
    return $this->altre_cinghie_cm;
}

public function setAltre_cinghie_cm(?string $altre_cinghie_cm): self
{
    $this->altre_cinghie_cm = $altre_cinghie_cm;
    return $this;
}

public function getAltri_rulli_cm(): ?string
{
    return $this->altri_rulli_cm;
}

public function setAltri_rulli_cm(?string $altri_rulli_cm): self
{
    $this->altri_rulli_cm = $altri_rulli_cm;
    return $this;
}

public function getAltri_tenditore_cm(): ?string
{
    return $this->altri_tenditore_cm;
}

public function setAltri_tenditore_cm(?string $altri_tenditore_cm): self
{
    $this->altri_tenditore_cm = $altri_tenditore_cm;
    return $this;
}
//fm
public function getAltre_cinghie_fm(): ?string
{
    return $this->altre_cinghie_fm;
}

public function setAltre_cinghie_fm(?string $altre_cinghie_fm): self
{
    $this->altre_cinghie_fm = $altre_cinghie_fm;
    return $this;
}

public function getAltri_rulli_fm(): ?string
{
    return $this->altri_rulli_fm;
}

public function setAltri_rulli_fm(?string $altri_rulli_fm): self
{
    $this->altri_rulli_fm = $altri_rulli_fm;
    return $this;
}

public function getAltri_tenditore_fm(): ?string
{
    return $this->altri_tenditore_fm;
}

public function setAltri_tenditore_fm(?string $altri_tenditore_fm): self
{
    $this->altri_tenditore_fm = $altri_tenditore_fm;
    return $this;
}
//i
public function getAltre_cinghie_i(): ?string
{
    return $this->altre_cinghie_i;
}

public function setAltre_cinghie_i(?string $altre_cinghie_i): self
{
    $this->altre_cinghie_i = $altre_cinghie_i;
    return $this;
}

public function getAltri_rulli_i(): ?string
{
    return $this->altri_rulli_i;
}

public function setAltri_rulli_i(?string $altri_rulli_i): self
{
    $this->altri_rulli_i = $altri_rulli_i;
    return $this;
}

public function getAltri_tenditore_i(): ?string
{
    return $this->altri_tenditore_i;
}

public function setAltri_tenditore_i(?string $altri_tenditore_i): self
{
    $this->altri_tenditore_i = $altri_tenditore_i;
    return $this;
}
//************************************************************************** */
//filtro
public function getFiltro_gasolio_c(): ?string
{
    return $this->filtro_gasolio_c;
}

public function setFiltro_gasolio_c(?string $filtro_gasolio_c): self
{
    $this->filtro_gasolio_c = $filtro_gasolio_c;
    return $this;
}

public function getPrefiltro_gasolio_c(): ?string
{
    return $this->prefiltro_gasolio_c;
}

public function setPrefiltro_gasolio_c(?string $prefiltro_gasolio_c): self
{
    $this->prefiltro_gasolio_c = $prefiltro_gasolio_c;
    return $this;
}

public function getAltro_filtro_gasolio_c(): ?string
{
    return $this->altro_filtro_gasolio_c;
}

public function setAltro_filtro_gasolio_c(?string $altro_filtro_gasolio_c): self
{
    $this->altro_filtro_gasolio_c = $altro_filtro_gasolio_c;
    return $this;
}

public function getFiltro_area_motore_c(): ?string
{
    return $this->filtro_area_motore_c;
}

public function setFiltro_area_motore_c(?string $filtro_area_motore_c): self
{
    $this->filtro_area_motore_c = $filtro_area_motore_c;
    return $this;
}

public function getFiltro_olio_motore_c(): ?string
{
    return $this->filtro_olio_motore_c;
}

public function setFiltro_olio_motore_c(?string $filtro_olio_motore_c): self
{
    $this->filtro_olio_motore_c = $filtro_olio_motore_c;
    return $this;
}

public function getKit_filtro_centrifugo_c(): ?string
{
    return $this->kit_filtro_centrifugo_c;
}

public function setKit_filtro_centrifugo_c(?string $kit_filtro_centrifugo_c): self
{
    $this->kit_filtro_centrifugo_c = $kit_filtro_centrifugo_c;
    return $this;
}

public function getFiltro_essiccatore_c(): ?string
{
    return $this->filtro_essiccatore_c;
}

public function setFiltro_essiccatore_c(?string $filtro_essiccatore_c): self
{
    $this->filtro_essiccatore_c = $filtro_essiccatore_c;
    return $this;
}

public function getFiltro_urea_c(): ?string
{
    return $this->filtro_urea_c;
}

public function setFiltro_urea_c(?string $filtro_urea_c): self
{
    $this->filtro_urea_c = $filtro_urea_c;
    return $this;
}

public function getFiltro_idroventola_c(): ?string
{
    return $this->filtro_idroventola_c;
}

public function setFiltro_idroventola_c(?string $filtro_idroventola_c): self
{
    $this->filtro_idroventola_c = $filtro_idroventola_c;
    return $this;
}

public function getFiltro_olio_cambio_c(): ?string
{
    return $this->filtro_olio_cambio_c;
}

public function setFiltro_olio_cambio_c(?string $filtro_olio_cambio_c): self
{
    $this->filtro_olio_cambio_c = $filtro_olio_cambio_c;
    return $this;
}

public function getFiltro_olio_diff_c(): ?string
{
    return $this->filtro_olio_diff_c;
}

public function setFiltro_olio_diff_c(?string $filtro_olio_diff_c): self
{
    $this->filtro_olio_diff_c = $filtro_olio_diff_c;
    return $this;
}

public function getFiltro_olio_rellantatore_c(): ?string
{
    return $this->filtro_olio_rellantatore_c;
}

public function setFiltro_olio_rellantatore_c(?string $filtro_olio_rellantatore_c): self
{
    $this->filtro_olio_rellantatore_c = $filtro_olio_rellantatore_c;
    return $this;
}

public function getFiltro_aria_ac_autista_c(): ?string
{
    return $this->filtro_aria_ac_autista_c;
}

public function setFiltro_aria_ac_autista_c(?string $filtro_aria_ac_autista_c): self
{
    $this->filtro_aria_ac_autista_c = $filtro_aria_ac_autista_c;
    return $this;
}

public function getFiltro_aria_ac_pass_c(): ?string
{
    return $this->filtro_aria_ac_pass_c;
}

public function setFiltro_aria_ac_pass_c(?string $filtro_aria_ac_pass_c): self
{
    $this->filtro_aria_ac_pass_c = $filtro_aria_ac_pass_c;
    return $this;
}
//f
public function getFiltro_gasolio_f(): ?string
{
    return $this->filtro_gasolio_f;
}

public function setFiltro_gasolio_f(?string $filtro_gasolio_f): self
{
    $this->filtro_gasolio_f = $filtro_gasolio_f;
    return $this;
}

public function getPrefiltro_gasolio_f(): ?string
{
    return $this->prefiltro_gasolio_f;
}

public function setPrefiltro_gasolio_f(?string $prefiltro_gasolio_f): self
{
    $this->prefiltro_gasolio_f = $prefiltro_gasolio_f;
    return $this;
}

public function getAltro_filtro_gasolio_f(): ?string
{
    return $this->altro_filtro_gasolio_f;
}

public function setAltro_filtro_gasolio_f(?string $altro_filtro_gasolio_f): self
{
    $this->altro_filtro_gasolio_f = $altro_filtro_gasolio_f;
    return $this;
}

public function getFiltro_area_motore_f(): ?string
{
    return $this->filtro_area_motore_f;
}

public function setFiltro_area_motore_f(?string $filtro_area_motore_f): self
{
    $this->filtro_area_motore_f = $filtro_area_motore_f;
    return $this;
}

public function getFiltro_olio_motore_f(): ?string
{
    return $this->filtro_olio_motore_f;
}

public function setFiltro_olio_motore_f(?string $filtro_olio_motore_f): self
{
    $this->filtro_olio_motore_f = $filtro_olio_motore_f;
    return $this;
}

public function getKit_filtro_centrifugo_f(): ?string
{
    return $this->kit_filtro_centrifugo_f;
}

public function setKit_filtro_centrifugo_f(?string $kit_filtro_centrifugo_f): self
{
    $this->kit_filtro_centrifugo_f = $kit_filtro_centrifugo_f;
    return $this;
}

public function getFiltro_essiccatore_f(): ?string
{
    return $this->filtro_essiccatore_f;
}

public function setFiltro_essiccatore_f(?string $filtro_essiccatore_f): self
{
    $this->filtro_essiccatore_f = $filtro_essiccatore_f;
    return $this;
}

public function getFiltro_urea_f(): ?string
{
    return $this->filtro_urea_f;
}

public function setFiltro_urea_f(?string $filtro_urea_f): self
{
    $this->filtro_urea_f = $filtro_urea_f;
    return $this;
}

public function getFiltro_idroventola_f(): ?string
{
    return $this->filtro_idroventola_f;
}

public function setFiltro_idroventola_f(?string $filtro_idroventola_f): self
{
    $this->filtro_idroventola_f = $filtro_idroventola_f;
    return $this;
}

public function getFiltro_olio_cambio_f(): ?string
{
    return $this->filtro_olio_cambio_f;
}

public function setFiltro_olio_cambio_f(?string $filtro_olio_cambio_f): self
{
    $this->filtro_olio_cambio_f = $filtro_olio_cambio_f;
    return $this;
}

public function getFiltro_olio_diff_f(): ?string
{
    return $this->filtro_olio_diff_f;
}

public function setFiltro_olio_diff_f(?string $filtro_olio_diff_f): self
{
    $this->filtro_olio_diff_f = $filtro_olio_diff_f;
    return $this;
}

public function getFiltro_olio_rellantatore_f(): ?string
{
    return $this->filtro_olio_rellantatore_f;
}

public function setFiltro_olio_rellantatore_f(?string $filtro_olio_rellantatore_f): self
{
    $this->filtro_olio_rellantatore_f = $filtro_olio_rellantatore_f;
    return $this;
}

public function getFiltro_aria_ac_autista_f(): ?string
{
    return $this->filtro_aria_ac_autista_f;
}

public function setFiltro_aria_ac_autista_f(?string $filtro_aria_ac_autista_f): self
{
    $this->filtro_aria_ac_autista_f = $filtro_aria_ac_autista_f;
    return $this;
}

public function getFiltro_aria_ac_pass_f(): ?string
{
    return $this->filtro_aria_ac_pass_f;
}

public function setFiltro_aria_ac_pass_f(?string $filtro_aria_ac_pass_f): self
{
    $this->filtro_aria_ac_pass_f = $filtro_aria_ac_pass_f;
    return $this;
}
//i
public function getFiltro_gasolio_i(): ?string
{
    return $this->filtro_gasolio_i;
}

public function setFiltro_gasolio_i(?string $filtro_gasolio_i): self
{
    $this->filtro_gasolio_i = $filtro_gasolio_i;
    return $this;
}

public function getPrefiltro_gasolio_i(): ?string
{
    return $this->prefiltro_gasolio_i;
}

public function setPrefiltro_gasolio_i(?string $prefiltro_gasolio_i): self
{
    $this->prefiltro_gasolio_i = $prefiltro_gasolio_i;
    return $this;
}

public function getAltro_filtro_gasolio_i(): ?string
{
    return $this->altro_filtro_gasolio_i;
}

public function setAltro_filtro_gasolio_i(?string $altro_filtro_gasolio_i): self
{
    $this->altro_filtro_gasolio_i = $altro_filtro_gasolio_i;
    return $this;
}

public function getFiltro_area_motore_i(): ?string
{
    return $this->filtro_area_motore_i;
}

public function setFiltro_area_motore_i(?string $filtro_area_motore_i): self
{
    $this->filtro_area_motore_i = $filtro_area_motore_i;
    return $this;
}

public function getFiltro_olio_motore_i(): ?string
{
    return $this->filtro_olio_motore_i;
}

public function setFiltro_olio_motore_i(?string $filtro_olio_motore_i): self
{
    $this->filtro_olio_motore_i = $filtro_olio_motore_i;
    return $this;
}

public function getKit_filtro_centrifugo_i(): ?string
{
    return $this->kit_filtro_centrifugo_i;
}

public function setKit_filtro_centrifugo_i(?string $kit_filtro_centrifugo_i): self
{
    $this->kit_filtro_centrifugo_i = $kit_filtro_centrifugo_i;
    return $this;
}

public function getFiltro_essiccatore_i(): ?string
{
    return $this->filtro_essiccatore_i;
}

public function setFiltro_essiccatore_i(?string $filtro_essiccatore_i): self
{
    $this->filtro_essiccatore_i = $filtro_essiccatore_i;
    return $this;
}

public function getFiltro_urea_i(): ?string
{
    return $this->filtro_urea_i;
}

public function setFiltro_urea_i(?string $filtro_urea_i): self
{
    $this->filtro_urea_i = $filtro_urea_i;
    return $this;
}

public function getFiltro_idroventola_i(): ?string
{
    return $this->filtro_idroventola_i;
}

public function setFiltro_idroventola_i(?string $filtro_idroventola_i): self
{
    $this->filtro_idroventola_i = $filtro_idroventola_i;
    return $this;
}

public function getFiltro_olio_cambio_i(): ?string
{
    return $this->filtro_olio_cambio_i;
}

public function setFiltro_olio_cambio_i(?string $filtro_olio_cambio_i): self
{
    $this->filtro_olio_cambio_i = $filtro_olio_cambio_i;
    return $this;
}

public function getFiltro_olio_diff_i(): ?string
{
    return $this->filtro_olio_diff_i;
}

public function setFiltro_olio_diff_i(?string $filtro_olio_diff_i): self
{
    $this->filtro_olio_diff_i = $filtro_olio_diff_i;
    return $this;
}

public function getFiltro_olio_rellantatore_i(): ?string
{
    return $this->filtro_olio_rellantatore_i;
}

public function setFiltro_olio_rellantatore_i(?string $filtro_olio_rellantatore_i): self
{
    $this->filtro_olio_rellantatore_i = $filtro_olio_rellantatore_i;
    return $this;
}

public function getFiltro_aria_ac_autista_i(): ?string
{
    return $this->filtro_aria_ac_autista_i;
}

public function setFiltro_aria_ac_autista_i(?string $filtro_aria_ac_autista_i): self
{
    $this->filtro_aria_ac_autista_i = $filtro_aria_ac_autista_i;
    return $this;
}

public function getFiltro_aria_ac_pass_i(): ?string
{
    return $this->filtro_aria_ac_pass_i;
}

public function setFiltro_aria_ac_pass_i(?string $filtro_aria_ac_pass_i): self
{
    $this->filtro_aria_ac_pass_i = $filtro_aria_ac_pass_i;
    return $this;
}

//frenos
public function getPastiglie_freno_ant_c(): ?string
{
    return $this->pastiglie_freno_ant_c;
}

public function setPastiglie_freno_ant_c(?string $pastiglie_freno_ant_c): self
{
    $this->pastiglie_freno_ant_c = $pastiglie_freno_ant_c;
    return $this;
}

public function getPastiglie_freno_post_c(): ?string
{
    return $this->pastiglie_freno_post_c;
}

public function setPastiglie_freno_post_c(?string $pastiglie_freno_post_c): self
{
    $this->pastiglie_freno_post_c = $pastiglie_freno_post_c;
    return $this;
}


public function getPastiglie_freno_ant_f(): ?string
{
    return $this->pastiglie_freno_ant_f;
}

public function setPastiglie_freno_ant_f(?string $pastiglie_freno_ant_f): self
{
    $this->pastiglie_freno_ant_f = $pastiglie_freno_ant_f;
    return $this;
}

public function getPastiglie_freno_post_f(): ?string
{
    return $this->pastiglie_freno_post_f;
}

public function setPastiglie_freno_post_f(?string $pastiglie_freno_post_f): self
{
    $this->pastiglie_freno_post_f = $pastiglie_freno_post_f;
    return $this;
}

public function getPastiglie_freno_ant_n(): ?string
{
    return $this->pastiglie_freno_ant_n;
}

public function setPastiglie_freno_ant_n(?string $pastiglie_freno_ant_n): self
{
    $this->pastiglie_freno_ant_n = $pastiglie_freno_ant_n;
    return $this;
}

public function getPastiglie_freno_post_n(): ?string
{
    return $this->pastiglie_freno_post_n;
}

public function setPastiglie_freno_post_n(?string $pastiglie_freno_post_n): self
{
    $this->pastiglie_freno_post_n = $pastiglie_freno_post_n;
    return $this;
}
//bateria
public function getBatterie_c(): ?string
{
    return $this->batterie_c;
}

public function setBatterie_c(?string $batterie_c): self
{
    $this->batterie_c = $batterie_c;
    return $this;
}

public function getModello_spazzole_tergi_c(): ?string
{
    return $this->modello_spazzole_tergi_c;
}

public function setModello_spazzole_tergi_c(?string $modello_spazzole_tergi_c): self
{
    $this->modello_spazzole_tergi_c = $modello_spazzole_tergi_c;
    return $this;
}

public function getGomme_ant_c(): ?string
{
    return $this->gomme_ant_c;
}

public function setGomme_ant_c(?string $gomme_ant_c): self
{
    $this->gomme_ant_c = $gomme_ant_c;
    return $this;
}

public function getGomme_post_c(): ?string
{
    return $this->gomme_post_c;
}

public function setGomme_post_c(?string $gomme_post_c): self
{
    $this->gomme_post_c = $gomme_post_c;
    return $this;
}
//f
public function getBatterie_f(): ?string
{
    return $this->batterie_f;
}

public function setBatterie_f(?string $batterie_f): self
{
    $this->batterie_f = $batterie_f;
    return $this;
}

public function getModello_spazzole_tergi_f(): ?string
{
    return $this->modello_spazzole_tergi_f;
}

public function setModello_spazzole_tergi_f(?string $modello_spazzole_tergi_f): self
{
    $this->modello_spazzole_tergi_f = $modello_spazzole_tergi_f;
    return $this;
}

public function getGomme_ant_f(): ?string
{
    return $this->gomme_ant_f;
}

public function setGomme_ant_f(?string $gomme_ant_f): self
{
    $this->gomme_ant_f = $gomme_ant_f;
    return $this;
}

public function getGomme_post_f(): ?string
{
    return $this->gomme_post_f;
}

public function setGomme_post_f(?string $gomme_post_f): self
{
    $this->gomme_post_f = $gomme_post_f;
    return $this;
}
//n
public function getBatterie_n(): ?string
{
    return $this->batterie_n;
}

public function setBatterie_n(?string $batterie_n): self
{
    $this->batterie_n = $batterie_n;
    return $this;
}

public function getModello_spazzole_tergi_n(): ?string
{
    return $this->modello_spazzole_tergi_n;
}

public function setModello_spazzole_tergi_n(?string $modello_spazzole_tergi_n): self
{
    $this->modello_spazzole_tergi_n = $modello_spazzole_tergi_n;
    return $this;
}

public function getGomme_ant_n(): ?string
{
    return $this->gomme_ant_n;
}

public function setGomme_ant_n(?string $gomme_ant_n): self
{
    $this->gomme_ant_n = $gomme_ant_n;
    return $this;
}

public function getGomme_post_n(): ?string
{
    return $this->gomme_post_n;
}

public function setGomme_post_n(?string $gomme_post_n): self
{
    $this->gomme_post_n = $gomme_post_n;
    return $this;
}


}
