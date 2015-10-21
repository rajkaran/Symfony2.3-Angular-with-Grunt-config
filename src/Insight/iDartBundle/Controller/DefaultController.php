<?php

namespace Insight\iDartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InsightiDartBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function demoAngularAction()
    {
        $message = array("date"=>"2015-09-08", "time"=>"12:22:34");
		
		$msgCode = 200;
		
		return new JsonResponse( $message, $msgCode );	 
    }
	
}
