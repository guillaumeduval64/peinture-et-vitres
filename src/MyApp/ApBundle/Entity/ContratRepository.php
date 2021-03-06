<?php

namespace MyApp\ApBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContratRepository extends EntityRepository
{

public function getAllProductionsFranchiseCount($user)
  {
    $qb = $this->createQueryBuilder('a')
                      ->select('COUNT(a.id)')
                      ->join('a.production','p')
                      ->join('p.client','cl')
                      ->where("cl.user LIKE :user ")
                      ->andwhere("p.statut LIKE :statut")
                      ->setParameter('statut', 'Terminé')    
                      ->setParameter('user', $user)    
                      ->orderBy('a.id', 'DESC');

        $qb = $this->whereCurrentYear($qb);

        return $qb->getQuery()
                  ->getResult();
  }

public function getAllProductionsFranchiseCountWeek($user)
  {
    $qb = $this->createQueryBuilder('a')
                      ->select('COUNT(a.id)')
                      ->join('a.production','p')
                      ->join('p.client','cl')
                      ->where("cl.user LIKE :user ")
                      ->andwhere("p.statut LIKE :statut")
                      ->setParameter('statut', 'Terminé')    
                      ->setParameter('user', $user)    
                      ->orderBy('a.id', 'DESC');

        $qb = $this->whereCurrentWeek($qb);

        return $qb->getQuery()
                  ->getResult();
  }

  public function getAllProductionsFranchiseCountMonth($user)
  {
    $qb = $this->createQueryBuilder('a')
                      ->select('COUNT(a.id)')
                      ->join('a.production','p')
                      ->join('p.client','cl')
                      ->where("cl.user LIKE :user ")
                      ->andwhere("p.statut LIKE :statut")
                      ->setParameter('statut', 'Terminé')    
                      ->setParameter('user', $user)    
                      ->orderBy('a.id', 'DESC');

        $qb = $this->whereCurrentMonth($qb);

        return $qb->getQuery()
                  ->getResult();
  }

public function getAllContratsFranchiseCount($user)
  {
    $qb = $this->createQueryBuilder('a')
                      ->select('COUNT(a.id)')
                      ->join('a.clientService','cs')
                      ->join('cs.client','cl')
                      ->where("cl.user LIKE :user ")
                      ->andwhere("a.contratEstimation LIKE :contrat")
                      ->setParameter('contrat', 'contrat')    
                      ->setParameter('user', $user)    
                      ->orderBy('a.id', 'DESC');

        $qb = $this->whereCurrentYear($qb);

        return $qb->getQuery()
                  ->getResult();
  }

public function getAllContratsFranchiseCountMonth($user)
  {
    $qb = $this->createQueryBuilder('a')
                      ->select('COUNT(a.id)')
                      ->join('a.clientService','cs')
                      ->join('cs.client','cl')
                      ->where("cl.user LIKE :user ")
                      ->andwhere("a.contratEstimation LIKE :contrat")
                      ->setParameter('contrat', 'contrat')    
                      ->setParameter('user', $user)    
                      ->orderBy('a.id', 'DESC');

        $qb = $this->whereCurrentMonth($qb);

        return $qb->getQuery()
                  ->getResult();
  }

public function getAllContratsFranchiseCountWeek($user)
  {
    $qb = $this->createQueryBuilder('a')
                      ->select('COUNT(a.id)')
                      ->join('a.clientService','cs')
                      ->join('cs.client','cl')
                      ->where("cl.user LIKE :user ")
                      ->andwhere("a.contratEstimation LIKE :contrat")
                      ->setParameter('contrat', 'contrat')    
                      ->setParameter('user', $user)     
                      ->orderBy('a.id', 'DESC');

        $qb = $this->whereCurrentWeek($qb);

        return $qb->getQuery()
                  ->getResult();
  }

public function getAllEstimationsFranchiseCount($user)
  {
    $qb = $this->createQueryBuilder('a')
                      ->select('COUNT(a.id)')
                      ->join('a.clientService','cs')
                      ->join('cs.client','cl')
                      ->where("cl.user LIKE :user ")
                      ->setParameter('user', $user)    
                      ->orderBy('a.id', 'DESC');

        $qb = $this->whereCurrentYear($qb);

        return $qb->getQuery()
                  ->getResult();
  }

public function getAllEstimationsFranchiseCountMonth($user)
  {
    $qb = $this->createQueryBuilder('a')
                      ->select('COUNT(a.id)')
                      ->join('a.clientService','cs')
                      ->join('cs.client','cl')
                      ->where("cl.user LIKE :user ")
                      ->setParameter('user', $user)    
                      ->orderBy('a.id', 'DESC');

        $qb = $this->whereCurrentMonth($qb);

        return $qb->getQuery()
                  ->getResult();
  }

public function getAllEstimationsFranchiseCountWeek($user)
  {
    $qb = $this->createQueryBuilder('a')
                      ->select('COUNT(a.id)')
                      ->join('a.clientService','cs')
                      ->join('cs.client','cl')
                      ->where("cl.user LIKE :user ")
                      ->setParameter('user', $user)    
                      ->orderBy('a.id', 'DESC');

        $qb = $this->whereCurrentWeek($qb);

        return $qb->getQuery()
                  ->getResult();
  }

public function whereCurrentYear(\Doctrine\ORM\QueryBuilder $qb)
{
  $qb->andWhere('a.created BETWEEN :debut AND :fin')
      ->setParameter('debut', new \Datetime(date('Y').'-01-01'))  
      ->setParameter('fin',   new \Datetime(date('Y').'-12-31')); 
 
    return $qb;
}

public function whereCurrentWeek(\Doctrine\ORM\QueryBuilder $qb)
{
  $qb->andWhere('a.created BETWEEN :debut AND :fin')
      ->setParameter('debut', new \Datetime(date('Y-m-d', strtotime("-7 days"))))
      ->setParameter('fin',   new \Datetime(date('Y').'-12-31'));
 
    return $qb;
}

public function whereCurrentMonth(\Doctrine\ORM\QueryBuilder $qb)
{
  $qb->andWhere('a.created BETWEEN :debut AND :fin')
      ->setParameter('debut', new \Datetime(date('Y-m-d', strtotime("-30 days")))) 
      ->setParameter('fin',   new \Datetime(date('Y').'-12-31')); 
 
    return $qb;
}
}



