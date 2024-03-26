<?php

namespace App\Entity;

use App\Repository\TesteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

#[ORM\Entity(repositoryClass: TesteRepository::class)]
class Teste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_testa = null;


    #[ORM\Column(length: 255)]
    private ?string $tipodoc = null;

    #[ORM\Column]
    private ?int $numero_doc = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $data_doc = null;

    #[ORM\Column]
    private ?int $id_veicolo = null;

    #[ORM\Column]
    private ?int $id_meccanico = null;

    #[ORM\Column(length: 255)]
    private ?string $tipo_intervento = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $data_creazione = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $data_modifica = null;

    #[ORM\Column]
    private ?int $utente_creazione = null;

    #[ORM\Column(nullable: true)]
    private ?int $utente_modifica = null;

    #[ORM\Column]
    private ?int $id_t_real = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $state = null;

    #[ORM\Column(length: 50)]
    private ?string $sid = null;

    #[ORM\Column(nullable: true)]
    private ?int $km_attuali = null;

    #[ORM\Column(nullable: true)]
    private ?int $terminato = null;
    
   // Relación con WebUser para utente_creazione
   #[ManyToOne(targetEntity: WebUser::class)]
   #[JoinColumn(name: "utente_creazione", referencedColumnName: "id_wu")]
   private ?WebUser $webUserCreazione = null;

   // Relación con WebUser para utente_modifica
   #[ManyToOne(targetEntity: WebUser::class)]
   #[JoinColumn(name: "utente_modifica", referencedColumnName: "id_wu")]
   private ?WebUser $webUserModifica = null;

   public function getWebUserCreazione(): ?WebUser
   {
       return $this->webUserCreazione;
   }

   public function setWebUserCreazione(?WebUser $webUser): self
   {
       $this->webUserCreazione = $webUser;
       return $this;
   }

   public function getWebUserModifica(): ?WebUser
   {
       return $this->webUserModifica;
   }

   public function setWebUserModifica(?WebUser $webUser): self
   {
       $this->webUserModifica = $webUser;
       return $this;
   }
   //fin relacion
   
    public function getId(): ?int
    {
        return $this->id_testa;
    }

    public function getTipoDoc(): ?string
    {
        return $this->tipodoc;
    }

    public function setTipoDoc(string $tipodoc): self
    {
        $this->tipodoc = $tipodoc;

        return $this;
    }
    

 

    public function getNumeroDoc(): ?int
    {
        return $this->numero_doc;
    }

    public function setNumeroDoc($numero_doc): self
    {
        if (is_null($numero_doc)){
            $numero_doc =0;
        }
        $this->numero_doc = $numero_doc;

        return $this;
    }

    public function getDataDoc(): ?\DateTimeInterface
    {
        return $this->data_doc;
    }

    public function getDataDocFormat($format): string
    {

        
        return date_format( $this->data_doc ,$format  );
        
    }

    public function setDataDoc(\DateTimeInterface $data_doc): self
    {
        $this->data_doc = $data_doc;

        return $this;
    }

    public function getIdVeicolo(): ?int
    {
        return $this->id_veicolo;
    }

    public function setIdVeicolo(int $id_veicolo): self
    {
        $this->id_veicolo = $id_veicolo;

        return $this;
    }

    public function getIdMeccanico(): ?int
    {
        return $this->id_meccanico;
    }

    public function setIdMeccanico(int $id_meccanico): self
    {
        $this->id_meccanico = $id_meccanico;

        return $this;
    }

    public function getTipoIntervento(): ?string
    {
        return $this->tipo_intervento;
    }

    public function setTipoIntervento(string $tipo_intervento): self
    {
        $this->tipo_intervento = $tipo_intervento;

        return $this;
    }

    public function getDataCreazione(): ?\DateTimeInterface
    {
        return $this->data_creazione;
    }

    public function setDataCreazione(\DateTimeInterface $data_creazione): self
    {
        $this->data_creazione = $data_creazione;

        return $this;
    }

    public function getDataModifica(): ?\DateTimeInterface
    {
        return $this->data_modifica;
    }

    public function setDataModifica(\DateTimeInterface $data_modifica): self
    {
        $this->data_modifica = $data_modifica;

        return $this;
    }

    public function getUtenteCreazione(): ?int
    {
        return $this->utente_creazione;
    }

    public function setUtenteCreazione(int $utente_creazione): self
    {
        $this->utente_creazione = $utente_creazione;

        return $this;
    }

    public function getUtenteModifica(): ?int
    {
        return $this->utente_modifica;
    }

    public function setUtenteModifica(?int $utente_modifica): self
    {
        $this->utente_modifica = $utente_modifica;

        return $this;
    }

    public function getIdTReal(): ?int
    {
        return $this->id_t_real;
    }

    public function setIdTReal(int $id_t_real): self
    {
        $this->id_t_real = $id_t_real;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getSid(): ?string
    {
        return $this->sid;
    }

    public function setSid(string $sid): self
    {
        $this->sid = $sid;

        return $this;
    }

    public function getKmAttuali(): ?int
    {
        return $this->km_attuali;
    }

    public function setKmAttuali(?int $km_attuali): static
    {
        $this->km_attuali = $km_attuali;

        return $this;
    }

    public function getTerminato(): ?int
    {
        if (is_null($this->terminato)){
            $this->terminato=0;
        }
        return $this->terminato;
    }

    public function setTerminato(?int $terminato): static
    {
        $this->terminato = $terminato;

        return $this;
    }
}
