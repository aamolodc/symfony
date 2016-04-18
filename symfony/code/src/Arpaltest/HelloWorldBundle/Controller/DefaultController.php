<?php

namespace Arpaltest\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request) {
    	// Push a session var
	$session = $request->getSession();
	$count = $session->get('count');
	if(empty($count)) $count = 0;
	$count += 1;
	$session->set('count', $count);


	

	return $this->render('ArpaltestHelloWorldBundle:Default:index.html.twig', array('count' => $count));
    }
}
