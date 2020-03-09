<?php

namespace BackBundle\Entity;

use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;
use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarEvent
 *
 * @ORM\Table(name="calendar_event")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\CalendarEventRepository")
 */
class CalendarEvent extends FullCalendarEvent
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    public function toArray()
    {
        // TODO: Implement toArray() method.
        return ["title"=>$this->title,"start"=>$this->startDate,"allDay"=>false ];

    }


}

