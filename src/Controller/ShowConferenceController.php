<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Conference;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowConferenceController extends AbstractController
{
    #[Route('/show-conference/{id}', name: 'show_conference')]
    public function index(CommentRepository $commentRepository, Conference $conference): Response
    {
        $comments = $conference->getComments();

        return $this->render('show_conference/index.html.twig', [
            'conference' => $conference,
            'comments' => $comments,
        ]);
    }
}
