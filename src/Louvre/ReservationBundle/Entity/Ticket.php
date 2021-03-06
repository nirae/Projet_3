<?php

namespace Louvre\ReservationBundle\Entity;

use Louvre\ReservationBundle\Entity\Order;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="ticket")
 * @ORM\Entity
 */
class Ticket {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="booking_name", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $name;

    /**
     * @ORM\Column(name="booking_first_name", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $firstName;

    /**
     * @ORM\Column(name="birth_date", type="datetime")
     * @Assert\Date()
     */
    private $birthDate;

    /**
     * @ORM\Column(name="country", type="string", length=255)
     * @Assert\Country()
     */
    private $country;

    /**
     * @ORM\Column(name="reduced_price", type="boolean")
     * @Assert\Type("bool")
     */
    private $reducedPrice;

    /**
     * @ORM\Column(name="ticket_price", type="integer")
     */
    private $ticketPrice;

    /**
     * @ORM\ManyToOne(targetEntity="Louvre\ReservationBundle\Entity\Order", inversedBy="tickets")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="id")
     */
    private $order;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Ticket
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Ticket
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Ticket
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Ticket
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set reducedPrice
     *
     * @param boolean $reducedPrice
     *
     * @return Ticket
     */
    public function setReducedPrice($reducedPrice)
    {
        $this->reducedPrice = $reducedPrice;

        return $this;
    }

    /**
     * Get reducedPrice
     *
     * @return boolean
     */
    public function getReducedPrice()
    {
        return $this->reducedPrice;
    }

    /**
     * Set ticketPrice
     *
     * @param integer $ticketPrice
     *
     * @return Ticket
     */
    public function setTicketPrice($ticketPrice)
    {
        $this->ticketPrice = $ticketPrice;

        return $this;
    }

    /**
     * Get ticketPrice
     *
     * @return integer
     */
    public function getTicketPrice()
    {
        return $this->ticketPrice;
    }

    /**
     * Set order
     *
     * @param \Louvre\ReservationBundle\Entity\Order $order
     *
     * @return Ticket
     */
    public function setOrder(\Louvre\ReservationBundle\Entity\Order $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \Louvre\ReservationBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
}
