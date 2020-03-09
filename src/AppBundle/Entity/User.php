<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Mgilet\NotificationBundle\NotifiableInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @Notifiable(name="User")
 */
class User extends BaseUser implements  NotifiableInterface
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