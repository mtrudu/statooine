<?php

declare(strict_types=1);

namespace App\Core\Draw\Repository;

use App\Core\Draw\Entity\Draw;
use Doctrine\ORM\EntityManager;

class DrawRepository
{
    private $em;

    public function __construct(EntityManager $em)
    {
       $this->em = $em;
    }

    public function findOneByDate(\DateTime $dateTime)
    {
        return $this->getRepository()
            ->where('d.date = :date')
            ->setParameter('date', $dateTime->format('Y-m-d'))
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    private function getRepository()
    {
        return $this->em->createQueryBuilder()
            ->select('d')
            ->from(Draw::class, 'd');
    }
}