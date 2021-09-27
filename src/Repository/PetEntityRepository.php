<?php

namespace App\Repository;

use App\Entity\PetEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PetEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method PetEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method PetEntity[]    findAll()
 * @method PetEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PetEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PetEntity::class);
    }

    public function create()
    {
        $entityManager = $this->getEntityManager();
        $pet = new PetEntity();
        $pet->setName('Buddy');
        $pet->setTag('Dog');

        $entityManager->persist($pet);
        $entityManager->flush();

        return $pet;
    }

    public function list($limit)
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.name', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findById($id)
    {
        return $this->find($id);
    }
}
