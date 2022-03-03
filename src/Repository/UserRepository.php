<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }


    public function findByEmailOrUsername(string $emailOrUsername)
{
    return $this->createQueryBuilder('u')
        ->where('u.email = :emailOrUsername')
        ->orWhere('u.username = :emailOrUsername')
        ->setParameter('emailOrUsername', $emailOrUsername)
        ->getQuery()
        ->getOneOrNullResult();
}
    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    
    public function findOneById($id): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.id = :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
        
    public function checkUser(string $value)
    {

        $email = $this->createQueryBuilder('u')
        ->where('u.username = :user')
        ->setParameter('user', $value)
        ->getQuery()
        ->getOneOrNullResult();
        if($email != null){
            return 'true';
        }else{
           return 'false';
        }
    }

    public function checkEmail(string $value)
    {

        $email = $this->createQueryBuilder('u')
        ->where('u.email = :email')
        ->setParameter('email', $value)
        ->getQuery()
        ->getOneOrNullResult();
        if($email != null){
            return 'true';
        }else{
           return 'false';
        }
    }
}
