<?php

namespace App\Repository;

use App\Entity\Vidget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Vidget|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vidget|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vidget[]    findAll()
 * @method Vidget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VidgetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vidget::class);
    }

    // /**
    //  * @return Vidget[] Returns an array of Vidget objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Vidget
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
