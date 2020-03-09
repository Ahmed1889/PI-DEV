<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commandef
 *
 * @ORM\Table(name="commandef")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\CommandefRepository")
 */
class Commandef
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */

    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantite", type="integer")
     * @Assert\NotBlank
     * @Assert\Expression("value > 1")
     */
    private $quantite;
    /**
     * @var int
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     *
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="Prixtotal", type="integer")
     *
     */
    private $prixtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     *
     */
    private $etat;

    /**
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param int $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Fournisseur")
     * @ORM\JoinColumn(name="Fournisseur_id",referencedColumnName="id")
     * @Assert\NotBlank
     */
    private $idcf;
    /**
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Produit")
     * @ORM\JoinColumn(name="Produit_id",referencedColumnName="id")
     * @Assert\NotBlank
     *
     */
    private $idcp;


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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Commandef
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


    public function setPrixtotal($prixtotal)
    {
        $this->prixtotal = $prixtotal;

        return $this;
    }


    public function getIdcf()
    {
        return $this->idcf;
    }


    public function setIdcf($idcf)
    {
        $this->idcf = $idcf;
    }


    public function getIdcp()
    {
        return $this->idcp;
    }


    public function setIdcp($idcp)
    {
        $this->idcp = $idcp;
    }


    public function getPrixtotal()
    {
        return $this->prixtotal;
    }

    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }


    public function getEtat()
    {
        return $this->etat;
    }
}

