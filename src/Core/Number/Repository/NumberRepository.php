<?php

declare(strict_types=1);

namespace App\Core\Number\Repository;

use App\Core\Number\Entity\Number;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class NumberRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $managerRegistry)
    {
        parent::__construct($managerRegistry, Number::class);
    }
}