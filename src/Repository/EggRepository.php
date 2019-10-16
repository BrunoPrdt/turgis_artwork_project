<?php

namespace App\Repository;

use App\Entity\Egg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Egg|null find($id, $lockMode = null, $lockVersion = null)
 * @method Egg|null findOneBy(array $criteria, array $orderBy = null)
 * @method Egg[]    findAll()
 * @method Egg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EggRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Egg::class);
    }

    // /**
    //  * @return Egg[] Returns an array of Egg objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Egg
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}