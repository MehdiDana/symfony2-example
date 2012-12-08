<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Carloan4uStoreBundleEntityReviewProxy extends \Carloan4u\StoreBundle\Entity\Review implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setDealership($dealership)
    {
        $this->__load();
        return parent::setDealership($dealership);
    }

    public function getDealership()
    {
        $this->__load();
        return parent::getDealership();
    }

    public function setRate($rate)
    {
        $this->__load();
        return parent::setRate($rate);
    }

    public function getRate()
    {
        $this->__load();
        return parent::getRate();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setReviewTitle($reviewTitle)
    {
        $this->__load();
        return parent::setReviewTitle($reviewTitle);
    }

    public function getReviewTitle()
    {
        $this->__load();
        return parent::getReviewTitle();
    }

    public function setReviewDescription($reviewDescription)
    {
        $this->__load();
        return parent::setReviewDescription($reviewDescription);
    }

    public function getReviewDescription()
    {
        $this->__load();
        return parent::getReviewDescription();
    }

    public function setApproved($approved)
    {
        $this->__load();
        return parent::setApproved($approved);
    }

    public function getApproved()
    {
        $this->__load();
        return parent::getApproved();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'dealership', 'rate', 'name', 'email', 'review_title', 'review_description', 'approved');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}