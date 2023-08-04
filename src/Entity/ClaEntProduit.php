<?php

namespace App\Entity;

use App\Repository\ClaEntProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClaEntProduitRepository::class)]
class ClaEntProduit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PropProduit = null;

    #[ORM\Column]
    private ?int $price = null; //id est utilisé dans le ClaEntProduitCrudController.php

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropProduit(): ?string
    {
        return $this->PropProduit;
    }

    public function setPropProduit(string $PropProduit): static
    {
        $this->PropProduit = $PropProduit;

        return $this;
    }
    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }
}
