<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PersonalController extends Controller
{
    public function indexAction(Request $request, $type = 'interest')
    {
        return $this->render("AppBundle:Personal:{$type}.html.twig", array(
            'type' => $type
        ));
    }
}