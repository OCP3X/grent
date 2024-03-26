<?php

namespace App\Entity;

use App\Repository\LavagnaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Veicoli;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

#[ORM\Entity(repositoryClass: LavagnaRepository::class)]
class Lavagna
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idL = null;
    
    #[ORM\Column(length: 400)]
    private ?string $anomalia = null;
    
    #[ORM\Column]
    private ?int $id_veicolo = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $data_lavagna = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dc = null;

    
    #[ORM\Column]
    private ?int $uc = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dm = null;

    #[ORM\Column]
    private ?int $um = null;
    
    
    public function getIdL(): ?int
    {
        return $this->idL;
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
    
    public function getAnomalia(): ?string
    {
        return $this->anomalia;
    }
    
    public function setAnomalia(string $anomalia): self
    {
        $this->anomalia = $anomalia;
        return $this;
    }

    public function getDataLavagna(): ?\DateTimeInterface
    {
        return $this->data_lavagna;
    }

    public function setDataLavagna(?\DateTimeInterface $data_lavagna): static
    {
        $this->data_lavagna = $data_lavagna;

        return $this;
    }

    public function getDc(): ?\DateTimeInterface
    {
        return $this->dc;
    }

    public function setDc(\DateTimeInterface $dc): static
    {
        $this->dc = $dc;

        return $this;
    }

    // Relación con WebUser para utente_creazione
   #[ManyToOne(targetEntity: WebUser::class)]
   #[JoinColumn(name: "uc", referencedColumnName: "id_wu")]
   private ?WebUser $webUserCreazione = null;

   // Relación con WebUser para utente_modifica
   #[ManyToOne(targetEntity: WebUser::class)]
   #[JoinColumn(name: "um", referencedColumnName: "id_wu")]
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

    public function getUc(): ?int
    {
        return $this->uc;
    }

    public function setUc(int $uc): static
    {
        $this->uc = $uc;

        return $this;
    }

    public function getDm(): ?\DateTimeInterface
    {
        return $this->dm;
    }

    public function setDm(\DateTimeInterface $dm): self
    {
        $this->dm = $dm;

        return $this;
    }

    public function getUm(): ?int
    {
        return $this->um;
    }

    public function setUm(int $um): static
    {
        $this->um = $um;

        return $this;
    }
}
