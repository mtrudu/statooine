<?php

declare(strict_types=1);

namespace App\UI\Api\GraphQL\Draw;

use App\Core\Draw\Repository\DrawRepository;

final class DrawResolver
{
    private $drawRepository;

    public function __construct(DrawRepository $drawRepository)
    {
        $this->drawRepository = $drawRepository;
    }

    public function getDrawByDate(string $date)
    {
        $draw = $this->drawRepository->findOneByDate(\DateTime::createFromFormat('Y-m-d', $date));

        //var_dump($draw->getId());
        //exit('ici');
        return new DrawViewModel($draw->getId(), $draw->getDate());
    }
}
