<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/11/6
 * Time: 下午6:24
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommunityController extends Controller
{
    public function memberAction()
    {
        return $this->render('AppBundle:Community:member.html.twig', array(
        ));
    }
}