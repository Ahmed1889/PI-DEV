<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison_Planning
 *
 * @ORM\Table(name="livraison__planning")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\Livraison_PlanningRepository")
 */
class Livraison_Planning
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
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_livraison", type="datetime")
     */
    private $dateLivraison;

    /**
     * @ORM\ManyToOne(targetEntity="employee"),inversedBy="plannings"
     * @ORM\JoinColumn(name="employe",referencedColumnName="id",onDelete="CASCADE")
     */
    private $employe;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicule"),inversedBy="plannings"
     * @ORM\JoinColumn(name="vehicule",referencedColumnName="id",onDelete="CASCADE")
     */
    private $vehicule;



    /**
     * @ORM\OneToOne(targetEntity=Commande::class)
     */
    private $commande;
    /**
     * @return mixed
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @return mixed
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * @param mixed $commande
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;
    }



    /**
     * @param mixed $vehicule
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
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
     * Set statut
     *
     * @param boolean $statut
     *
     * @return Livraison_Planning
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return bool
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     *
     * @return Livraison_Planning
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * @return mixed
     */
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * @param mixed $employe
     */
    public function setEmploye($employe)
    {
        $this->employe = $employe;
    }

}

