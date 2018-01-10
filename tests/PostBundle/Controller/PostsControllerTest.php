<?php

namespace tests\PostBundle\Controller;

use Acme\PostBundle\Controller\PostsController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostControllerTest extends WebTestCase
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * @Inject
     * @var PostsController
     */
    private $controller;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {

        $kernel = self::bootKernel();

        $this->em = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testAllPostsActionDates()
    {
        $controller = new PostsController();

        $repo = $this->em->getRepository('PostBundle:Post');

        $event = $repo->findAll();

        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $loginbutton = $crawler
            ->filter('a:contains("Login")')
            ->link()
            ;

        $crawler = $client->click($loginbutton);

        $loginform = $crawler->selectButton('login')->form(array(
            '_username' => 'dylan',
            '_password' => '1234'
        ));

        $crawler = $client->submit($loginform);

        $crawler = $client->request('GET', '/posts/b');

        foreach ($event as $post)
        {
            $this->assertContains(
                $post->getTime()->format('Y/m/d'),
                $client->getResponse()->getContent()
            );
        }
    }

    public function testAllPostsActionText()
    {
        $controller = new PostsController();

        $repo = $this->em->getRepository('PostBundle:Post');

        $event = $repo->findAll();

        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $loginbutton = $crawler
            ->filter('a:contains("Login")')
            ->link()
        ;

        $crawler = $client->click($loginbutton);

        $loginform = $crawler->selectButton('login')->form(array(
            '_username' => 'dylan',
            '_password' => '1234'
        ));

        $crawler = $client->submit($loginform);

        $crawler = $client->request('GET', '/posts/b');

        foreach ($event as $post)
        {
            $text = str_replace("'", "&#039;", $post->getText());

            $this->assertContains(
                $text,
                $client->getResponse()->getContent()
            );
        }
    }

    public function testMyPostsActionText()
    {
        $repo = $this->em->getRepository('PostBundle:Post');

        $all = $repo->findAll();

        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $loginbutton = $crawler
            ->filter('a:contains("Login")')
            ->link()
        ;
        $crawler = $client->click($loginbutton);

        $loginform = $crawler->selectButton('login')->form(array(
            '_username' => 'dylan',
            '_password' => '1234'
        ));

        $event = array();

        foreach ($all as $mine) {
            if($mine->getAuthor() == 'dylan') {
                $event[] = $mine;
            }
        }

        $loginform = $crawler->selectButton('login')->form(array(
            '_username' => 'dylan',
            '_password' => '1234'
        ));

        $crawler = $client->submit($loginform);
        $crawler = $client->request('GET', '/posts/myposts');
        foreach ($event as $post)
        {
            $text = str_replace("'", "&#039;", $post->getText());

            $this->assertContains(
                $text,
                $client->getResponse()->getContent()
            );
        }
    }
}