<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;


class NewPageController extends BaseController
{
	public function indexAction()
    {

        $artcal = $this->getNewPageService()->getArtical();
        return $this->render('AppBundle:newPage:newPage.html.twig', array(
                'artcals' => $artcal,

        ));

    }

    public function studyAction()
    {
        return $this->render('AppBundle:newPage:study.html.twig');
    }

    public function photoAction()
    {
        return $this->render('AppBundle:newPage:photo.html.twig');
    }

    public function singleAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $messageS  = $request->request->all();
            $this->getNewPageService()->addMessage($messageS);
            $message = $this->getNewPageService()->getMessage();
            return $this->redirect($this->generateUrl('page_single', array('messages' => $message)));
        }
        $message = $this->getNewPageService()->getMessage();

        return $this->render('AppBundle:newPage:single.html.twig',array(
            'messages' => $message,
        ));
    }

    public function singleDeleteAction(Request $request, $id)
    {
        $res = $this->getNewPageService()->deleteMessage($id);
        if ($res > 0 ) {
            return $this->createJsonResponse(array('status' => '1', 'msg' => '删除成功'));
        } else {
            return $this->createJsonResponse(array('status' => '0', 'msg' => '删除失败'));

        }
    }

    public function travelAction()
    {
        return $this->render('AppBundle:newPage:travel.html.twig');
    }

    public function blogAction()
    {
        return $this->render('AppBundle:newPage:blog.html.twig');
    }

    protected function getNewPageService()
    {
        return $this->getServiceKernel()->createService('AppBundle:NewPage.NewPageService');
    }
}