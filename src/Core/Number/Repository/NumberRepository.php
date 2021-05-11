<?php

declare(strict_types=1);

namespace App\Core\Number\Repository;

use App\Core\Number\Entity\Number;
use Doctrine\ORM\EntityManager;

class NumberRepository
{
    private EntityManager $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function findByDrawId(int $id): array
    {
        return $this->getRepository()
            ->where('n.draw = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }

    private function getRepository()
    {
        return $this->em->createQueryBuilder()
            ->select('n')
            ->from(Number::class, 'n');
    }
}
