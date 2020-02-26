<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\PanierRepository")
 */
class Panier
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
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_T", type="integer")
     */
    private $prixT;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Produit")
     * @ORM\JoinColumn(name="id_p",referencedColumnName="id", onDelete="CASCADE")
     */
    private $id_p;


    /**
     * @var
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Commande")
     * @ORM\JoinColumn(name="id_c",referencedColumnName="id", onDelete="CASCADE")
     */
    private $id_c;

    /**
     * @return mixed
     */
    public function getIdC()
    {
        return $this->id_c;
    }

    /**
     * @param mixed $id_c
     * @return Panier
     */
    public function setIdC($id_c)
    {
        $this->id_c = $id_c;
        return $this;
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
     * @return mixed
     */
    public function getIdP()
    {
        return $this->id_p;
    }

    /**
     * @param mixed $id_p
     */
    public function setIdP($id_p)
    {
        $this->id_p = $id_p;
    }


    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Panier
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prixT
     *
     * @param integer $prixT
     *
     * @return Panier
     */
    public function setPrixT($prixT)
    {
        $this->prixT = $prixT;

        return $this;
    }

    /**
     * Get prixT
     *
     * @return int
     */
    public function getPrixT()
    {
        return $this->prixT;
    }
}

