<?php

namespace App\Repository;

use App\Entity\Associations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Associations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Associations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Associations[]    findAll()
 * @method Associations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssociationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Associations::class);
    }

    public function findAll(){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT a
            FROM App\Entity\Associations a
            ORDER BY a.name ASC'
        );
        return $query;
    }

    public function AssociationForAdmin($user){
        return $this->createQueryBuilder('association')
            ->andWhere('association.user = :user')
            ->setParameter('user', $user->getId())
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAssociationByUser($user)
    {
        return $this->createQueryBuilder('associations')
            ->andWhere(':user MEMBER OF associations.users')
            ->setParameter('user', $user->getId())
            ->getQuery()
            ->getResult()
        ;
    }


    public function filterAssociationByname($name){
        return $this->createQueryBuilder('association')
            ->andWhere('association.name LIKE :name')
            ->setParameter('name', '%'.$name.'%')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findLatestAssociationByUser($user){
        return $this->createQueryBuilder('association')
            ->andWhere(':user MEMBER OF association.users')
            ->setParameter('user', $user->getId())
            ->orderBy('association.id', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;

    }

       public function getAllAssociation()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

}


    // public function findAllAssoc($user){
    //     return $this->createQueryBuilder('association')
    //         ->andWhere('association.users = :user')
    //         ->setParameter('user', $user->getId())
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }

    // // find all users from associations 5
    // public function findAllUsers(Associations $assoc){
    //     return $this->createQueryBuilder('user')
    //         ->andWhere('user.associations = :assoc')
    //         ->setParameter('assoc', $assoc->getId())
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }
  
    // /**
    //  * @return Associations[] Returns an array of Associations objects
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

    public function findOneBySomeField($value): ?Associations
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

