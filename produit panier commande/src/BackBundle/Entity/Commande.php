<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

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
     * @ORM\Column(name="etatLivraison", type="string", options={"default": "Non Affecte"} , nullable=true)
     */
    private $etatLivraion ;

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


}

