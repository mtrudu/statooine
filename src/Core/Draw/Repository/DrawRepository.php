<?php

declare(strict_types=1);

namespace App\Core\Draw\Repository;

use App\Core\Draw\Entity\Draw;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class DrawRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $managerRegistry)
    {
        parent::__construct($managerRegistry, Draw::class);
    }
}