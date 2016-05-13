<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     */
    public function indexAction(Request $request,$name)
    {

        return $this->render('AppBundle:newPage:newPage.html.twig'
        );
    }
}