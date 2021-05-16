<?php

declare(strict_types=1);

namespace App\UI\Api\GraphQL\Draw;

use App\UI\Api\GraphQL\Number\NumberResolver;
use Overblog\GraphQLBundle\Resolver\ResolverMap;

final class DrawResolverMap extends ResolverMap
{
    private NumberResolver $numberResolver;

    public function __construct(NumberResolver $numberResolver)
    {
        $this->numberResolver = $numberResolver;
    }
    protected function map()
    {
        return [
            'Draw' => [
                'numbers' => function ($value) {
                    return $this->numberResolver->getNumbersByDrawId($value->getId());
                }
            ]
        ];
    }

}
