<?php

namespace Acme\PostBundle\Controller;

use Acme\PostBundle\Entity\Post;
use Acme\PostBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CRUDController extends Controller
{

    /**
     * Creates a new Post entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Post();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $user = $this->getUser();

            $entity->setAuthor($user);
            $entity->setTime(new \DateTime('now'));
            $entity->setText($form->getData()->getText());

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $repo = $em->getRepository('PostBundle:Post');
            $all = $repo->findAll();
            $event = array();

            foreach ($all as $mine) {
                if($mine->getAuthor() == $this->getUser()) {
                    $event[] = $mine;
                }
            }

            return $this->render('posts/myposts.html.twig', [
                'myposts' => $event,
            ]);
        }

        return $this->render('::/crud/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Post entity.
     *
     * @param Post $entity The entity
     *
     * @return \Symfony\Component\Form\FormInterface The form
     */
    private function createCreateForm(Post $entity)
    {
        $form = $this->createForm(PostType::class, $entity, array(
            'action' => $this->generateUrl('post_create'),
            'method' => 'POST',
        ));

        $form->add('submit', SubmitType::class, array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Post entity.
     *
     */
    public function newAction()
    {
        $entity = new Post();
        $form   = $this->createCreateForm($entity);

        return $this->render('::/crud/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
//
//    /**
//     * Finds and displays a Post entity.
//     *
//     */
//    public function showAction($slug)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('PostBundle:Post')
//            ->findOneBy(array('slug' => $slug));
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Post entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($entity->getId());
//
//        return $this->render('::/crud/show.html.twig', array(
//            'entity'      => $entity,
//            'delete_form' => $deleteForm->createView(),        ));
//    }

    /**
     * Displays a form to edit an existing Post entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PostBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }

        $this->enforceOwnerSecurity($entity);

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('::/crud/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Post entity.
     *
     * @param Post $entity The entity
     *
     * @return \Symfony\Component\Form\FormInterface The form
     */
    private function createEditForm(Post $entity)
    {
        $form = $this->createForm(PostType::class, $entity, array(
            'action' => $this->generateUrl('post_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));

        $form->add('submit', SubmitType::class, array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Post entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PostBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }

        $this->enforceOwnerSecurity($entity);

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('post_edit', array('id' => $id)));
        }

        return $this->render('::/crud/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Post entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PostBundle:Post')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Post entity.');
            }

            $this->enforceOwnerSecurity($entity);

            $em->remove($entity);
            $em->flush();
        }

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('PostBundle:Post');
        $all = $repo->findAll();
        $event = array();

        foreach ($all as $mine) {
            if($mine->getAuthor() == $this->getUser()) {
                $event[] = $mine;
            }
        }

        return $this->render('posts/myposts.html.twig', [
            'myposts' => $event,
        ]);
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array('label' => 'Delete'))
            ->getForm()
            ;
    }

    /**
     * @param Post $post
     */
    private function enforceOwnerSecurity(Post $post)
    {
        $user = $this->getUser();

        if ($user != $post->getAuthor()) {
            // if you're using 2.5 or higher
            // throw $this->createAccessDeniedException('You are not the owner!!!');
            throw new AccessDeniedException('You are not the owner!!!');
        }
    }
}
