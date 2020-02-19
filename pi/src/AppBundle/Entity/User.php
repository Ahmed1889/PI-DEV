<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255)
     */
    protected $adresseC;

    /**
     * @return mixed
     */
    public function getAdresseC()
    {
        return $this->adresseC;
    }

    /**
     * @param mixed $adresseC
     */
    public function setAdresseC($adresseC)
    {
        $this->adresseC = $adresseC;
    }


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}