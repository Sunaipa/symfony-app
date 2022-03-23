<?php

namespace App\Entity;

use App\Repository\DegreeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DegreeRepository::class)]
class Degree
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $label;

    #[ORM\Column(type: 'integer')]
    private $rncpLevel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getRncpLevel(): ?int
    {
        return $this->rncpLevel;
    }

    public function setRncpLevel(int $rncpLevel): self
    {
        $this->rncpLevel = $rncpLevel;

        return $this;
    }
}
