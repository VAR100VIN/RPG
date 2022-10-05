<?php

namespace App\Entity;

use App\Repository\CompetencesRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: CompetencesRepository::class)]
class Competences
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $decription = null;

    #[ORM\Column(nullable: true)]
    private ?int $degat = null;

    #[ORM\Column(nullable: true)]
    private ?int $vitesse = null;

    #[ORM\Column(nullable: true)]
    private ?int $portee = null; 

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Type $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDecription(): ?string
    {
        return $this->decription;
    }

    public function setDecription(string $decription): self
    {
        $this->decription = $decription;

        return $this;
    }

    public function getDegat(): ?int
    {
        return $this->degat;
    }

    public function setDegat(?int $degat): self
    {
        $this->degat = $degat;

        return $this;
    }
    
    public function getVitesse(): ?int
    {
        return $this->vitesse;
    }

    public function setVitesse(?int $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }
    
    public function getPortee(): ?int
    {
        return $this->Portee;
    }

    public function setPortee(?int $portee): self
    {
        $this->Portee = $portee;

        return $this;
    }


    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }
}