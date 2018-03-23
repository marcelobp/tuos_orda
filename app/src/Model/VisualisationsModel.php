<?php
namespace App\Model;

class VisualisationsModel extends Model {

	/**
	 * Author(s)
	 * @var string
	 */
	public $author;
	
	/**
	 * Title
	 * @var string
	 */
	public $title;

	/**
	 * Description
	 * @var string
	 */
	public $description;
	
	/**
	 * Thumbnail
	 * @var string
	 */
	public $thumbnail;
	
	/**
	 * URL
	 * @var string
	 */
	public $url;

	/**
	 * Creation date
	 * @var date
	 */
	public $creation_dt;

	/**
	 * Publication date
	 * @var date
	 */
	public $publication_dt;
	
	/**
	 * Embeded?
	 * @var integer
	 */
	public $embeded;
	
	/**
	 * RowId
	 * @var integer
	 */
	public $rowid;
	

	/**
	 * Class constructor
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @return void
	 */	
	public function __construct($app){
		parent::__construct($app);
	}
	
	/**
	 * Get visualisations from database
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @return recordset $rs
	 */
	public function getData(){
		// Select all data from memory db messages table
		$statement = $this->pdo->prepare('SELECT rowid, title, description, author, thumbnail, url, creation_dt, publication_dt, embeded  FROM visualisations');
		try	{
			$statement->execute();
		}
		catch(PDOException $e) {
			echo "Statement failed: " . $e->getMessage();
			return false;
		}
		
		$rs = $statement->fetchAll();
		return $rs;
	}
	
	/**
	 * Get a specific visualisation by rowId
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @return recordset $rs
	 */
	public function find(){
		if($this->rowid){
			$statement = $this->pdo->prepare('SELECT rowid, title, description, author, thumbnail, url, creation_dt, publication_dt, embeded  FROM visualisations WHERE rowid = :rowid');
			try	{
				$statement->execute(array(':rowid' => $this->rowid));
			}
			catch(PDOException $e) {
				echo "Statement failed: " . $e->getMessage();
				return false;
			}
			
			$rs = $statement->fetchAll();
			return $rs;
		} else {
			echo "Rowid should be informed.";
			return false;
		}
	}
	
	
	public function save(){
		// Prepare INSERT statement to SQLite3 file db
		$insert = "INSERT INTO messages (title, message, time) VALUES (:title, :message, :time)";
		$stmt = $this->pdo->prepare($insert);
		
		// Bind parameters to statement variables
		$stmt->bindParam(':title', $title);
		$stmt->bindParam(':message', $message);
		$stmt->bindParam(':time', $time);
		
		// Loop thru all messages and execute prepared insert statement
		foreach ($messages as $m) {
			// Set values to bound variables
			$title = $m['title'];
			$message = $m['message'];
			$time = $m['time'];
		
			// Execute statement
			$stmt->execute();
		}
	}
}
