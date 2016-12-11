<?php
namespace AppBundle\Controller;

use AppBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends BaseController
{
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Login:login.html.twig'
        );
    }
}
