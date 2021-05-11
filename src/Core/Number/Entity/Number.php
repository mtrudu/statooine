<?php

declare(strict_types=1);

namespace App\Core\Number\Entity;

use App\Core\Draw\Entity\Draw;
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
    private int $id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $value;

    /**
     * @ORM\Column(type="integer")
     */
    private int $position;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $isStar;

    /**
     * @ORM\ManyToOne(targetEntity="App\Core\Draw\Entity\Draw", inversedBy="numbers")
     */
    private Draw $draw;

    public function __construct(int $value, int $position, bool $isStar, Draw $draw)
    {
        $this->value = $value;
        $this->position = $position;
        $this->isStar = $isStar;
        $this->draw = $draw;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function isStar(): bool
    {
        return $this->isStar;
    }

    public function getDraw(): Draw
    {
        return $this->draw;
    }
}
