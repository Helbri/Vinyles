<?php

namespace App\Entity;

use App\Repository\ClaEntQuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClaEntQuestionRepository::class)]
class ClaEntQuestion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PropQuest = null;

    #[ORM\OneToMany(mappedBy: 'PropAnsIsQuestion', targetEntity: ClaEntAnswer::class)]
    private Collection $chpClaEntQAnswers;

    public function __construct()
    {
        $this->chpClaEntQAnswers = new ArrayCollection();
    }
    /* Fonction qui permet de transformer la question en string.
Ceci afin de l'inclure ensuite dans le formulaire de la classe ClaEntAnswer*/
    public function __toString()
    {
        return $this->PropQuest;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropQuest(): ?string
    {
        return $this->PropQuest;
    }

    public function setPropQuest(string $PropQuest): static
    {
        $this->PropQuest = $PropQuest;

        return $this;
    }

    /**
     * @return Collection<int, ClaEntAnswer>
     */
    public function getChpClaEntQAnswers(): Collection
    {
        return $this->chpClaEntQAnswers;
    }

    public function addChpClaEntQAnswer(ClaEntAnswer $chpClaEntQAnswer): static
    {
        if (!$this->chpClaEntQAnswers->contains($chpClaEntQAnswer)) {
            $this->chpClaEntQAnswers->add($chpClaEntQAnswer);
            $chpClaEntQAnswer->setPropAnsIsQuestion($this);
        }

        return $this;
    }

    public function removeChpClaEntQAnswer(ClaEntAnswer $chpClaEntQAnswer): static
    {
        if ($this->chpClaEntQAnswers->removeElement($chpClaEntQAnswer)) {
            // set the owning side to null (unless already changed)
            if ($chpClaEntQAnswer->getPropAnsIsQuestion() === $this) {
                $chpClaEntQAnswer->setPropAnsIsQuestion(null);
            }
        }

        return $this;
    }
}
