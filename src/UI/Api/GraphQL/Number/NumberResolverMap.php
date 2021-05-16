<?php

declare(strict_types=1);

namespace App\UI\Api\GraphQL\Number;

use Overblog\GraphQLBundle\Resolver\ResolverMap;

final class NumberResolverMap extends ResolverMap
{
    protected function map(): array
    {
        return [
            'Number' => [
                'position' => function ($value) {
                    return $value->getPosition();
                },
                'value' => function ($value) {
                    return $value->getValue();
                },
            ]
        ];
    }
}
