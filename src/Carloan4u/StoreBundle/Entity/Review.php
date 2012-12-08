<?php

namespace Carloan4u\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carloan4u\StoreBundle\Entity\Review
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Review
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
     * @ORM\ManyToOne(targetEntity="Dealership", inversedBy="review")
     * @ORM\JoinColumn(name="dealership_id", referencedColumnName="id")
     *
     */
    private $dealership;

    /**
     * @var integer $rate
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $review_title
     *
     * @ORM\Column(name="review_title", type="string", length=255)
     */
    private $review_title;

    /**
     * @var text $review_description
     *
     * @ORM\Column(name="review_description", type="text")
     */
    private $review_description;

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
     * Set dealership
     *
     * @param integer $dealership
     */
    public function setDealership($dealership)
    {
        $this->dealership = $dealership;
    }

    /**
     * Get dealership
     *
     * @return integer 
     */
    public function getDealership()
    {
        return $this->dealership;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
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
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * Set review_title
     *
     * @param string $reviewTitle
     */
    public function setReviewTitle($reviewTitle)
    {
        $this->review_title = $reviewTitle;
    }

    /**
     * Get review_title
     *
     * @return string 
     */
    public function getReviewTitle()
    {
        return $this->review_title;
    }

    /**
     * Set review_description
     *
     * @param text $reviewDescription
     */
    public function setReviewDescription($reviewDescription)
    {
        $this->review_description = $reviewDescription;
    }

    /**
     * Get review_description
     *
     * @return text 
     */
    public function getReviewDescription()
    {
        return $this->review_description;
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