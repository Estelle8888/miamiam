<?php

namespace App\Controller;

use App\Entity\Recette;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


//La classe "HomeController" hérite de la classe "AbstractController"
class HomeController extends AbstractController{

/**
 * @Route ("/" , name="home")
 */

 

    //la fonction index va nous permettre d'afficher la page d'acceuil
    public function index(EntityManagerInterface $em){
        $recette= new Recette();
        $recette
            ->setTitle('Doukouna')
            ->setDescription('description')
            ->setPreparation('In his tractibus navigerum nusquam visitur flumen sed in locis plurimis aquae suapte natura calentes emergunt ad usus aptae multiplicium medelarum. verum has quoque regiones pari sorte Pompeius Iudaeis domitis et Hierosolymis captis in provinciae speciem delata iuris dictione formavit.')
            ->setTime('120 minutes')
            ->setPersonne(4)
            ->setCreatedAt(new DateTime());

        $recette2= new Recette();
        $recette2
            ->setTitle('Doukouna')
            ->setDescription('description')
            ->setPreparation('In his tractibus navigerum nusquam visitur flumen sed in locis plurimis aquae suapte natura calentes emergunt ad usus aptae multiplicium medelarum. verum has quoque regiones pari sorte Pompeius Iudaeis domitis et Hierosolymis captis in provinciae speciem delata iuris dictione formavit.')
            ->setTime('120 minutes')
            ->setPersonne(4)
            ->setCreatedAt(new DateTime());

            //persist : l'intention de... insérer dans la base de données
            $em->persist($recette2);
            $em->flush();
        return $this->render('/pages/home.html.twig');
    }
    
}

?>