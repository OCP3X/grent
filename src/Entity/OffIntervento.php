<?php

namespace App\Entity;

use App\Repository\OffInterventoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OffInterventoRepository::class)]
class OffIntervento
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    
    private ?int $id_off_intervento = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $intervento = null;

    #[ORM\Column(nullable: true)]
    private ?int $ordine = null;

    #[ORM\OneToMany(mappedBy: 'id_off_intervento', targetEntity: Righe::class)]
    private Collection $righes;

    

    public function __construct()
    {
        $this->righes = new ArrayCollection();
    }

    public function getIdOffIntervento(): ?int
    {
        return $this->idOffIntervento;
    }

    public function getIntervento(): ?string
    {
        return $this->intervento;
    }

    public function setIntervento(?string $intervento): static
    {
        $this->intervento = $intervento;

        return $this;
    }

    public function getOrdine(): ?int
    {
        return $this->ordine;
    }

    public function setOrdine(?int $ordine): static
    {
        $this->ordine = $ordine;

        return $this;
    }

    /**
     * @return Collection<int, Righe>
     */
    public function getRighes(): Collection
    {
        return $this->righes;
    }

    public function addRighe(Righe $righe): static
    {
        if (!$this->righes->contains($righe)) {
            $this->righes->add($righe);
            $righe->setIdOffIntervento($this);
        }

        return $this;
    }

    public function removeRighe(Righe $righe): static
    {
        if ($this->righes->removeElement($righe)) {
            // set the owning side to null (unless already changed)
            if ($righe->getIdOffIntervento() === $this) {
                $righe->setIdOffIntervento(null);
            }
        }

        return $this;
    }

}
