<?php

namespace App\Entity;

use App\Repository\DirectusFilesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DirectusFilesRepository::class)]
class DirectusFiles
{
    #[ORM\Id]
    #[ORM\Column]
    private ?string $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $storage = null;

    #[ORM\Column(length: 255, nullable: true)]
    public ?string $filename_disk= null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getStorage(): ?string
    {
        return $this->storage;
    }

    public function setStorage(string $storage): static
    {
        $this->storage = $storage;

        return $this;
    }

    public function getFilenameDisk(): string
    {
        return $this->filename_disk;
    }
}
