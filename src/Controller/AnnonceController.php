<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Annonce;
use App\Entity\Ville;
use App\Entity\Contrat;
use App\Repository\AnnonceRepository;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce", name="annonce")
     */
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        //Repository Annonce
        $repositoryAnnonce = $em->getRepository(Annonce::class);

        $annonces = $repositoryAnnonce->PaginatedAnnonce((int)$request->query->get("page", 1));
        $totalAnnonces = $repositoryAnnonce->countAnnonces();

        //Repository Ville
        $repositoryVille = $em->getRepository(Ville::class);
        $villes = $repositoryVille->findAll();

        //Repository Contrat
        $repositoryContrat = $em->getRepository(Contrat::class);
        $contrats = $repositoryContrat->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces,
            'totalAnnonces' => $totalAnnonces,
            'villes' => $villes,
            'contrats' => $contrats
        ]);
    }

    /**
     * @Route("/annonce/{id}", name="annonce_show")
     */
    public function show(EntityManagerInterface $em, $id): Response
    {
        //Repository Annonce
        $repositoryAnnonce = $em->getRepository(Annonce::class);
        $annonce = $repositoryAnnonce->find($id);

        return $this->render('annonce/show.html.twig', [
            'annonce' => $annonce
        ]);
    }

    /**
     * @Route("/annonce/metier/{id}", name="annonce_search_metier")
     */
    public function annonce_metier(EntityManagerInterface $em, Request $request, $id): Response
    {
        //Repository Annonce
        $repositoryAnnonce = $em->getRepository(Annonce::class);

        $annonce = $repositoryAnnonce->findAllPublishedOrderedByMetier((int)$request->query->get("id", $id));

        return $this->render('annonce/ByMetier.html.twig', [
            'annonce' => $annonce
        ]);
    }
}
