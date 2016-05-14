<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Controller\BaseController;


class NewPageController extends BaseController
{
	public function indexAction()
    {

        $this->getNewPageService()->test();

        return $this->render('AppBundle:newPage:newPage.html.twig'
        );

    }

    public function studyAction()
    {
        return $this->render('AppBundle:newPage:study.html.twig');
    }

    public function photoAction()
    {
        return $this->render('AppBundle:newPage:photo.html.twig');
    }

    public function singleAction()
    {
        return $this->render('AppBundle:newPage:single.html.twig');
    }

    public function travelAction()
    {
        return $this->render('AppBundle:newPage:travel.html.twig');
    }

    protected function getNewPageService()
    {
        return $this->getServiceKernel()->createService('AppBundle:NewPage.NewPageService');
    }
}