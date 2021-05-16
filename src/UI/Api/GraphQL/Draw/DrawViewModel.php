<?php

declare(strict_types=1);

namespace App\UI\Api\GraphQL\Draw;

class DrawViewModel
{
    private $id;

    private $date;

    public function __construct($id, $date)
    {
        $this->id = $id;
        $this->date = $date->format('Y-m-d');
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }
}
