<?php

declare(strict_types=1);

namespace App\UI\Api\GraphQL\Number;

use App\Core\Draw\Entity\Draw;
use App\Core\Number\Entity\Number;
use App\Core\Number\Repository\NumberRepository;

final class NumberResolver
{
    private NumberRepository $numberRepository;

    public function __construct(NumberRepository $numberRepository)
    {
        $this->numberRepository = $numberRepository;
    }

    public function getNumbers(Draw $draw): array
    {
        $numbers = $this->numberRepository->findByDrawId($draw->getId());

        return $this->mapNumberToNumberViewModel($numbers);
    }

    public function getNumbersByDrawId(int $drawId)
    {
        $numbers = $this->numberRepository->findByDrawId($drawId);

        return $this->mapNumberToNumberViewModel($numbers);
    }

    private function mapNumberToNumberViewModel($numbers): array
    {
        return array_map(
            function (Number $number): NumberViewModel {
                return new NumberViewModel($number->getValue(), $number->getPosition(), $number->isStar());
            }, $numbers
        );
    }
}
