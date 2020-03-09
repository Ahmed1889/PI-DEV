<?php
/**
 * Created by PhpStorm.
 * User: jha
 * Date: 17/02/2020
 * Time: 23:46
 */

namespace BackBundle\Listener;

use AncaRebeca\FullCalendarBundle\Model\Event;
use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;
use AppBundle\Entity\User;
use BackBundle\Entity\CalendarEvent as MyCustomEvent;
use BackBundle\Entity\CalendarEvent;
use BackBundle\Entity\employee;
use BackBundle\Entity\Livraison_Planning;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Constraints\Date;

class LoadDataListener
{
    /**
     * @var EntityManager
     */
    private $em;
    public function __construct(EntityManagerInterface $em,Security $security)
    {
        $this->em = $em;
        $this->security=$security;
    }

    /**
     * @param CalendarEvent $calendarEvent
     *
     * @return FullCalendarEvent[]
     */
    public function loadData(\AncaRebeca\FullCalendarBundle\Event\CalendarEvent $calendarEvent)
    {
        $startDate = $calendarEvent->getStart();
        $endDate = $calendarEvent->getEnd();
        $filters = $calendarEvent->getFilters();
        if(isset($_GET['user'])) {
            $id = $_GET['user'];


            //You may want do a custom query to populate the events
            $emp = $this->em->getRepository(User::class)->find($id);
            $user = $this->em->getRepository(employee::class)->findOneBy(array('username'=>$emp->getUsername()));

            $plannings = $this->em->getRepository(Livraison_Planning::class)->findBy(['employe' => $user]);

            foreach ($plannings as $p) {
                $e =  new Event("Commande : " . $p->getCommande()->getId() . " \n Adresse : " . $p->getCommande()->getAdresse(), $p->getDateLivraison());
                if($p->getDateLivraison() < new \DateTime()){
                    $e->setColor("#000");
                    $e->setTextColor("white");
                    $e->setBackgroundColor("red");}
                $calendarEvent->addEvent($e);
            }
        }
        else{
            $plannings = $this->em->getRepository(Livraison_Planning::class)->findAll();

            foreach ($plannings as $p) {
                $e = new Event("Commande : " . $p->getCommande()->getId() . " \n Adresse : " . $p->getCommande()->getAdresse()."\n Livreur : ".$p->getEmploye()->getUsername(), $p->getDateLivraison());
                if($p->getDateLivraison() < new \DateTime()){
                    $e->setColor("#000");
                    $e->setTextColor("white");
                $e->setBackgroundColor("red");}
                $calendarEvent->addEvent($e);
            }
        }
/*        $event  = new Event();
        $event->getColor()*/

        /*$event = new Event('Event Title 1', new \DateTime());

        $calendarEvent->addEvent($event);*/
       // $calendarEvent->addEvent(new MyCustomEvent('Event Title 2', new \DateTime()));
    }
}