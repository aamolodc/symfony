<?php

namespace Arpaltest\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(Request $request) {
    		
    	$session = $request->getSession();
    	$count = $session->get('count');
    	if(empty($count)) {
    		$count = 0;
    	}
    	$session->set('count', $count+1);


    	return $this->render('ArpaltestHelloWorldBundle:Default:index.html.twig', array(
    			'count' => $count

    		));
    }
}
