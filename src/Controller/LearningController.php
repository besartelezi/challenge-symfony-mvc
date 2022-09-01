<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Config\SecurityConfig;

class LearningController extends AbstractController
{


    #[Route('/')]
    public function showMyName() : Response
    {
        $usersName = "Random Citizen";

        return $this->render('homepage/homepage.html.twig', [
            'name' => $usersName
        ]);
    }

    #[Route('/change-my-name')]
    public function changeMyName() : Response
    {

        return $this->render('change-my-name/change-my-name.html.twig', [
        ]);
    }

    #[Route('/about-me')]
    public function aboutMe() : Response
    {
        return $this->render('about-me/about.me.html.twig', [
            'name' => 'Becode',
        ]);
    }

    #[Route('/learning', name: 'app_learning')]
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }

}
