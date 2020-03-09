<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\FournisseurRepository")
 * @UniqueEntity("nomf")
 */
class Fournisseur
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
     * @var string
     *
     * @ORM\Column(name="nomf", type="string", length=255)
     * @Assert\NotBlank
     */
    private $nomf;

    /**
     * @var string
     *
     * @ORM\Column(name="telf", type="string", length=255)
     * @Assert\Length(
     *      min = 7,
     *      max = 8,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters")
     *  @Assert\Regex(pattern="/^[0-9]*$/", message="number_only")
     */
    private $telf;

    /**
     * @var string
     *
     * @ORM\Column(name="emailf", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Email(message = "The email '{{ value }}' Email Non Valide."
     * )
     */
    private $emailf;

    public function __toString()
    {return $this->getNomf();
        // TODO: Implement __toString() method.
    }
    public function __tooString()
    {return $this->categorief->__toString();
        // TODO: Implement __toString() method.
    }
    /**
     * @var string
     *
     * @ORM\Column(name="sitewebf", type="string", length=255)
     * @Assert\NotBlank
     */
    private $sitewebf;

    /**
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Categorief")
     * @ORM\JoinColumn(name="Categorief_id",referencedColumnName="id")
     *@Assert\NotBlank
     */
    public $categorief;



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
     * Set nomf
     *
     * @param string $nomf
     *
     * @return Fournisseur
     */
    public function setNomf($nomf)
    {
        $this->nomf = $nomf;

        return $this;
    }

    /**
     * Get nomf
     *
     * @return string
     */
    public function getNomf()
    {
        return $this->nomf;
    }

    /**
     * Set telf
     *
     * @param string $telf
     *
     * @return Fournisseur
     */
    public function setTelf($telf)
    {
        $this->telf = $telf;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategorief()
    {
        return $this->categorief;
    }

    /**
     * @param mixed $categorief
     */
    public function setCategorief($categorief)
    {
        $this->categorief = $categorief;
    }

    /**
     * Get telf
     *
     * @return string
     */
    public function getTelf()
    {
        return $this->telf;
    }

    /**
     * Set emailf
     *
     * @param string $emailf
     *
     * @return Fournisseur
     */
    public function setEmailf($emailf)
    {
        $this->emailf = $emailf;

        return $this;
    }

    /**
     * Get emailf
     *
     * @return string
     */
    public function getEmailf()
    {
        return $this->emailf;
    }

    /**
     * Set sitewebf
     *
     * @param string $sitewebf
     *
     * @return Fournisseur
     */
    public function setSitewebf($sitewebf)
    {
        $this->sitewebf = $sitewebf;

        return $this;
    }

    /**
     * Get sitewebf
     *
     * @return string
     */
    public function getSitewebf()
    {
        return $this->sitewebf;
    }
}

