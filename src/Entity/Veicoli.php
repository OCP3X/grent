<?php

namespace App\Entity;

use App\Repository\VeicoliRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Lavagna;

#[ORM\Entity(repositoryClass: VeicoliRepository::class)]
class Veicoli
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private $idVeicolo;

   
    #[ORM\Column(length: 400)]
    private $numParco;

    
    #[ORM\Column(length: 400)]
    private $descrizion;

   
    #[ORM\Column(length: 400)]
    private $targa;

  
    #[ORM\Column(length: 400)]
    private $idTipoVeicolo;

   
    #[ORM\Column(length: 400)]
    private $idGruppoVeicolo;

   
    #[ORM\Column(type: 'datetime')]
    private $immatricolazione;

   
    #[ORM\Column(length: 400)]
    private $numposti;

  
    #[ORM\Column(type: 'datetime')]
    private $dc;

   
    #[ORM\Column]
    private $dm;

   
    #[ORM\Column(length: 400)]
    private $descrizione2;

  
    #[ORM\Column]
    private $ordine;

   
    #[ORM\Column(length: 400)]
    private $proprieta;

   
    #[ORM\Column]
    private $fittizio;

    #[ORM\Column]
    private $termiche = '0';

    public function getIdVeicolo(): ?int
    {
        return $this->idVeicolo;
    }

    public function getNumParco(): ?string
    {
        return trim($this->numParco);
    }

    public function setNumParco(?string $numParco): self
    {
        $this->numParco = $numParco;

        return $this;
    }

    public function getDescrizion(): ?string
    {
        return trim($this->descrizion);
    }

    public function setDescrizion(?string $descrizion): self
    {
        $this->descrizion = $descrizion;

        return $this;
    }

    public function getTarga(): ?string
    {
        return trim($this->targa);
    }

    public function setTarga(?string $targa): self
    {
        $this->targa = $targa;

        return $this;
    }

    public function getIdTipoVeicolo(): ?string
    {
        return $this->idTipoVeicolo;
    }

    public function setIdTipoVeicolo(?string $idTipoVeicolo): self
    {
        $this->idTipoVeicolo = $idTipoVeicolo;

        return $this;
    }

    public function getIdGruppoVeicolo(): ?string
    {
        return $this->idGruppoVeicolo;
    }

    public function setIdGruppoVeicolo(?string $idGruppoVeicolo): self
    {
        $this->idGruppoVeicolo = $idGruppoVeicolo;

        return $this;
    }

    public function getImmatricolazione(): ?\DateTimeInterface
    {
        return $this->immatricolazione;
    }

    public function setImmatricolazione(?\DateTimeInterface $immatricolazione): self
    {
        $this->immatricolazione = $immatricolazione;

        return $this;
    }

    public function getNumposti(): ?string
    {
        return $this->numposti;
    }

    public function setNumposti(?string $numposti): self
    {
        $this->numposti = $numposti;

        return $this;
    }

    public function getDc(): ?\DateTimeInterface
    {
        return $this->dc;
    }

    public function setDc(?\DateTimeInterface $dc): self
    {
        $this->dc = $dc;

        return $this;
    }

    public function getDm(): ?\DateTimeInterface
    {
        return $this->dm;
    }

    public function setDm(?\DateTimeInterface $dm): self
    {
        $this->dm = $dm;

        return $this;
    }

    public function getDescrizione2(): ?string
    {
        return $this->descrizione2;
    }

    public function setDescrizione2(?string $descrizione2): self
    {
        $this->descrizione2 = $descrizione2;

        return $this;
    }

    public function getOrdine(): ?int
    {
        return $this->ordine;
    }

    public function setOrdine(?int $ordine): self
    {
        $this->ordine = $ordine;

        return $this;
    }

    public function getProprieta(): ?string
    {
        return $this->proprieta;
    }

    public function setProprieta(?string $proprieta): self
    {
        $this->proprieta = $proprieta;

        return $this;
    }

    public function getFittizio(): ?int
    {
        return $this->fittizio;
    }

    public function setFittizio(?int $fittizio): self
    {
        $this->fittizio = $fittizio;

        return $this;
    }

    public function getTermiche(): ?int
    {
        return $this->termiche;
    }

    public function setTermiche(?int $termiche): self
    {
        $this->termiche = $termiche;

        return $this;
    }


}
