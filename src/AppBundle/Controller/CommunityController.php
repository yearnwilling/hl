<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/11/6
 * Time: 下午6:24
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\Common\Paginator;

class CommunityController extends BaseController
{
    public function indexAction(Request $request, $category = 'video')
    {
        $condition['category'] = $category;

        $paginator = new Paginator(
            $request,
            $this->getCommunityService()->searchCommunityCount($condition),
            5
        );

        $community = $this->getCommunityService()->searchCommunity(
            $condition,
            array('create_time', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('AppBundle:Community:index.html.twig', array(
            'communitys' => $community,
            'paginator' => $paginator,
            'category' => $category
        ));
    }

    public function memberAction(Request $request, $communityId)
    {
        $condition = array();
        $condition['community_id'] = $communityId;
        $name = $request->query->get('keyword');
        if (!empty($name)) {
            $condition['name'] = '%'.$name.'%';
        }
        $paginator = new Paginator(
            $request,
            $this->getMemberService()->searchMemberCount($condition),
            5
        );

        $member = $this->getMemberService()->searchMember(
            $condition,
            array('created_time', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('AppBundle:Community:member.html.twig', array(
            'members' => $member,
            'paginator' => $paginator,
            'communityId' => $communityId
        ));
    }

    public function memberAddAction(Request $request, $communityId)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $fields['community_id'] = $communityId;
            $this->getMemberService()->addMember($fields);
            return $this->createJsonResponse(true);
        }
        return $this->render('AppBundle:Community:member-show.html.twig', array(
            'type' => 'add',
            'communityId' => $communityId
        ));
    }

    public function memberEditAction(Request $request, $communityId, $id)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $this->getMemberService()->updateMember($id,$fields);
            return $this->createJsonResponse(true);
        }
        $member = $this->getMemberService()->getMemberById($id);
        return $this->render('AppBundle:Community:member-show.html.twig', array(
            'member' => $member,
            'type' => 'edit',
            'communityId' => $communityId
        ));
    }

    public function memberDeleteAction(Request $request, $id)
    {
        $this->getMemberService()->deleteMember($id);
        return $this->createJsonResponse(true);
    }

    public function activityAction(Request $request)
    {
        $condition = array();

        $paginator = new Paginator(
            $request,
            $this->getMemberService()->searchMemberCount($condition),
            5
        );

        $member = $this->getMemberService()->searchMember(
            $condition,
            array('created_time', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );
        return $this->render('AppBundle:Community:activity.html.twig', array(
        ));
    }

    public function activityAddAction(Request $request)
    {
        return $this->render('AppBundle:Community:activity-show.html.twig', array());
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

    protected function getCommunityService()
    {
        return $this->getServiceKernel()->createService('AppBundle:Community.CommunityService');
    }
}