<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonReduction
 *
 * @ORM\Table(name="bon_reduction")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\BonReductionRepository")
 */
class BonReduction
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
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="taux", type="integer", nullable=true)
     */
    private $taux;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isvalid", type="boolean",options={"default": true })
     */
    private $isvalid;

    /**
     * Get taux
     *
     * @return int|null
     */
    public function getTaux(): ?int
    {
        return $this->taux;
    }

    /**
     * @param int $taux
     * @return BonReduction
     */
    public function setTaux(int $taux): BonReduction
    {
        $this->taux = $taux;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsvalid(): bool
    {
        return $this->isvalid;
    }

    /**
     * @param bool $isvalid
     * @return BonReduction
     */
    public function setIsvalid(bool $isvalid): BonReduction
    {
        $this->isvalid = $isvalid;
        return $this;
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
     * Set numero
     *
     * @param string $numero
     *
     * @return BonReduction
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }
}

