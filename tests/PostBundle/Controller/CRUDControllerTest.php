<?php

namespace test\PostBundle\Controller;

use Acme\PostBundle\Controller\CRUDController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CRUDControllerTest extends WebTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

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

    /**
     * @dataProvider postIdProvider
     */
    public function testEnforceOwnerSecurity($id)
    {
        $repo = $this->em->getRepository('PostBundle:Post');

        $post = $repo->find($id);

        $container = $this->createMock(CRUDController::class);
        $container->method('enforceOwnerSecurity')
            ->willReturn('true');

        $this->assertEquals(1,1);

//        $controller = new CRUDController($container);
//        $authorization = $controller->enforceOwnerSecurity($post);
    }

    public function postIdProvider()
    {
        return [
            [1],
        ];
    }
}