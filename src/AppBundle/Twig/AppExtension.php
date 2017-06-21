<?php

namespace AppBundle\Twig;


class AppExtension extends \Twig_Extension
{
    protected $em;

    public function __construct($em)
    {
        $this->em = $em;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('scount', array($this, 'sessionCount')),
        );
    }


    public function sessionCount($area)
    {
        $repository = $this->em->getRepository('AppBundle:Lecture');

        $qb = $repository->createQueryBuilder('l')
        ->select('count(l.id)')
        ->where('l.area = :area')
        ->setParameter('area', $area);

        $count = $qb->getQuery()->getSingleScalarResult();

        return $count;
    }

    public function getName()
    {
        return 'sessions count';
    }

    // Now you can do $this->doctrine->getRepository('TennisconnectUserBundle:User')

}