<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagesRepository::class)]
class Images
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BLOB)]
    private $img = null;

    #[ORM\ManyToOne(inversedBy: 'images')]
    private ?Annonce $annonceID = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img): static
    {
        $this->img = $img;

        return $this;
    }

    public function getAnnonceID(): ?Annonce
    {
        return $this->annonceID;
    }

    public function setAnnonceID(?Annonce $annonceID): static
    {
        $this->annonceID = $annonceID;

        return $this;
    }
}
