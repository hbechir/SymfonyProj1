<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BookRepository;


class IndexController extends AbstractController
{
    private array $messages = [
        "Ahmed", "Amin", "Faouzi"
    ];
    public function index(): Response
    {
        // return new Response("Hello group MDW31");
        return new Response("Hello " . implode(', ', $this->messages));
    }
    public function showOne($id): Response
    {
        return new Response($this->messages[$id]);
    }

    public function hello($name): Response
    {
        return $this->render('index/index.html.twig', [
            'name' => $name,
        ]);
    }
    public function borrowing(BookRepository $bookRepository): Response
    {
        return $this->render('book/index.html.twig', [
            'books' => $bookRepository->findAll(),
        ]);
    }

}
