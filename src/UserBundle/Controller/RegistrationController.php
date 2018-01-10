<?php

namespace Acme\UserBundle\Controller;

use Acme\UserBundle\Form\RegisterFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Acme\UserBundle\Entity\User;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_register")
     */
    public function registerAction(Request $request)
    {
//        $form = $this->createFormBuilder(null, array(
//            'data_class' => 'Acme\UserBundle\Entity\User',
//        ))
//            ->add('username', TextType::class)
//            ->add('email',EmailType::class)
//            ->add('plainPassword',RepeatedType::class, array(
//                'type' => PasswordType::class,
//                'invalid_message' => "The Password fields don't match",
//                'required' => true
//            ))
//            ->getForm();

        $user = new User();

        $form = $this->createForm(RegisterFormType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $user->setPassword($this->encodePassword($user, $user->getPlainPassword()));

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $url = $this->generateUrl('login');

            return $this->redirect($url);
        }

        return $this->render('registration/registration.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    private function encodePassword(User $user, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
            ->getEncoder($user);

        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }
}