<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Representant
 *
 * @ORM\Table(name="representant")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\RepresentantRepository")
 * @UniqueEntity(fields={"email"}, message="email deja exist ..!")
 */
class Representant
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse", type="string", length=255)
     */
    private $addresse;

    /**
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumn(name="fournisseur", referencedColumnName="id")
     */
    private $fournisseurs;

    /**
     * @ORM\ManyToMany(targetEntity="Depot", mappedBy="representant")
     */
    private $depots;

    public function __construct()
    {
        $this->fournisseurs = new ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Representant
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Representant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Representant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Representant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Add depot
     *
     * @param \BackBundle\Entity\Depot $depot
     *
     * @return Representant
     */
    public function addDepot(\BackBundle\Entity\Depot $depot)
    {
        $this->depots[] = $depot;

        return $this;
    }

    /**
     * Remove depot
     *
     * @param \BackBundle\Entity\Depot $depot
     */
    public function removeDepot(\BackBundle\Entity\Depot $depot)
    {
        $this->depots->removeElement($depot);
    }

    /**
     * Get depots
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepots()
    {
        return $this->depots;
    }
    public function __toString(){
        // to show the name of the Category in the select
        return $this->nom;
        // to show the id of the Category in the select
        // return $this->id;
    }

    /**
     * Set addresse
     *
     * @param string $addresse
     *
     * @return Representant
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
     * Set fournisseurs
     *
     * @param \BackBundle\Entity\Fournisseur $fournisseurs
     *
     * @return Representant
     */
    public function setFournisseurs(\BackBundle\Entity\Fournisseur $fournisseurs = null)
    {
        $this->fournisseurs = $fournisseurs;

        return $this;
    }

    /**
     * Get fournisseurs
     *
     * @return \BackBundle\Entity\Fournisseur
     */
    public function getFournisseurs()
    {
        return $this->fournisseurs;
    }
}
