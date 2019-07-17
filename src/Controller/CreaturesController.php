<?php
/**
 * Created by PhpStorm.
 * User: angie
 * Date: 2019-07-16
 * Time: 11:49
 */

namespace App\Controller;

use App\Repository\CreatureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class CreaturesController extends AbstractController
{
    /**
     * @Route("/creatures", name="creatures")
     */
    public function index(CreatureRepository $creaturesRepository): Response
    {

        return $this->render('Creatures.html.twig', [
            'creatures' => $creaturesRepository->findAll()
        ]);
    }
}
