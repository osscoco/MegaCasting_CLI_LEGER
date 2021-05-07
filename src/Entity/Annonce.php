<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="Annonce", indexes={@ORM\Index(name="IDX_39E8AA79CBC7C740", columns={"IdMetier"}), @ORM\Index(name="IDX_39E8AA79D182868C", columns={"IdEmp"}), @ORM\Index(name="IDX_39E8AA798B3DE47C", columns={"IdPro"}), @ORM\Index(name="IDX_39E8AA79F27C70C2", columns={"IdContrat"}), @ORM\Index(name="IDX_39E8AA799BBAA342", columns={"IdVille"})})
 * @ORM\Entity(repositoryClass="App\Repository\AnnonceRepository")
 */
class Annonce
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
     * @ORM\Column(name="Nom", type="string", length=125, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Publication", type="date", nullable=false)
     */
    private $datePublication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="string", length=150, nullable=true)
     */
    private $description;

    /**
     * @var \Metier
     *
     * @ORM\ManyToOne(targetEntity="Metier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdMetier", referencedColumnName="Id")
     * })
     */
    private $idmetier;

    /**
     * @var \Employe
     *
     * @ORM\ManyToOne(targetEntity="Employe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdEmp", referencedColumnName="Id")
     * })
     */
    private $idemp;

    /**
     * @var \Professionnel
     *
     * @ORM\ManyToOne(targetEntity="Professionnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdPro", referencedColumnName="Id")
     * })
     */
    private $idpro;

    /**
     * @var \Contrat
     *
     * @ORM\ManyToOne(targetEntity="Contrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdContrat", referencedColumnName="Id")
     * })
     */
    private $idcontrat;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdVille", referencedColumnName="Id")
     * })
     */
    private $idville;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(\DateTimeInterface $datePublication): self
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdmetier(): ?Metier
    {
        return $this->idmetier;
    }

    public function setIdmetier(?Metier $idmetier): self
    {
        $this->idmetier = $idmetier;

        return $this;
    }

    public function getIdemp(): ?Employe
    {
        return $this->idemp;
    }

    public function setIdemp(?Employe $idemp): self
    {
        $this->idemp = $idemp;

        return $this;
    }

    public function getIdpro(): ?Professionnel
    {
        return $this->idpro;
    }

    public function setIdpro(?Professionnel $idpro): self
    {
        $this->idpro = $idpro;

        return $this;
    }

    public function getIdcontrat(): ?Contrat
    {
        return $this->idcontrat;
    }

    public function setIdcontrat(?Contrat $idcontrat): self
    {
        $this->idcontrat = $idcontrat;

        return $this;
    }

    public function getIdville(): ?Ville
    {
        return $this->idville;
    }

    public function setIdville(?Ville $idville): self
    {
        $this->idville = $idville;

        return $this;
    }


}
