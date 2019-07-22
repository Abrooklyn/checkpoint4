<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Response;
use phpDocumentor\Reflection\Types\Object_;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index() :Response
    {
        return $this->render('contact.html.twig', [

        ]);
    }
}