<?php

namespace MyApp\MobileBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Texte_region_chambre_affaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Texte_region_chambre_affaireRepository extends EntityRepository
{
    /**
     * Recherche les textes d'accueil
     */
    public function getRechercheTexteAccueil($region)
    {
        $sql = 'SELECT p FROM MyAppMobileBundle:Texte_region_chambre_affaire p WHERE p.region =:region';
        $query = $this->getEntityManager()->createQuery($sql);
        $query->setParameter("region", $region);
        return $query->getResult();
    }
}