<?php
namespace App\Model;

class CategoriesModel {

	/**
	 * Categorie Id
	 * @var integer
	 */
	public $id;

	/**
	 * Categorie Id Parent
	 * @var integer
	 */
	public $id_parent;
	
	
	/**
	 * Categorie title
	 * @var string
	 */
	public $title;
	
	/**
	 * Class constructor
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @return void
	 */	
	public function __construct(){
	}
	
}
