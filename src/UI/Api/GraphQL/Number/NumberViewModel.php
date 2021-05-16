<?php

declare(strict_types=1);

namespace App\UI\Api\GraphQL\Number;

class NumberViewModel
{
    private $value;

    private $position;

    private $isStar;

    public function __construct($value, $position, $isStar)
    {
        $this->value = $value;
        $this->position = $position;
        $this->isStar = $isStar;
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
