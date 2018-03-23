<?php
namespace App\Model;

class ArticlesModel {

	/**
	 * Is Active?
	 * @var boolean
	 */
	public $active;
	
	/**
	 * Author(s)
	 * @var string
	 */
	public $authors;
	
	/**
	 * Cateogries of an Article
	 * @var array
	 */
	public $categories;
	
	/**
	 * Citations of an Article
	 * @var string
	 */
	public $citation;

	/**
	 * Is Confidential?
	 * @var boolean
	 */
	public $confidential;
	
	/**
	 * Reason of a confidential Article
	 * @var string
	 */
	public $confidential_reason;
	
	/**
	 * Date of Article's creation
	 * @var timestamp
	 */
	public $created_date;
	
	/**
	 * Defined type
	 * @var string
	 */
	public $defined_type;
	
	/**
	 * Article description
	 * @var string
	 */
	public $description;
	
	/**
	 * Article doi
	 * @var string
	 */
	public $doi;
	
	/**
	 * Embargo type
	 * @var boolean
	 */
	public $embargoed;
	
	/**
	 * Embargo date
	 * @var timestamp
	 */
	public $embargo_date;
	
	/**
	 * Embargo type
	 * @var string
	 */
	public $embargo_type;
	
	/**
	 * Embargo reason
	 * @var string
	 */
	public $embargo_reason;	
	
	/**
	 * Has linked file?
	 * @var boolean
	 */
	public $has_linked_file;

	/**
	 * Article Id
	 * @var integer
	 */
	public $id;
	
	/**
	 * License type
	 * @var string
	 */
	public $license;
	
	/**
	 * Is metadata record?
	 * @var boolean
	 */
	public $metadata_record;
	
	/**
	 * Metadata reason
	 * @var string
	 */
	public $metadata_reason;
	
	/**
	 * Article's Last modified date
	 * @var timestamp
	 */
	public $modified_date;	
	
	/**
	 * Is Public?
	 * @var boolean
	 */
	public $public;
	
	/**
	 * Article's Publish date
	 * @var timestamp
	 */
	public $published_date;
	
	/**
	 * References
	 * @var array
	 */
	public $references;	
	
	/**
	 * Article size
	 * @var number
	 */
	public $size;
	
	/**
	 * Statistics of an Article (views, downloads, cites, shares)
	 * @var array
	 */
	public $statistics;
	
	/**
	 * Article status
	 * @var number
	 */
	public $status;	

	/**
	 * Article tags
	 * @var array
	 */
	public $tags;
	
	/**
	 * Type
	 * @var array
	 */
	public $type;
	
	/**
	 * Visualisation embeded?
	 * @var array
	 */
	public $visualisation_embeded;
	
	/**
	 * URL to the Visualisation(s)
	 * @var string
	 */
	public $visualisation_url;
	
	/**
	 * Array of visualisations setted on YAML file
	 * @var array
	 */
	public $visualisations = array();

	/**
	 * Article title
	 * @var string
	 */
	public $title;

	/**
	 * Article thumbnail
	 * @var string
	 */
	public $thumb;

	/**
	 * Article thumbnail placeholder
	 * @var string
	 */
	public $thumb_placeholder;
	
	/**
	 * Article URL
	 * @var string
	 */
	public $url;

	/**
	 * Article version
	 * @var integer
	 */
	public $version;
	
	/**
	 * Class constructor
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @return void
	 */	
	public function __construct(){
	}
	
	/**
	 * Maps JSON values returned from the API to its Model attributes 
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @param string $article Array with Articles information to be mapped
	 * 
	 * @return void
	*/
    public function setArticle($article){
    	
    	foreach($article as $key => $value){
    		
    		if(property_exists(__CLASS__, $key)) {
			
    			switch ($key){
    				
    				case 'published_date':
						$this->$key = date("d/m/Y H:i:s", strtotime($value));
						break;
						
					case 'description':
						$this->$key = substr(str_replace("<p>", "", str_replace("</p>", "<br />", $value)), 0, 550)."...";
						$this->$key = strip_tags($this->$key);
						break;
						
					default:
						$this->$key = $value;
				}
    		}
    		
    		$this->thumb_placeholder = $this->getThumbPlaceHolder($article->defined_type);
    		$this->type  = $this->getTypeDescription($article->defined_type);
    	}
    	
    }
    
