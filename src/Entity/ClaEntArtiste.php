<?php

namespace App\Entity;

use App\Repository\ClaEntArtisteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClaEntArtisteRepository::class)]
class ClaEntArtiste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PropArtiste = null;

    #[ORM\ManyToMany(targetEntity: ClaEntStyle::class, inversedBy: 'PropTestAvecClaEntArtiste')]
    private Collection $PropTestAvecClaEntStyle;

    public function __construct()
    {
        $this->PropTestAvecClaEntStyle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropArtiste(): ?string
    {
        return $this->PropArtiste;
    }
    //Semble être vital pour la page

    public function setPropArtiste(string $PropArtiste): static
    {
        $this->PropArtiste = $PropArtiste;

        return $this;
    }

    /**
     * @return Collection<int, ClaEntStyle>
     */
    public function getPropTestAvecClaEntStyle(): Collection
    {
        return $this->PropTestAvecClaEntStyle;
    }

    public function addPropTestAvecClaEntStyle(ClaEntStyle $propTestAvecClaEntStyle): static
    {
        if (!$this->PropTestAvecClaEntStyle->contains($propTestAvecClaEntStyle)) {
            $this->PropTestAvecClaEntStyle->add($propTestAvecClaEntStyle);
        }

        return $this;
    }

    public function removePropTestAvecClaEntStyle(ClaEntStyle $propTestAvecClaEntStyle): static
    {
        $this->PropTestAvecClaEntStyle->removeElement($propTestAvecClaEntStyle);

        return $this;
    }
}
//Semble être vital