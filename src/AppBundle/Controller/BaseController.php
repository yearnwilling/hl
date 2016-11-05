<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Service\Common\ServiceKernel;

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
