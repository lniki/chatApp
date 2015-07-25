<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/app/hello/{name}", name="hello")
     */
    public function helloAction($name, Request $request)
    {
        $language = $request->getPreferredLanguage();
        return $this->render('default/hello.html.twig', array(
            'name' => $language
        ));
    }
}
