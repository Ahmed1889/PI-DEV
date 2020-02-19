<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="id_u",referencedColumnName="id", onDelete="CASCADE")
     */
    private $id_u;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="prixT", type="integer")
     */
    private $PrixT;

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer")
     */
    private $qte;

    /**
     * @var string
     *
     * @ORM\Column(name="paiment", type="string")
     */
    private $paiment;

    /**
     * @var string
     *
     * @ORM\Column(name="etatLivraison", type="string", options={"default": "non affecté"})
     */
    private $etatLivraion ="non affecté";

    /**
     * @var string
     *
     * @ORM\Column(name="livraison", type="string")
     */
    private $livraison;

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
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getPrixT()
    {
        return $this->PrixT;
    }

    /**
     * @param int $PrixT
     */
    public function setPrixT($PrixT)
    {
        $this->PrixT = $PrixT;
    }

    /**
     * @return int
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param int $qte
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

    /**
     * @return string
     */
    public function getPaiment()
    {
        return $this->paiment;
    }

    /**
     * @param string $paiment
     */
    public function setPaiment($paiment)
    {
        $this->paiment = $paiment;
    }

    /**
     * @return string
     */
    public function getEtatLivraion()
    {
        return $this->etatLivraion;
    }

    /**
     * @param string $etatLivraion
     */
    public function setEtatLivraion($etatLivraion)
    {
        $this->etatLivraion = $etatLivraion;
    }

    /**
     * @return string
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * @param string $livraison
     */
    public function setLivraison($livraison)
    {
        $this->livraison = $livraison;
    }



    /**
     * Set idU
     *
     * @param \AppBundle\Entity\User $idU
     *
     * @return Commande
     */
    public function setId_u(\AppBundle\Entity\User $idU = null)
    {
        $this->id_u = $idU;

        return $this;
    }

    /**
     * Get idU
     *
     * @return \AppBundle\Entity\User
     */
    public function getId_u()
    {
        return $this->id_u;
    }
}
