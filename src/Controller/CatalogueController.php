<?php

namespace App\Controller;

use App\Entity\Training;
use App\Repository\TrainingRepository;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue/', name: 'app_catalogue_search',methods: ['GET'])]
    public function search(Request $request, TrainingRepository $trainingRepository): Response
    {

        $dateString = $request->query->get('date');
        if($dateString=== null){
           $date = new DateTime();
        }else{

        $date = new DateTime($dateString);

        }
        $searchTerms = $request->query->get('search');
        $trainingResults = $trainingRepository->getTrainingBySearchTerm($searchTerms,$date);
        return $this->render('catalogue/index.html.twig', [
            'trainingResults'=>$trainingResults

        ]);
    }
}
