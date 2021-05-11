<?php

declare(strict_types=1);

namespace App\Core\Draw\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Core\Draw\Repository\DrawRepository")
 */
class Draw
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="date", length=255)
     */
    private DateTime $date;

    /**
     * @ORM\OneToMany(targetEntity="App\Core\Number\Entity\Number", mappedBy="draw")
     */
    private Collection $numbers;

    public function __construct(DateTime $date)
    {
        $this->date = $date;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function getNumbers(): Collection
    {
        return $this->numbers;
    }

    public function setNumbers($numbers): void
    {
        $this->numbers = $numbers;
    }
}
