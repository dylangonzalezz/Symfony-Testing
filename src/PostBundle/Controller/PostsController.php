<?php

namespace Acme\PostBundle\Controller;

use Acme\PostBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PostsController extends Controller
{

    /**
     * @Route("posts/b", name="allposts")
     */
    public function allPostsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('PostBundle:Post');

        $event = $repo->findAll();

        return $this->render('posts/allposts.html.twig', [
            'allposts' => $event,
        ]);
    }

    /**
     * @Route("posts/myposts", name="myposts")
     */
    public function myPostsAction(Request $request)
    {
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

    /**
     * @Route("posts/topposts", name="topposts")
     */
    public function topPostsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('PostBundle:Post');

        $all = $repo->findBy(
            array('text' => 'Burn'),
            array('id' => 'ASC')
        );

        return $this->render('posts/myposts.html.twig', [
            'myposts' => $all,
        ]);
    }

    public function likePostAction($id, $format)
    {
        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('PostBundle:Post')->find($id);

        if(!$event) {
            throw $this->createNotFoundException("This Event doesn't exist for id: ".$id);
        }

        if (!$event->hasLiked($this->getUser())) {
            $event->getLikes()->add($this->getUser());
        }

        $em->persist($event);
        $em->flush();

        return $this->createLikeResponse($event, $format);
    }

    public function removeLikePostAction($id, $format)
    {
        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('PostBundle:Post')->find($id);

        if(!$event) {
            throw $this->createNotFoundException("This Event doesn't exist for id: ".$id);
        }

        if ($event->hasLiked($this->getUser())) {
            $event->getLikes()->removeElement($this->getUser());
        }

        $em->persist($event);
        $em->flush();

        return $this->createLikeResponse($event, $format);
    }

    /**
     * @param Post $post
     * @param string $format
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function createLikeResponse(Post $post, $format)
    {
        if ($format == 'json') {
            $data = array(
                'liked' => $post->hasLiked($this->getUser())
            );

            $response = new JsonResponse($data);

            return $response;
        }

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('PostBundle:Post');

        $event = $repo->findAll();

        return $this->render('posts/allposts.html.twig', [
            'allposts' => $event,
        ]);
    }
}
