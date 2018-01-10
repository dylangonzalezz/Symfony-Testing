<?php

namespace Acme\PostBundle\Controller;

use Acme\PostBundle\Entity\Post;
use Acme\PostBundle\Entity\PostRepository;
use Acme\PostBundle\Services\Reporting\ReportManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends Controller
{
    /**
     * @Route("/posts/report/allposts.csv")
     */
    public function updatedEventsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reportManager = new ReportManager($em);

        $content = $reportManager->updatedEventsAction();

//        $events = $em->getRepository('PostBundle:Post')
//            ->getAllPosts();
//
//        $rows = array();
//        foreach ($events as $event) {
//            $data = array(
//                $event->getId(),
//                $event->getText(),
//                $event->getLikes(),
//                $event->getUserID()
//            );
//
//            $rows[] = implode(", ", $data);
//        }
//
//        $content = implode("\n", $rows);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');

        return $response;
    }
}