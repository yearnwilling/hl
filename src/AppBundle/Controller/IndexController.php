<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;


class IndexController extends BaseController
{
    public function indexAction()
    {
        return $this->render('AppBundle:index:index.html.twig', array(
        ));
    }
}
