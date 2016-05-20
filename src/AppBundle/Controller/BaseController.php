<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Service\Common\ServiceKernel;
//use Topxia\Service\User\CurrentUser;
//use Topxia\Service\Common\AccessDeniedException;

abstract class BaseController extends Controller
{
    protected function getServiceKernel()
    {
        return ServiceKernel::instance();
    }

    protected function createJsonResponse($data)
    {
        return new JsonResponse($data);
    }
}
