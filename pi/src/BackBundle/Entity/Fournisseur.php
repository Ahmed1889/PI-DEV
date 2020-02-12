<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\FournisseurRepository")
 */
class Fournisseur
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
     * @ORM\Column(name="nomf", type="string", length=255)
     */
    private $nomf;

    /**
     * @var string
     *
     * @ORM\Column(name="telf", type="string", length=255)
     */
    private $telf;

    /**
     * @var string
     *
     * @ORM\Column(name="emailf", type="string", length=255)
     */
    private $emailf;

    /**
     * @var string
     *
     * @ORM\Column(name="sitewebf", type="string", length=255)
     */
    private $sitewebf;


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

