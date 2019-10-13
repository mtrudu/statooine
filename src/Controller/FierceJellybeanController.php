<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FierceJellybeanController extends AbstractController
{
    /**
     * @Route("/fierce/jellybean", name="fierce_jellybean")
     */
    public function index()
    {
        return $this->render('fierce_jellybean/index.html.twig', [
            'controller_name' => 'FierceJellybeanController',
        ]);
    }
}
