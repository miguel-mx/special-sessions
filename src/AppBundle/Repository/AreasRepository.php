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
                  ORDER BY l.schedule, l.start ASC"
            )
            ->setParameter('area', $area)
            ->getResult();
    }

    public function findAreaLecturesByDate($area, $date)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT l FROM AppBundle:Lecture l
                  JOIN l.area a
                  WHERE a.area = :area AND l.schedule = :date
                  ORDER BY l.schedule, l.start ASC"
            )
            ->setParameter('area', $area)
            ->setParameter('date', $date)
            ->getResult();
    }
}