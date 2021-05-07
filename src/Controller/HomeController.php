<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Metier;
use App\Entity\Ville;
use App\Entity\Contrat;
use App\Entity\Annonce;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $repositoryMetier = $em->getRepository(Metier::class);
        $metiers = $repositoryMetier->findAll();

        $repositoryVille = $em->getRepository(Ville::class);
        $villes = $repositoryVille->findAll();

        $repositoryContrat = $em->getRepository(Contrat::class);
        $contrats = $repositoryContrat->findAll();

        $repositoryAnnonce = $em->getRepository(Annonce::class);
        $annonces = $repositoryAnnonce->findAllPublishedOrderedByNewest();
        
        
        return $this->render('home/index.html.twig', [
            'metiers' => $metiers,
            'villes' => $villes,
            'contrats' => $contrats,
            'annonces' => $annonces,
        ]);
    }
}