    /**
     * Extract information from the XML Node
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param xml $xmlNode
     * @reference array $recordsTwitter
     *
     * @return void
     */
    public function fetchRecords($xmlNode, &$recordsTwitter){
    
    	$return  = array();
    
    	foreach($xmlNode->record as $rNode) {
    
    		$metatemp = $rNode->metadata->children('oai_dc', 1)->dc->children('dc', 1);
    
    		$creator = array();
    		$subject = array();
    
    		foreach($metatemp as $metadata => $data){
    
    			switch ($metadata){
    				case 'title':
    					$title = (string) $data;
    					break;
    				case 'creator':
    					$creator[] = substr((string) $data, 0, strpos((string) $data, '('));
    					break;
    				case 'subject':
    					$subject[] = (string) $data;
    					break;
    				case 'description':
    					$description = (string) $data;
    					break;
    				case 'identifier':
    					$link_to_article = (string) $data;
    					break;
    				case 'type':
    					$type = (string) $data;
    					break;
    				case 'date':
    					$date = (string) $data;
    					break;
    			}
    
    		}
    
    		$title   = substr($title, 0, 50);
    		$title   = preg_replace('/(\'|")/', '', $title);
    
    		$creator[0] = substr($creator[0], 0, 19);
    		$creator    = (count($creator) > 1) ? $creator[0]." et al" : $creator[0];
    
    		$subject = implode(", ", $subject);
    
    		$recordsTwitter[] = array(
    				'title'           => $title,
    				'creator'         => $creator,
    				'subject'         => $subject,
    				'description'     => $description,
    				'link_to_article' => $link_to_article,
    				'type'            => $type,
    				'date'            => $date
    		);
    	}
    }
    
    /**
     * Filter array of articles by an given type
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param strint $type
     * @param array $article with Articles to be filtered
     *
     * @return array $article with Articles filtered
     */
    public function filterType($type, $articles=array()){
    	
    	foreach($articles as $key => $article){
    		
    		if($article->type != $type){
    			unset($articles[$key]);
    		}
    		
    	}
    	
    	return $articles;
    }
    
    /**
     * Get placeholder for thumbnail according to type informed
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @id_type integer
     *
     * @return $placeholder
     */
    
    static public function getThumbPlaceHolder($id_type){
    	switch ($id_type){
    		//figure
    		case '1':
    			return 'fa fa-picture-o fa-5x fa-fw';
    			break;
    			//media
    		case '2':
    			return 'fa fa-film fa-5x fa-fw';
    			break;
    			//dataset
    		case '3':
    			return 'fa fa-table fa-5x fa-fw';
    			break;
    			//fileset
    		case '4':
    			return 'fa fa-files-o fa-5x fa-fw';
    			break;
    			//poster
    		case '5':
    			return 'fa fa-id-card-o fa-5x fa-fw';
    			break;
    			//paper
    		case '6':
    			return 'fa fa-file-text-o fa-5x fa-fw';
    			break;
    			//presentation
    		case '7':
    			return 'fa fa-video-camera fa-5x fa-fw';
    			break;
    			//thesis
    		case '8':
    			return 'fa fa-book fa-5x fa-fw';
    			break;
    			//code
    		case '9':
    			return 'fa fa-code fa-5x fa-fw';
    			break;
    			//metadata
    		case '11':
    			return 'fa fa-tags fa-5x fa-fw';
    			break;
    		default:
    			return 'fa fa-picture-o fa-5x fa-fw';
    	}
    	 
    }
    
    /**
     * Get description according to type informed
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @id_type integer
     *
     * @return $placeholder
     */
    
    static public function getTypeDescription($id_type){
    
    	switch ($id_type){
    		//figure
    		case '1':
    			return 'Figure';
    			break;
    			//media
    		case '2':
    			return 'Media';
    			break;
    			//dataset
    		case '3':
    			return 'Dataset';
    			break;
    			//fileset
    		case '4':
    			return 'Fileset';
    			break;
    			//poster
    		case '5':
    			return 'Poster';
    			break;
    			//paper
    		case '6':
    			return 'Paper';
    			break;
    			//presentation
    		case '7':
    			return 'Presentation';
    			break;
    			//thesis
    		case '8':
    			return 'Thesis';
    			break;
    			//code
    		case '9':
    			return 'Code';
    			break;
    			//metadata
    		case '11':
    			return 'Metadata record';
    			break;
    		default:
    			return 'Article';
    	}
    
    }
    
    
}
