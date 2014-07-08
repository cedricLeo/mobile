<?php

namespace MyApp\MobileBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Texte_region_categorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Texte_region_categorieRepository extends EntityRepository
{
    
    /**
     * Méthode qui valide si on a déjà des textes pour cette région
     */
    public function getValideTexteRegionExiste($id)
    {
        $sql = 'SELECT p FROM MyAppMobileBundle:Texte_region_categorie p WHERE p.region =:id';
        $query = $this->getEntityManager()->createQuery($sql);
        $query->setParameter("id", $id);
        return $query->getResult();
    }
    
    /**
     * Recherche les textes d'accueil
     */
    public function getRechercheTexteAccueil($region, $cat)
    {
        $sql = 'SELECT p FROM MyAppMobileBundle:Texte_region_categorie p WHERE p.region =:region AND p.categorie_hebergement =:cat';
        $query = $this->getEntityManager()->createQuery($sql);
        $query->setParameter("region", $region);
        $query->setParameter("cat", $cat);
        return $query->getResult();
    }
    
}