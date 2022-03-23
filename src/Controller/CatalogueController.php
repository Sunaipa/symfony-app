<?php

namespace App\Controller;

use App\Entity\Training;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(ManagerRegistry $manager): Response
    {

        $allTrainings = $manager->getRepository(Training::class)->findAll();

        return $this->render('catalogue/index.html.twig', [
            'allTrainings' => $allTrainings,
        ]);
    }
}
