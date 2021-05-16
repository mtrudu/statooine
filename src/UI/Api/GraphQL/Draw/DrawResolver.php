<?php

declare(strict_types=1);

namespace App\UI\Api\GraphQL\Draw;

use App\Core\Draw\Repository\DrawRepository;
use App\UI\Api\GraphQL\Number\NumberResolver;

final class DrawResolver
{
    private DrawRepository $drawRepository;
    private NumberResolver $numberResolver;

    public function __construct(DrawRepository $drawRepository, NumberResolver $numberResolver)
    {
        $this->drawRepository = $drawRepository;
        $this->numberResolver = $numberResolver;
    }

    public function getDrawByDate(string $date): DrawViewModel
    {
        $draw = $this->drawRepository->findOneByDate(\DateTime::createFromFormat('Y-m-d', $date));

        $numbers = $this->numberResolver->getNumbers($draw);

        return new DrawViewModel($draw->getId(), $draw->getDate(), $numbers);
    }
}
