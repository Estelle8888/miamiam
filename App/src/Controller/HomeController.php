<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


//La classe "HomeController" hérite de la classe "AbstractController"
class HomeController extends AbstractController{

/**
 * @Route ("/" , name="home")
 */

    //la fonction index va nous permettre d'afficher la page d'acceuil
    public function index(){
        return $this->render('/pages/home.html.twig');
    }
}

?>