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

    protected function getNewPageService()
    {
        return $this->getServiceKernel()->createService('AppBundle:NewPage.NewPageService');
    }
}