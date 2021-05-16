<?php

declare(strict_types=1);

namespace App\UI\Api\GraphQL\Draw;

class DrawViewModel
{
    private int $id;

    private string $date;

    private array $numbers = [];

    public function __construct(int $id, \DateTime $date, array $numbers)
    {
        $this->id = $id;
        $this->date = $date->format('Y-m-d');
        $this->numbers = $numbers;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getNumbers(): array
    {
        return $this->numbers;
    }
}
