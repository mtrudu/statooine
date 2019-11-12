<?php

declare(strict_types=1);

namespace App\Core\Draw\Entity;

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
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="App\Core\Number\Entity\Number", mappedBy="draw")
     */
    private $numbers;

    public function __construct($date, ...$numbers)
    {
        $this->date = $date;
        $this->numbers = $numbers;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getNumbers()
    {
        return $this->numbers;
    }
}