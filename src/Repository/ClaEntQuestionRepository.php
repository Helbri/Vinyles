<?php

namespace App\Repository;

use App\Entity\ClaEntQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClaEntQuestion>
 *
 * @method ClaEntQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClaEntQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClaEntQuestion[]    findAll()
 * @method ClaEntQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClaEntQuestionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClaEntQuestion::class);
    }

//    /**
//     * @return ClaEntQuestion[] Returns an array of ClaEntQuestion objects
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

//    public function findOneBySomeField($value): ?ClaEntQuestion
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
