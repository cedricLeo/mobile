<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MyAppGlobalBundleEntityProvinces_etatsProxy extends \MyApp\GlobalBundle\Entity\Provinces_etats implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function getFullPicturePath()
    {
        $this->__load();
        return parent::getFullPicturePath();
    }

    public function uploadPicture()
    {
        $this->__load();
        return parent::uploadPicture();
    }

    public function movePicture()
    {
        $this->__load();
        return parent::movePicture();
    }

    public function removePicture()
    {
        $this->__load();
        return parent::removePicture();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
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

    public function setTitreFrTravelAttraits($titreFrTravelAttraits)
    {
        $this->__load();
        return parent::setTitreFrTravelAttraits($titreFrTravelAttraits);
    }

    public function getTitreFrTravelAttraits()
    {
        $this->__load();
        return parent::getTitreFrTravelAttraits();
    }

    public function setTitreEnTravelAttraits($titreEnTravelAttraits)
    {
        $this->__load();
        return parent::setTitreEnTravelAttraits($titreEnTravelAttraits);
    }

    public function getTitreEnTravelAttraits()
    {
        $this->__load();
        return parent::getTitreEnTravelAttraits();
    }

    public function setTexteFrTravelAttraits($texteFrTravelAttraits)
    {
        $this->__load();
        return parent::setTexteFrTravelAttraits($texteFrTravelAttraits);
    }

    public function getTexteFrTravelAttraits()
    {
        $this->__load();
        return parent::getTexteFrTravelAttraits();
    }

    public function setTexteEnTravelAttraits($texteEnTravelAttraits)
    {
        $this->__load();
        return parent::setTexteEnTravelAttraits($texteEnTravelAttraits);
    }

    public function getTexteEnTravelAttraits()
    {
        $this->__load();
        return parent::getTexteEnTravelAttraits();
    }

    public function setPageTitreFr($pageTitreFr)
    {
        $this->__load();
        return parent::setPageTitreFr($pageTitreFr);
    }

    public function getPageTitreFr()
    {
        $this->__load();
        return parent::getPageTitreFr();
    }

    public function setPageTitreEn($pageTitreEn)
    {
        $this->__load();
        return parent::setPageTitreEn($pageTitreEn);
    }

    public function getPageTitreEn()
    {
        $this->__load();
        return parent::getPageTitreEn();
    }

    public function setPageMetakeywordFr($pageMetakeywordFr)
    {
        $this->__load();
        return parent::setPageMetakeywordFr($pageMetakeywordFr);
    }

    public function getPageMetakeywordFr()
    {
        $this->__load();
        return parent::getPageMetakeywordFr();
    }

    public function setPageMetakeywordEn($pageMetakeywordEn)
    {
        $this->__load();
        return parent::setPageMetakeywordEn($pageMetakeywordEn);
    }

    public function getPageMetakeywordEn()
    {
        $this->__load();
        return parent::getPageMetakeywordEn();
    }

    public function setPageMetadescriptionFr($pageMetadescriptionFr)
    {
        $this->__load();
        return parent::setPageMetadescriptionFr($pageMetadescriptionFr);
    }

    public function getPageMetadescriptionFr()
    {
        $this->__load();
        return parent::getPageMetadescriptionFr();
    }

    public function setPageMetadescriptionEn($pageMetadescriptionEn)
    {
        $this->__load();
        return parent::setPageMetadescriptionEn($pageMetadescriptionEn);
    }

    public function getPageMetadescriptionEn()
    {
        $this->__load();
        return parent::getPageMetadescriptionEn();
    }

    public function setTexteAccueilFr($texteAccueilFr)
    {
        $this->__load();
        return parent::setTexteAccueilFr($texteAccueilFr);
    }

    public function getTexteAccueilFr()
    {
        $this->__load();
        return parent::getTexteAccueilFr();
    }

    public function setTexteAccueilEn($texteAccueilEn)
    {
        $this->__load();
        return parent::setTexteAccueilEn($texteAccueilEn);
    }

    public function getTexteAccueilEn()
    {
        $this->__load();
        return parent::getTexteAccueilEn();
    }

    public function setImage($image)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function setImageDoctrine($imageDoctrine)
    {
        $this->__load();
        return parent::setImageDoctrine($imageDoctrine);
    }

    public function getImageDoctrine()
    {
        $this->__load();
        return parent::getImageDoctrine();
    }

    public function setReservitId($reservitId)
    {
        $this->__load();
        return parent::setReservitId($reservitId);
    }

    public function getReservitId()
    {
        $this->__load();
        return parent::getReservitId();
    }

    public function setAffiche($affiche)
    {
        $this->__load();
        return parent::setAffiche($affiche);
    }

    public function getAffiche()
    {
        $this->__load();
        return parent::getAffiche();
    }

    public function addAppel_Offre(\MyApp\GlobalBundle\Entity\Appel_Offre $appelOffre)
    {
        $this->__load();
        return parent::addAppel_Offre($appelOffre);
    }

    public function getAppelOffre()
    {
        $this->__load();
        return parent::getAppelOffre();
    }

    public function setPaysId(\MyApp\GlobalBundle\Entity\Pays $paysId)
    {
        $this->__load();
        return parent::setPaysId($paysId);
    }

    public function getPaysId()
    {
        $this->__load();
        return parent::getPaysId();
    }

    public function addAttraits(\MyApp\GlobalBundle\Entity\Attraits $attraitsId)
    {
        $this->__load();
        return parent::addAttraits($attraitsId);
    }

    public function getAttraitsId()
    {
        $this->__load();
        return parent::getAttraitsId();
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

    public function addRegions(\MyApp\GlobalBundle\Entity\Regions $regionId)
    {
        $this->__load();
        return parent::addRegions($regionId);
    }

    public function getRegionId()
    {
        $this->__load();
        return parent::getRegionId();
    }

    public function addTexte_province_categorie(\MyApp\GlobalBundle\Entity\Texte_province_categorie $texteProvinceCategorie)
    {
        $this->__load();
        return parent::addTexte_province_categorie($texteProvinceCategorie);
    }

    public function getTexteProvinceCategorie()
    {
        $this->__load();
        return parent::getTexteProvinceCategorie();
    }

    public function addTexte_province_forfait(\MyApp\GlobalBundle\Entity\Texte_province_forfait $texteProvinceForfait)
    {
        $this->__load();
        return parent::addTexte_province_forfait($texteProvinceForfait);
    }

    public function getTexteProvinceForfait()
    {
        $this->__load();
        return parent::getTexteProvinceForfait();
    }

    public function addTexte_province_sante(\MyApp\GlobalBundle\Entity\Texte_province_sante $texteProvinceSante)
    {
        $this->__load();
        return parent::addTexte_province_sante($texteProvinceSante);
    }

    public function getTexteProvinceSante()
    {
        $this->__load();
        return parent::getTexteProvinceSante();
    }

    public function addTexte_province_restaurant(\MyApp\GlobalBundle\Entity\Texte_province_restaurant $texteProvinceRestaurant)
    {
        $this->__load();
        return parent::addTexte_province_restaurant($texteProvinceRestaurant);
    }

    public function getTexteProvinceRestaurant()
    {
        $this->__load();
        return parent::getTexteProvinceRestaurant();
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

    public function addTexte_province_corporatif(\MyApp\GlobalBundle\Entity\Texte_province_corporatif $texteProvinceCorporatif)
    {
        $this->__load();
        return parent::addTexte_province_corporatif($texteProvinceCorporatif);
    }

    public function getTexteProvinceCorporatif()
    {
        $this->__load();
        return parent::getTexteProvinceCorporatif();
    }

    public function addTexte_province_appel_offre(\MyApp\GlobalBundle\Entity\Texte_province_appel_offre $texteProvinceAppelOffre)
    {
        $this->__load();
        return parent::addTexte_province_appel_offre($texteProvinceAppelOffre);
    }

    public function getTexteProvinceAppelOffre()
    {
        $this->__load();
        return parent::getTexteProvinceAppelOffre();
    }

    public function addTexte_province_location_salle(\MyApp\GlobalBundle\Entity\Texte_province_location_salle $texteProvinceLocationSalle)
    {
        $this->__load();
        return parent::addTexte_province_location_salle($texteProvinceLocationSalle);
    }

    public function getTexteProvinceLocationSalle()
    {
        $this->__load();
        return parent::getTexteProvinceLocationSalle();
    }

    public function addTexte_province_activite_corporative(\MyApp\GlobalBundle\Entity\Texte_province_activite_corporative $texteProvinceActiviteCorporative)
    {
        $this->__load();
        return parent::addTexte_province_activite_corporative($texteProvinceActiviteCorporative);
    }

    public function getTexteProvinceActiviteCorporative()
    {
        $this->__load();
        return parent::getTexteProvinceActiviteCorporative();
    }

    public function addTexte_province_chambre_affaire(\MyApp\GlobalBundle\Entity\Texte_province_chambre_affaire $texteProvinceChambreAffaire)
    {
        $this->__load();
        return parent::addTexte_province_chambre_affaire($texteProvinceChambreAffaire);
    }

    public function getTexteProvinceChambreAffaire()
    {
        $this->__load();
        return parent::getTexteProvinceChambreAffaire();
    }

    public function addTexte_province_forfait_affaire(\MyApp\GlobalBundle\Entity\Texte_province_forfait_affaire $texteProvinceForfaitAffaire)
    {
        $this->__load();
        return parent::addTexte_province_forfait_affaire($texteProvinceForfaitAffaire);
    }

    public function getTexteProvinceForfaitAffaire()
    {
        $this->__load();
        return parent::getTexteProvinceForfaitAffaire();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nom_fr', 'nom_en', 'titre_fr_travel_attraits', 'titre_en_travel_attraits', 'texte_fr_travel_attraits', 'texte_en_travel_attraits', 'page_titre_fr', 'page_titre_en', 'page_metakeyword_fr', 'page_metakeyword_en', 'page_metadescription_fr', 'page_metadescription_en', 'texte_accueil_fr', 'texte_accueil_en', 'repertoire_fr', 'repertoire_en', 'image', 'image_doctrine', 'reservit_id', 'affiche', 'appel_offre', 'texte_province_categorie', 'texte_province_corporatif', 'texte_province_appel_offre', 'texte_province_location_salle', 'texte_province_activite_corporative', 'texte_province_chambre_affaire', 'texte_province_forfait_affaire', 'pays_id', 'texte_province_forfait', 'texte_province_sante', 'texte_province_restaurant', 'attraits_id', 'hebergement_id', 'region_id');
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