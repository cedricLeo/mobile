<?php

namespace MyApp\MobileBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Texte_province_location_salleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Texte_province_location_salleRepository extends EntityRepository
{
    
    /**
     * Recherche les textes d'accueil
     */
    public function getRechercheTexteAccueil($province)
    {
        $sql = 'SELECT p FROM MyAppMobileBundle:Texte_province_location_salle p WHERE p.province =:province';
        $query = $this->getEntityManager()->createQuery($sql);
        $query->setParameter("province", $province);
        return $query->getResult();
    }
}