<?php
namespace MyApp\AdminBundle\Forms;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AddTypeChambreForm extends AbstractType
{
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder
		->add('nom_fr', 'text')
		->add('nom_en', 'text')
		//->add('ordre_affichage', 'integer', array("required" => false))
		;
	}

	public function getName()
	{
		return 'add_chambre';
	}
}