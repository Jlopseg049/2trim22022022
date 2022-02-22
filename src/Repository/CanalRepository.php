<?php

namespace App\Repository;

use App\Entity\Canal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Canal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Canal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Canal[]    findAll()
 * @method Canal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CanalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Canal::class);
    }

    // /**
    //  * @return Canal[] Returns an array of Canal objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Canal
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findPrecioByAuthor(string $author)
    {
        $con = $this->getEntityManager()->getConnection();

        $query ='select canal.precio from canal
                                join "user" u on u.id = canal.author_id
                            where u.username = :user';

                        
        $resul = $con->prepare($query);
        $ª=  $resul->execute(array("user" => $author));
        return $ª->fetchAllAssociative();


    }
    public function findCanalByAuthor(string $author)
    {

        //En postgres sql, existe el comparador ILIKE que no discrimina mayusuclas de minuscula
        //Aunque sí los acentos.
        $con = $this->getEntityManager()->getConnection();
        $author= "'".$author."%'";
        $query ='select canal.id, canal.nombre, u.username, u.foto from canal
                    join "user" u on u.id = canal.author_id
                where u.username  ILIKE  '. $author;
        $resul = $con->prepare($query);
        $ª=  $resul->execute();
        return $ª->fetchAllAssociative();

    }

    public function findCanalByAll()
    {
        $con = $this->getEntityManager()->getConnection();
        
        $query ='select canal.id, canal.nombre, u.username, u.foto from canal
                    join "user" u on u.id = canal.author_id';
        $resul = $con->prepare($query);
        $ª=  $resul->execute();
        return $ª->fetchAllAssociative();

    }
}
