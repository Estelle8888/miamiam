<?php

namespace App\Controller;

use App\Entity\Recette;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecetteController extends AbstractController
{   
    /**
    *@Route("/recette" , name="recette.index")
    */

    public function index(){
        return $this->render("recettes/index.html.twig");
    }

}

?>