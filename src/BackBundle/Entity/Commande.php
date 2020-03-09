<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

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
     * @return mixed
     */
    public function getIdBon()
    {
        return $this->id_bon;
    }

    /**
     * @param mixed $id_bon
     * @return Commande
     */
    public function setIdBon($id_bon)
    {
        $this->id_bon = $id_bon;
        return $this;
    }
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\BonReduction")
     * @ORM\JoinColumn(name="id_bon",referencedColumnName="id", onDelete="CASCADE", nullable=true )
     */
    private $id_bon;

    /**
     * @return int
     */
    public function getPrixT(): int
    {
        return $this->PrixT;
    }

    /**
     * @param int $PrixT
     */
    public function setPrixT(int $PrixT): void
    {
        $this->PrixT = $PrixT;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="latlng", type="string")
     */
    private $latlng;


    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string" , nullable=false)
     * @Assert\NotBlank
     */
    private $adresse;

    /**
     * @return int
     */
    public function getQte(): int
    {
        return $this->qte;
    }

    /**
     * @param int $qte
     */
    public function setQte(int $qte): void
    {
        $this->qte = $qte;
    }

    /**
     * @return string
     */
    public function getPaiment(): string
    {
        return $this->paiment;
    }

    /**
     * @param string $paiment
     */
    public function setPaiment(string $paiment): void
    {
        $this->paiment = $paiment;
    }

    /**
     * @return string
     */
    public function getEtatLivraion(): string
    {
        return $this->etatLivraion;
    }

    /**
     * @param string $etatLivraion
     */
    public function setEtatLivraion(string $etatLivraion): void
    {
        $this->etatLivraion = $etatLivraion;
    }

    /**
     * @return string
     */
    public function getLivraison(): string
    {
        return $this->livraison;
    }

    /**
     * @param string $livraison
     */
    public function setLivraison(string $livraison): void
    {
        $this->livraison = $livraison;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
    * @var int
    *
    * @ORM\Column(name="prixT", type="integer" , nullable=true)
    */
    private $PrixT;

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer" , nullable=true)
     */
    private $qte;

    /**
     * @var string
     *
     * @ORM\Column(name="paiment", type="string", nullable=true)
     */
    private $paiment;

    /**
     * @var string
     *
     * @ORM\Column(name="etatLivraison", type="string", options={"default": "non affecté"} )
     */
    private $etatLivraion="non affecté";

    /**
     * @var string
     *
     * @ORM\Column(name="livraison", type="string", nullable=true)
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
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Commande
     */
    public function setDate(\DateTime $date): Commande
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param mixed $id_u
     */
    public function setIdU($id_u)
    {
        $this->id_u = $id_u;
    }

    /**
     * Get idU
     *
     * @return int
     */
    public function getIdU()
    {
        return $this->id_u;
    }

    /**
     * @return string
     */
    public function getLatlng()
    {
        return $this->latlng;
    }

    /**
     * @param string $latlng
     */
    public function setLatlng($latlng)
    {
        $this->latlng = $latlng;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }


}

