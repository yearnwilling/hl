<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/11/6
 * Time: 下午6:24
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommunityController extends Controller
{
    public function memberAction(Request $request)
    {
        return $this->render('AppBundle:Community:member.html.twig', array(
        ));
    }

    public function activityAction(Request $request)
    {
        return $this->render('AppBundle:Community:activity.html.twig', array(
        ));
    }
}