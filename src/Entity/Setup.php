<?php

namespace App\Entity;

use App\Repository\SetupRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SetupRepository::class)]
class Setup
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $BUT = null;

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
}
