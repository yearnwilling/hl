<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class NewPageController extends Controller
{
	public function indexAction()
    {

        return $this->render('AppBundle:newPage:newPage.html.twig'
        );

    }

    public function studyAction()
    {
        return $this->render('AppBundle:newPage:study.html.twig');
    }
}