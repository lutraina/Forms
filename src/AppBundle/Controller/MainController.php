<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
		//ajout de commentaire
		//ajout de commentaire2
        return $this->render('main/homepage.html.twig');
    }
}