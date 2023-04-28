<?php

namespace App\Entity;

use App\Repository\EntiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntiteRepository::class)]
class Entite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $BUT = null;

    #[ORM\Column(length: 255)]
    private ?string $universite = null;

    #[ORM\Column(length: 20)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $intitule_but = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBUT(): ?string
    {
        return $this->BUT;
    }

    public function setBUT(string $BUT): self
    {
        $this->BUT = $BUT;

        return $this;
    }

    public function getUniversite(): ?string
    {
        return $this->universite;
    }

    public function setUniversite(string $universite): self
    {
        $this->universite = $universite;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getIntituleBut(): ?string
    {
        return $this->intitule_but;
    }

    public function setIntituleBut(string $intitule_but): self
    {
        $this->intitule_but = $intitule_but;

        return $this;
    }
}
