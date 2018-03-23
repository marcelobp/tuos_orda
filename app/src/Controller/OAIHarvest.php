<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Phpoaipmh\Client, Phpoaipmh\Endpoint, Phpoaipmh\Granularity;

class OAIHarvest  {
	
	public function index(){
		$client = new Client('https://zenodo.org/oai2d');
		$myEndpoint = new Endpoint($client);

		$recs = $myEndpoint->listRecords('oai_dc', '2017-05-12');
		
		
		foreach($recs as $rec) {
			echo "<pre>"; var_dump($rec);
		}
	}

}
