<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\HistoriqueRepository")
 */
class Historique
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
     * @ORM\Column(name="Quantite", type="string", length=255)
     */
    private $quantite;
    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=255)
     */
    private $etat;

    /**
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @var float
     *
     * @ORM\Column(name="prixtotal", type="float")
     */
    private $prixtotal;

    /**
     * @return float
     */
    public function getPrixtotal()
    {
        return $this->prixtotal;
    }

    /**
     * @param float $prixtotal
     */
    public function setPrixtotal($prixtotal)
    {
        $this->prixtotal = $prixtotal;
    }

    /**
     * @return float
     */


    /**
     * @return mixed
     */
    public function getIdf()
    {
        return $this->idf;
    }

    /**
     * @param mixed $idf
     */
    public function setIdf($idf)
    {
        $this->idf = $idf;
    }


    /**
     * @return mixed
     */
    public function getIdp()
    {
        return $this->idp;
    }

    /**
     * @param mixed $idp
     */
    public function setIdp($idp)
    {
        $this->idp = $idp;
    }

    /**
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Fournisseur")
     * @ORM\JoinColumn(name="Fournisseur_id",referencedColumnName="id")
     */
    private $idf;
    /**
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Produit")
     * @ORM\JoinColumn(name="Produit_id",referencedColumnName="id")
     */
    private $idp;



    /**
     * @var string
     *
     * @ORM\Column(name="Date", type="date", length=255)
     */
    private $date;


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
     * @param string $quantite
     *
     * @return Historique
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Historique
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
}

