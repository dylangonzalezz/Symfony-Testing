<?php

use Knp\FriendlyContexts\Context\RawMinkContext;
use Doctrine\ORM\EntityManagerInterface;

class FeatureContext extends RawMinkContext
{
    /**
     * @Given i hello
     */
    public function iHello()
    {
        /** @var EntityManagerInterface $em */
        $em = $this->getEntityManager();
    }
}
