<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/11/6
 * Time: 下午6:24
 */

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class CommunityController extends BaseController
{
    public function memberAction(Request $request)
    {
        $member = $this->getMemberService()->findAllMember();
        return $this->render('AppBundle:Community:member.html.twig', array(
            'members' => $member
        ));
    }

    public function memberAddAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $this->getMemberService()->addMember($fields);
            return $this->createJsonResponse(true);
        }
        return $this->render('AppBundle:Community:member-show.html.twig', array(
            'type' => 'add'
        ));
    }

    public function memberEditAction(Request $request, $id)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $this->getMemberService()->updateMember($id,$fields);
            return $this->createJsonResponse(true);
        }
        $member = $this->getMemberService()->getMemberById($id);
        return $this->render('AppBundle:Community:member-show.html.twig', array(
            'member' => $member,
            'type' => 'edit'
        ));
    }

    public function memberDeleteAction(Request $request, $id)
    {
        $member = $this->getMemberService()->deleteMember($id);
        return $this->createJsonResponse(true);
    }

    public function activityAction(Request $request)
    {
        return $this->render('AppBundle:Community:activity.html.twig', array(
        ));
    }

    public function moneyAction(Request $request, $type = 'in')
    {
        return $this->render('AppBundle:Community:money.html.twig', array(
            'type' => $type
        ));
    }

    protected function getMemberService()
    {
        return $this->getServiceKernel()->createService('AppBundle:Community.MemberService');
    }
}