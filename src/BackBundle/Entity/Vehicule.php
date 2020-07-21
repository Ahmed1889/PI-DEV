<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\VehiculeRepository")
 * @UniqueEntity(fields={"matricule"},message="Matricule existante")
 */
class Vehicule
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
     * @ORM\Column(name="matricule", type="string", length=255)
     */
    private $matricule;


    /**
     * @var bool
     *
     * @ORM\Column(name="disponibilite", type="boolean",options={"default":"1"})
     */
    private $disponibilite=true;

    /**
     * @ORM\ManyToOne(targetEntity="TypeVehicule"),inversedBy="vehicules"
     * @ORM\JoinColumn(name="typeVehicule",referencedColumnName="id", onDelete="CASCADE")
     */
    private $typeVehicule;

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
     * Set disponibilite
     *
     * @param boolean $disponibilite
     *
     * @return Vehicule
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
     * @return mixed
     */
    public function getTypeVehicule()
    {
        return $this->typeVehicule;
    }

    /**
     * @param mixed $typeVehicule
     */
    public function setTypeVehicule($typeVehicule)
    {
        $this->typeVehicule = $typeVehicule;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param string $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }



}

