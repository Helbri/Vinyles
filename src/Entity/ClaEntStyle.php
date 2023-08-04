<?php

namespace App\Entity;

use App\Repository\ClaEntStyleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClaEntStyleRepository::class)]
class ClaEntStyle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PropStyle = null;

    #[ORM\ManyToMany(targetEntity: ClaEntArtiste::class, mappedBy: 'PropTestAvecClaEntStyle')]
    private Collection $PropTestAvecClaEntArtiste;

    public function __construct()
    {
        $this->PropTestAvecClaEntArtiste = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->PropStyle;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropStyle(): ?string
    {
        return $this->PropStyle;
    }

    public function setPropStyle(string $PropStyle): static
    {
        $this->PropStyle = $PropStyle;

        return $this;
    }

    /**
     * @return Collection<int, ClaEntArtiste>
     */
    public function getPropTestAvecClaEntArtiste(): Collection
    {
        return $this->PropTestAvecClaEntArtiste;
    }

    public function addPropTestAvecClaEntArtiste(ClaEntArtiste $propTestAvecClaEntArtiste): static
    {
        if (!$this->PropTestAvecClaEntArtiste->contains($propTestAvecClaEntArtiste)) {
            $this->PropTestAvecClaEntArtiste->add($propTestAvecClaEntArtiste);
            $propTestAvecClaEntArtiste->addPropTestAvecClaEntStyle($this);
        }

        return $this;
    }

    public function removePropTestAvecClaEntArtiste(ClaEntArtiste $propTestAvecClaEntArtiste): static
    {
        if ($this->PropTestAvecClaEntArtiste->removeElement($propTestAvecClaEntArtiste)) {
            $propTestAvecClaEntArtiste->removePropTestAvecClaEntStyle($this);
        }

        return $this;
    }
}
