<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Model\ArticlesModel;
use App\Controller\Articles;

/**
 * Feedback controller
 *
 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
 *
 */
class Feedback extends Action {
	
	/**
	 * Method constructor
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @param object $app Configuration file
	 *
	 * @return void
	 */	
    public function __construct($app){

    	parent::__construct($app);

    }

    /**
     * Action to send Feedback by email
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request 
     * @param object $response
     * @param array $args
     *
     * @return $result
     */    
    public function index(Request $request, Response $response, $args){

    	//body message
    	$message  =  "Sent by: ".$request->getParam('name'). " (".$request->getParam('email').") on ". date('d/m/Y h:i:s', time())."<br><br>";
    	$message .= "<b>Feedback message:</b><br>";
    	$message .= nl2br($request->getParam('message'));
    	
    	//to, subject and from
    	$to      = $this->app->settings['email_feedback_to'];
    	$subject = "Feedback from ORDA";
    	$from    = $request->getParam('name')." <".$request->getParam('email').">";
    	
    	//headers
    	$headers  = 'MIME-Version: 1.0' . "\r\n";
    	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    	$headers .= 'Reply-To: ' .$from . "\r\n";
    	$headers .= 'From: ORDA Repository <no-reply@sheffield.ac.uk>' . "\r\n";
    	$headers .= 'X-Mailer: PHP/' . phpversion();
    	
    	if (mail($to, $subject, $message, $headers)) {
    		$result['status']  = 'alert-success';
    		$result['message'] = 'Your Feedback has been sent successfully. Thank you!';
    	}
    	else {
    		$result['status']  = 'alert-danger';
    		$result['message'] = 'Your feedback was not sent. Please try again.';
    	}
    	
   		echo json_encode($result);
    }
}
