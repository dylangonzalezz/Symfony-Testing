<?php

namespace Acme\PostBundle\Services\Reporting;

use Doctrine\ORM\EntityManager;

class ReportManager
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function updatedEventsAction()
    {

        $events = $this->em->getRepository('PostBundle:Post')
            ->getAllPosts();

        $rows = array();
        foreach ($events as $event) {
            $data = array(
                $event->getId(),
                $wot = str_replace(PHP_EOL, '', $event->getText()),
                count($event->getLikes()),
                $event->getAuthor()->getUsername()
            );

            $rows[] = implode(", ", $data);
        }

        return implode("\n", $rows);
//        $response = new Response($content);
//        $response->headers->set('Content-Type', 'text/csv');
//
//        return $response;
    }
}