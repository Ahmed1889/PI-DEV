<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="libelle_c", type="string", length=255)
     */
    private $libelleC;
    /**
     * @var
     * @ORM\OneToMany(targetEntity="Produit",mappedBy="categorie")
     */
    private $produit;

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
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
     * Set libelleC
     *
     * @param string $libelleC
     *
     * @return Categorie
     */
    public function setLibelleC($libelleC)
    {
        $this->libelleC = $libelleC;

        return $this;
    }

    /**
     * Get libelleC
     *
     * @return string
     */
    public function getLibelleC()
    {
        return $this->libelleC;
    }
}

