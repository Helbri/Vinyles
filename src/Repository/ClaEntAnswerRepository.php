<?php

namespace App\Repository;

use App\Entity\ClaEntAnswer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClaEntAnswer>
 *
 * @method ClaEntAnswer|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClaEntAnswer|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClaEntAnswer[]    findAll()
 * @method ClaEntAnswer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClaEntAnswerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClaEntAnswer::class);
    }

//    /**
//     * @return ClaEntAnswer[] Returns an array of ClaEntAnswer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ClaEntAnswer
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
