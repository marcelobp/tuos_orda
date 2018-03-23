<?php
namespace App\Model;

class CollectionsModel {

	/**
	 * Articles count by collection
	 * @var string
	 */
	public $articles_count;
	
	/**
	 * Author(s)
	 * @var string
	 */
	public $authors;
	
	
	/**
	 * Collection Id
	 * @var integer
	 */
	public $id;

	/**
	 * List of categories
	 * @var string
	 */
	public $categories;
	
	/**
	 * Collection description
	 * @var string
	 */
	public $description;
	
	/**
	 * Collection DOI
	 * @var string
	 */
	public $doi;

	/**
	 * Collection published_date
	 * @var string
	 */
	public $published_date;
	
	/**
	 * Article tags
	 * @var array
	 */
	public $tags;
	
	/**
	 * Collection title
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
