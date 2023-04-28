<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Ex1Q1Controller extends AbstractController
{
    #[Route('/ex1/q1', name: 'app_ex1_q1')]
    public function index(): Response
    {
        $date = date('Y-m-d H:i:s');
        return $this->render('ex1_q1/index.html.twig', [
            'controller_name' => 'Edouard',
            'date' => $date,
        ]);
    }
    #[Route('/ex1/q2', name: 'app_ex1_q2')]
    public function index2(): Response
    {
        $date = date('Y-m-d H:i:s');
        return $this->render('ex1_q1/formulaire.html.twig', [
        ]);
    }
}
