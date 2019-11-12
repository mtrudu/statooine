<?php

declare(strict_types=1);

namespace App\Core\Number\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Core\Number\Repository\NumberRepository")
 */
class Number
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $value;

    /**
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isStar;

    /**
     * @ORM\OneToOne(targetEntity="App\Core\Draw\Entity\Draw", inversedBy="numbers")
     */
    private $draw;

    public function __construct($value, $position, $isStar, $draw)
    {
        $this->value = $value;
        $this->position = $position;
        $this->isStart = $isStar;
        $this->draw = $draw;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getPosition()
    {
        return $this->position;
    }
    
    public function isStar()
    {
        return $this->isStar;
    }
}