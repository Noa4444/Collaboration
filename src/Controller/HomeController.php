<?php
namespace App\Controller;

use App\Entity\SuperHero;
use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    class HomeController extends AbstractController
    {

        #[Route("/", name: "accueil")]
        public function index(): Response{
        //     $superman = new SuperHero();
        //     $superman->setNom("Superman")->setForce(1);
        //     $batman = new SuperHero();
        //     $batman->setNom("Batman")->setForce(1);
        //     $aquaman = new SuperHero();
        //     $aquaman->setNom("Aquaman")->setForce(1);
        //     $flash = new SuperHero();
        //     $flash->setNom("Flash")->setForce(1);
        //     $dateCourante = date("d/m/y");
            
        //     $heros=array();
        //     array_push($heros,$superman,$batman,$aquaman,$flash);
        return $this->render("accueil.html");
        //     //return new Response("coucou");
        }

        // // #[Route("/truc", name: "truc")]
        // // public function truc(): Response{
        // //     $superman = new SuperHero();
        // //     $superman->setNom("Superman")->setForce(1);
        // //     return $this->json($superman);

        // }


    }

?>