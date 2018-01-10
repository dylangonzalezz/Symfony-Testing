<?php

namespace Acme\TestBundle\Controller;

use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * DefaultController constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $this->logger->debug('hello world');

        return $this->render('default/index.html.twig', [
            'user' => $this->getUser(),
            'wot' => 'Welcome to Dylonski Example Page'
        ]);
    }

    /**
     * @Route("/wot", name="wot")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexActionTwo()
    {
        $this->logger->debug('hello world');

        return $this->render('default/index.html.twig', [
            'user' => $this->getUser(),
            'wot' => 'This is a page where u can post any text you want.'
            ]);
    }
}