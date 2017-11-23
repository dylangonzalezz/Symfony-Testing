<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login_form")
     * @Template
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

//        return $this->render('security/login.html.twig', array(
//            'last_username' => $lastUsername,
//            'error'         => $error,
//        ));

        return array(
            'last_username' => $lastUsername,
            'error'         => $error,
        );
    }
}