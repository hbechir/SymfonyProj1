<?php

namespace App\Controller;

use App\Repository\BorrowingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
    #[Route('/most-popular-book', name: 'most_popular_book')]
    public function index(
        BorrowingRepository $borrowingRepository
    ): Response {

        // $books = $borrowingRepository->findMostPopularBooks();
        // $books = $borrowingRepository->findMostPopularBooksQb();
        $books = $borrowingRepository->findMostPopularBooksDql();


        return $this->render('report/index.html.twig', [
            'books' => $books,
        ]);
    }
}
