<?php

namespace App\Repository;

use App\Entity\Leerlingnummer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Leerlingnummer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Leerlingnummer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Leerlingnummer[]    findAll()
 * @method Leerlingnummer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LeerlingnummerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Leerlingnummer::class);
    }

    // /**
    //  * @return Leerlingnummer[] Returns an array of Leerlingnummer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Leerlingnummer
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
