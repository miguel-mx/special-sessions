<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AreasRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT a FROM AppBundle:Areas a ORDER BY a.area ASC'
            )
            ->getResult();
    }

    public function findAllAreaLectures($area)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT l FROM AppBundle:Lecture l
                  JOIN l.area a
                  WHERE a.area = :area
                  ORDER BY l.title ASC"
            )
            ->setParameter('area', $area)
            ->getResult();
    }
}