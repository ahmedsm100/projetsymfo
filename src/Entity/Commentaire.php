<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cmnt = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?user $UserID = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Annonce $AnnonceID = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCmnt(): ?string
    {
        return $this->cmnt;
    }

    public function setCmnt(?string $cmnt): static
    {
        $this->cmnt = $cmnt;

        return $this;
    }

    public function getUserID(): ?user
    {
        return $this->UserID;
    }

    public function setUserID(?user $UserID): static
    {
        $this->UserID = $UserID;

        return $this;
    }

    public function getAnnonceID(): ?Annonce
    {
        return $this->AnnonceID;
    }

    public function setAnnonceID(?Annonce $AnnonceID): static
    {
        $this->AnnonceID = $AnnonceID;

        return $this;
    }
}
