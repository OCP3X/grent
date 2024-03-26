<?php

namespace App\Entity;

use App\Repository\RigheRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RigheRepository::class)]
class Righe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_riga = null;

    #[ORM\Column]
    private ?int $id_testa_fk = null;

    #[ORM\Column]
    private ?int $id_l_fk = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $descrizione_anomalia = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $descrizione_intervento = null;

    #[ORM\Column(length: 20,nullable: true)]
    private ?string $id_meccanico = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_riga_prelievo = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $data_creazione = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $data_modifica = null;

    #[ORM\Column]
    private ?int $utente_creazione = null;

    #[ORM\Column(nullable: true)]
    private ?int $utente_modifica = null;

    #[ORM\Column]
    private ?int $id_r_real = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stato = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_fk = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 18, scale: 1, nullable: true)]
    private ?string $ore = null;

    #[ORM\ManyToOne(inversedBy: 'righes')]
    #[ORM\JoinColumn(name: "id_off_intervento", referencedColumnName: "id_off_intervento")]
    private ?OffIntervento $id_off_intervento = null;

    

    
    public function getId(): ?int
    {
        return $this->id_riga;
    }

    public function getIdTestaFk(): ?int
    {
        return $this->id_testa_fk;
    }

    public function setIdTestaFk(int $id_testa_fk): self
    {
        $this->id_testa_fk = $id_testa_fk;

        return $this;
    }

    public function getIdLFk(): ?int
    {
        return $this->id_l_fk;
    }

    public function setIdLFk(int $id_l_fk): self
    {
        $this->id_l_fk = $id_l_fk;

        return $this;
    }

    public function getDescrizioneAnomalia(): ?string
    {
        return $this->descrizione_anomalia;
    }

    public function setDescrizioneAnomalia(?string $descrizione_anomalia): self
    {
        $this->descrizione_anomalia = $descrizione_anomalia;

        return $this;
    }

    public function getDescrizioneIntervento(): ?string
    {
        return $this->descrizione_intervento;
    }

    public function setDescrizioneIntervento(?string $descrizione_intervento): self
    {
        $this->descrizione_intervento = $descrizione_intervento;

        return $this;
    }

    public function getIdMeccanico(): ?string
    {
        return $this->id_meccanico;
    }

    public function setIdMeccanico(?string $id_meccanico): self
    {
        $this->id_meccanico = $id_meccanico;

        return $this;
    }

    public function getIdRigaPrelievo(): ?int
    {
        return $this->id_riga_prelievo;
    }

    public function setIdRigaPrelievo(?int $id_riga_prelievo): self
    {
        $this->id_riga_prelievo = $id_riga_prelievo;

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

    public function setDataModifica(?\DateTimeInterface $data_modifica): self
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

    public function getIdRReal(): ?int
    {
        return $this->id_r_real;
    }

    public function setIdRReal(int $id_r_real): self
    {
        $this->id_r_real = $id_r_real;

        return $this;
    }

    public function getStato(): ?string
    {
        return $this->stato;
    }

    public function setStato(?string $stato): self
    {
        $this->stato = $stato;

        return $this;
    }

    public function getIdFk(): ?int
    {
        return $this->id_fk;
    }

    public function setIdFk(?int $id_fk): self
    {
        $this->id_fk = $id_fk;

        return $this;
    }

    public function getOre(): ?string
    {
        return $this->ore;
    }

    public function setOre(?string $ore): static
    {
        $this->ore = $ore;

        return $this;
    }

    public function getIdOffIntervento(): ?OffIntervento
    {
        return $this->id_off_intervento;
    }

    public function setIdOffIntervento(?OffIntervento $id_off_intervento): static
    {
        $this->id_off_intervento = $id_off_intervento;

        return $this;
    }

    
}
