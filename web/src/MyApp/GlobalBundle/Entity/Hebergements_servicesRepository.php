<?php
namespace MyApp\GlobalBundle\Entity;

use Doctrine\ORM\EntityRepository;

class Hebergements_servicesRepository extends EntityRepository{

	/*******************************************************************/
	//	Méthodes pour les services des hébergements
	/*******************************************************************/

	/**
	 * Liste toutes les services
	 */
	public function getListservices()
	{
		$sql = 'SELECT p FROM MyAppGlobalBundle:Hebergements_services p';
		$query = $this->getEntityManager()->createQuery($sql);
		return $query->getResult();
	}





}