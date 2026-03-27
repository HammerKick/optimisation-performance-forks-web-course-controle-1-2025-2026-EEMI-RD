<?php

namespace App\Entity;

use App\Repository\ModelesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModelesRepository::class)]
class Modeles
{
    #[ORM\Id]
    #[ORM\Column]
    private ?string $id = null;

    public function getId(): ?string
    {
        return $this->id;
    }

 
}
