<?php

namespace Carloan4u\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carloan4u\StoreBundle\Entity\Dealership
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Dealership
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var text $address
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;

    /**
     * @var text $opening_hours
     *
     * @ORM\Column(name="opening_hours", type="text")
     */
    private $opening_hours;

    /**
     * @var integer $number_of_car
     *
     * @ORM\Column(name="number_of_car", type="integer")
     */
    private $number_of_car;

    /**
     * @var string $image
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string $approved
     *
     * @ORM\Column(name="approved", type="string", length=255)
     */
    private $approved;


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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set address
     *
     * @param text $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return text 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set opening_hours
     *
     * @param text $openingHours
     */
    public function setOpeningHours($openingHours)
    {
        $this->opening_hours = $openingHours;
    }

    /**
     * Get opening_hours
     *
     * @return text 
     */
    public function getOpeningHours()
    {
        return $this->opening_hours;
    }

    /**
     * Set number_of_car
     *
     * @param integer $numberOfCar
     */
    public function setNumberOfCar($numberOfCar)
    {
        $this->number_of_car = $numberOfCar;
    }

    /**
     * Get number_of_car
     *
     * @return integer 
     */
    public function getNumberOfCar()
    {
        return $this->number_of_car;
    }

    /**
     * Set image
     *
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set approved
     *
     * @param string $approved
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
    }

    /**
     * Get approved
     *
     * @return string 
     */
    public function getApproved()
    {
        return $this->approved;
    }
}