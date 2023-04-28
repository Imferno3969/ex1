<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Ex1Q2Controller extends AbstractController
{
    #[Route('/ex1/q3', name: 'app_ex1_q3')]
    public function index(): Response
    {
        
        return $this->render('ex1_q2/index2.html.twig', [
            'Prenom' => $_POST ['Prenom'],
            'Nom' => $_POST ['Nom'],
            'Age' => $_POST ['Age'],
            'tableau' => $_POST,
        ]);
        
    }

    
}

