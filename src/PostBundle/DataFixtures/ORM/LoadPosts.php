<?php

namespace Acme\PostBundle\DataFixtures\ORM;

#Old:
#use Doctrine\Common\DataFixtures\FixtureInterface;
#New:
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\PostBundle\Entity\Post;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadPosts extends Fixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = $manager->getRepository('UserBundle:User')
            ->findOneByUsernameOrEmail('dylan');

        $postone = new Post();
        $postone->setText('For nevermore');
        $postone->setTime(new \DateTime('now'));
        $manager->persist($postone);

        $posttwo = new Post();
        $posttwo->setText('Burn');
        $posttwo->setTime(new \DateTime('now'));
        $manager->persist($posttwo);

        $postone->setAuthor($user);
        $posttwo->setAuthor($user);

        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getOrder()
    {
        return 10;
    }

}