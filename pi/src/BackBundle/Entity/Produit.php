<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_p", type="string", length=255)
     */
    private $libelleP;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_achat", type="float")
     */
    private $prixAchat;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_vente", type="float")
     */
    private $prixVente;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=500)
     * @Assert\File(maxSize="500k", mimeTypes={"image/jpeg", "image/jpg", "image/png", "image/GIF"})
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Categorie")
     * @ORM\JoinColumn(name="id_categorie",referencedColumnName="id", onDelete="CASCADE")
     */
    private $categorie;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime" , nullable=true)
     */
    private $dateCreation;

    /**
     * Produit constructor.
     */
    public function __construct()
    {
        $dateCreation= new Assert\DateTime();
    }

    /**
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param \DateTime $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }



    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $etudiant
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }


    /**
     * @var
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Fournisseur")
     * @ORM\JoinColumn(name="id_fournisseur",referencedColumnName="id", onDelete="CASCADE")
     */
    private $fournisseur;

    /**
     * @return mixed
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    /**
     * @param mixed $fournisseur
     */
    public function setFournisseur($fournisseur)
    {
        $this->fournisseur = $fournisseur;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrVues", type="integer")
     */
    private $nbrVues;

    /**
     * @return int
     */
    public function getNbrVues()
    {
        return $this->nbrVues;
    }

    /**
     * @param int $nbrVues
     */
    public function setNbrVues($nbrVues)
    {
        $this->nbrVues = $nbrVues;
    }




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelleP
     *
     * @param string $libelleP
     *
     * @return Produit
     */
    public function setLibelleP($libelleP)
    {
        $this->libelleP = $libelleP;

        return $this;
    }

    /**
     * Get libelleP
     *
     * @return string
     */
    public function getLibelleP()
    {
        return $this->libelleP;
    }

    /**
     * Set prixAchat
     *
     * @param float $prixAchat
     *
     * @return Produit
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    /**
     * Get prixAchat
     *
     * @return float
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * Set prixVente
     *
     * @param float $prixVente
     *
     * @return Produit
     */
    public function setPrixVente($prixVente)
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    /**
     * Get prixVente
     *
     * @return float
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Produit
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

