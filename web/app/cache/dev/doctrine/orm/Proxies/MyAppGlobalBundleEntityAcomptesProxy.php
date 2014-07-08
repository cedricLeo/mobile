<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MyAppGlobalBundleEntityAcomptesProxy extends \MyApp\GlobalBundle\Entity\Acomptes implements \Doctrine\ORM\Proxy\Proxy
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

    public function setNomFr($nomFr)
    {
        $this->__load();
        return parent::setNomFr($nomFr);
    }

    public function getNomFr()
    {
        $this->__load();
        return parent::getNomFr();
    }

    public function setNomEn($nomEn)
    {
        $this->__load();
        return parent::setNomEn($nomEn);
    }

    public function getNomEn()
    {
        $this->__load();
        return parent::getNomEn();
    }

    public function setDefaultHebergement($defaultHebergement)
    {
        $this->__load();
        return parent::setDefaultHebergement($defaultHebergement);
    }

    public function getDefaultHebergement()
    {
        $this->__load();
        return parent::getDefaultHebergement();
    }

    public function addHebergements(\MyApp\GlobalBundle\Entity\Hebergements $hebergementId)
    {
        $this->__load();
        return parent::addHebergements($hebergementId);
    }

    public function getHebergementId()
    {
        $this->__load();
        return parent::getHebergementId();
    }

    public function setRepertoireFr($repertoireFr)
    {
        $this->__load();
        return parent::setRepertoireFr($repertoireFr);
    }

    public function getRepertoireFr()
    {
        $this->__load();
        return parent::getRepertoireFr();
    }

    public function setRepertoireEn($repertoireEn)
    {
        $this->__load();
        return parent::setRepertoireEn($repertoireEn);
    }

    public function getRepertoireEn()
    {
        $this->__load();
        return parent::getRepertoireEn();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nom_fr', 'nom_en', 'repertoire_fr', 'repertoire_en', 'default_hebergement', 'hebergement_id');
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