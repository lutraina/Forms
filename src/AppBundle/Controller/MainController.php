<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
		//ajout de commentaire
		//ajout de commentaire2
		//ajout de commentaire3
        return $this->render('main/homepage.html.twig');
    }
}