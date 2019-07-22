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

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home.html.twig', [

        ]);
    }
}