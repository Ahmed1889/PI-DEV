<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Mgilet\NotificationBundle\NotifiableInterface;

/**
 * Depot
 *
 * @ORM\Table(name="depot")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\DepotRepository")
 * @UniqueEntity(fields={"nom"}, message="Depot deja exist ..!")
 * @Notifiable(name="depot")
 */
class Depot implements NotifiableInterface
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse", type="string", length=255)
     */
    private $addresse;

    /**
     * @var float
     *
     * @ORM\Column(name="capacite", type="float")
     * @Assert\Type(type="numeric", message="saisir un nembre !")
     */
    private $capacite;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponibilite", type="boolean")
     */
    private $disponibilite;
    /**
     * @ORM\ManyToMany(targetEntity="Representant", inversedBy="depots")
     * @ORM\JoinColumn(name="representant_id", referencedColumnName="id")
     */
    private $representant;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Depot
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set addresse
     *
     * @param string $addresse
     *
     * @return Depot
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;

        return $this;
    }

    /**
     * Get addresse
     *
     * @return string
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Set capacite
     *
     * @param float $capacite
     *
     * @return Depot
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return float
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set disponibilite
     *
     * @param boolean $disponibilite
     *
     * @return Depot
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite
     *
     * @return bool
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->representant = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add representant
     *
     * @param \BackBundle\Entity\Representant $representant
     *
     * @return Depot
     */
    public function addRepresentant(\BackBundle\Entity\Representant $representant)
    {
        $this->representant[] = $representant;

        return $this;
    }

    /**
     * Remove representant
     *
     * @param \BackBundle\Entity\Representant $representant
     */
    public function removeRepresentant(\BackBundle\Entity\Representant $representant)
    {
        $this->representant->removeElement($representant);
    }

    /**
     * Get representant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepresentant()
    {
        return $this->representant;
    }

    public function __toString(){
        // to show the name of the Category in the select
        return "$this->nom";
        // to show the id of the Category in the select
        // return $this->id;
    }

}
