<?php

namespace Insight\iDartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InsightiDartBundle:Default:index.html.twig');
    }
	
	// Handle Ajax request 
	public function demoAngularAction()
    {
        date_default_timezone_set ( "America/Toronto" );		
		
		$message = array("requestTimeStamp"=>new \DateTime(date('Y-m-d H:i:s')));
		
		$msgCode = 200;
		
		return new JsonResponse( $message, $msgCode );	 
    }
	
}
