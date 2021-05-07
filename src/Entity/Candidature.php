<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidature
 *
 * @ORM\Table(name="Candidature", indexes={@ORM\Index(name="IDX_65A75C6F641D7AB4", columns={"IdAnnonce"}), @ORM\Index(name="IDX_65A75C6F7F033A73", columns={"IdStatut"}), @ORM\Index(name="IDX_65A75C6FE4FDC1E", columns={"IdArtiste"})})
 * @ORM\Entity(repositoryClass="App\Repository\CandidatureRepository")
 */
class Candidature
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Objet", type="string", length=255, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_Publication", type="string", length=255, nullable=false)
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Annonce
     *
     * @ORM\ManyToOne(targetEntity="Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdAnnonce", referencedColumnName="Id")
     * })
     */
    private $idannonce;

    /**
     * @var \Statut
     *
     * @ORM\ManyToOne(targetEntity="Statut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdStatut", referencedColumnName="Id")
     * })
     */
    private $idstatut;

    /**
     * @var \Artiste
     *
     * @ORM\ManyToOne(targetEntity="Artiste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdArtiste", referencedColumnName="Id")
     * })
     */
    private $idartiste;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getDatePublication(): ?string
    {
        return $this->datePublication;
    }

    public function setDatePublication(string $datePublication): self
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdannonce(): ?Annonce
    {
        return $this->idannonce;
    }

    public function setIdannonce(?Annonce $idannonce): self
    {
        $this->idannonce = $idannonce;

        return $this;
    }

    public function getIdstatut(): ?Statut
    {
        return $this->idstatut;
    }

    public function setIdstatut(?Statut $idstatut): self
    {
        $this->idstatut = $idstatut;

        return $this;
    }

    public function getIdartiste(): ?Artiste
    {
        return $this->idartiste;
    }

    public function setIdartiste(?Artiste $idartiste): self
    {
        $this->idartiste = $idartiste;

        return $this;
    }


}
