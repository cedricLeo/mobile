<?php

namespace MyApp\GlobalBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * HorairesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HorairesRepository extends EntityRepository
{
	public function getHoraireAttrait($id){
		
		$sql = 'SELECT p FROM MyAppGlobalBundle:Horaires p WHERE p.attrait_id = :id';
		$query = $this->getEntityManager()->createQuery($sql);
		$query->setParameter('id', $id);
		return $query->getResult();
	}
	
}