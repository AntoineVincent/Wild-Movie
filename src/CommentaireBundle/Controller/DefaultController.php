<?php

namespace CommentaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Film;
use Symfony\Component\HttpFoundation\Request;
use CommentaireBundle\Entity\Comment;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CommentaireBundle:Default:index.html.twig');
    }

    public function newcomAction(Request $request, $id)
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

    	$movie = $em->getRepository('FrontendBundle:Film')->findOneById($id);

        return $this->render('CommentaireBundle:Default:comment.html.twig',
        	array(
        		'movie' => $movie,
        ));
    }
    public function postcomAction(Request $request, $id)
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

    	$movie = $em->getRepository('FrontendBundle:Film')->findOneById($id);

    	$titre = $request->request->get('titre');
        $date = $request->request->get('date');
        $contenu = $request->request->get('contenu');

        $comment = new Comment();

        $comment->setDate($date);
        $comment->setTitre($titre);
        $comment->setContenu($contenu);
        $comment->setAuthor($user->getUsername());
        $comment->setIdfilm($id);

        $em->persist($comment);
        $em->flush();

        $request->getSession()
            ->getFlashBag()
            ->add('success', 'Commentaire Validé !')
            ;
            
        return $this->render('CommentaireBundle:Default:comment.html.twig',
        	array(
        		'movie' => $movie,
        ));
    }
}
