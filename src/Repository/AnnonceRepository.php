<?php

namespace App\Repository;

use App\Entity\Annonce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Annonce|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annonce|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annonce[]    findAll()
 * @method Annonce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnonceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Annonce::class);
    }

    //Récuperer les 3 dernières annonces publiées
    public function findAllPublishedOrderedByNewest()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.datePublication', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult()
        ;
    }

    //Récuperer le nombre de page qui contiendra 4 annonces par page
    public function PaginatedAnnonce(int $page)
    {
        return $this->createQueryBuilder('p')
        ->orderBy('p.datePublication', 'DESC')
        ->setFirstResult(($page - 1) * 4)
        ->setMaxResults(4)
        ->getQuery()
        ->getResult();
    }

    //Récuperer le nombre d'annonces total
    public function countAnnonces()
    {
        return $this->createQueryBuilder("p")
        ->select("COUNT(p.id)")
        ->getQuery()
        ->getSingleScalarResult();
    }


    // /**
    //  * @return Annonce[] Returns an array of Annonce objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Annonce
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
