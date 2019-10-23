<?php

namespace App\Repository;

use App\Entity\Drawing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Drawing|null find($id, $lockMode = null, $lockVersion = null)
 * @method Drawing|null findOneBy(array $criteria, array $orderBy = null)
 * @method Drawing[]    findAll()
 * @method Drawing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DrawingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Drawing::class);
    }

    // /**
    //  * @return Drawing[] Returns an array of Drawing objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Drawing
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
