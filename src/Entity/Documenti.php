<?php

namespace App\Entity;

use App\Repository\DocumentiRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: DocumentiRepository::class)]
#[ORM\Table(name: "files")] 
class Documenti
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idfile = null;


    #[ORM\Column]
    private ?int $id_veicolo = null;

    #[ORM\Column(length: 50)]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    private ?string $path = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;


    //funciones

    public function getIdVeicolo(): ?int
    {
        return $this->id_veicolo;
    }
    
    public function setIdVeicolo(int $id_veicolo): self
    {
        $this->id_veicolo = $id_veicolo;
        
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getPath(): ?string
    {
        return $this->description;
    }
    
    public function setPath(string $path): self
    {
        $this->path = $path;
        return $this;
    }

    public function getCreated_at(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreated_at(?\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->idfile;
    }
}
