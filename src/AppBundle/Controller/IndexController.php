<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\Common\Paginator;


class IndexController extends BaseController
{
    public function indexAction(Request $request)
    {
        $condition = array();

        $paginator = new Paginator(
            $request,
            $this->getMemoService()->searchMemoCount($condition),
            5
        );

        $Memo = $this->getMemoService()->searchMemo(
            $condition,
            array('created_time', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('AppBundle:index:index.html.twig', array(
            'memos' => $Memo,
            'paginator' => $paginator
        ));
    }

    public function memoAddAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $memo = $request->request->all();
            $this->getMemoService()->addMemo($memo);
            return $this->createJsonResponse(true);
        }
        return $this->render('AppBundle:index:memo-show.html.twig', array(
            'type' => 'add',

        ));
    }

    public function memoEditAction(Request $request, $id)
    {
        if ($request->getMethod() == 'POST') {
            $memo = $request->request->all();
            $this->getMemoService()->updateMemo($id, $memo);
            return $this->createJsonResponse(true);
        }
        $memo = $this->getMemoService()->getMemo($id);
        return $this->render('AppBundle:index:memo-show.html.twig', array(
            'type' => 'edit',
            'memo' => $memo
        ));
    }

    public function memoDeleteAction($id)
    {
        $this->getMemoService()->deleteMemo($id);
        return $this->createJsonResponse(true);
    }

    protected function getMemoService()
    {
        return $this->getServiceKernel()->createService('AppBundle:Memo.MemoService');
    }
}
