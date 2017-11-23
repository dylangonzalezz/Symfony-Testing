<?php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($smthn, $count)
    {
//        return $this->render('AcmeTestBundle:Default:index.html.twig', array('name' => $smthn, 'number' => $count));

//        $data = array(
//        'count' => $count,
//        'firstName' => $smthn,
//        'ackbar' => 'It\'s a traaap'
//        );
//        $json = json_encode($data);
//        $response = new Response($json);
//        $response->headers->set('Content-Type', 'application/json');
//        return $response;


//        $templating = $this->container->get('templating');

//        $content = $templating->render(
//            'AcmeTestBundle:Default:Index.html.twig',
//            array('name' => $smthn)
//        );
//
//        return new Response($content);


//        $templating = $this->container->get('templating');
//
//        return $templating->renderResponse(
//            'AcmeTestBundle:Default:index.html.twig',
//            array('name' => $smthn,
//                'number' => $count)
//        );

        //$em = $this->container->get('doctrine')->getManager();
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('AcmeTestBundle:Event');

        return $this->render(
            'AcmeTestBundle:Default:index.html.twig',
            array('name' => $smthn,
                'number' => $count)
        );
    }
}
