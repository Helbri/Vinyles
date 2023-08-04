<?php

namespace App\Entity;

use App\Repository\ClaEntAnswerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClaEntAnswerRepository::class)]
class ClaEntAnswer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PropAnswer = null;

    #[ORM\ManyToOne(inversedBy: 'chpClaEntQAnswers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ClaEntQuestion $PropAnsIsQuestion = null;

    public function __toString()
    {
        return $this->PropAnswer;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropAnswer(): ?string
    {
        return $this->PropAnswer;
    }

    public function setPropAnswer(string $PropAnswer): static
    {
        $this->PropAnswer = $PropAnswer;

        return $this;
    }

    public function getPropAnsIsQuestion(): ?ClaEntQuestion
    {
        return $this->PropAnsIsQuestion;
    }

    public function setPropAnsIsQuestion(?ClaEntQuestion $PropAnsIsQuestion): static
    {
        $this->PropAnsIsQuestion = $PropAnsIsQuestion;

        return $this;
    }
}
