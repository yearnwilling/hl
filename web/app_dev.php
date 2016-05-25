<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use AppBundle\Service\Common\ServiceKernel;

// If you don't want to setup permissions the proper way, just uncomment the following PHP line
// read http://symfony.com/doc/current/book/installation.html#checking-symfony-application-configuration-and-setup
// for more information
//umask(0000);

// This check prevents access to debug front controllers that are deployed by accident to production servers.
// Feel free to remove this, extend it, or make something more sophisticated.


/**
 * @var Composer\Autoload\ClassLoader $loader
 */
$loader = require __DIR__.'/../app/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();

$kernel->boot();

$serviceKernel = ServiceKernel::create($kernel->getEnvironment(), $kernel->isDebug());
$serviceKernel->setParameterBag($kernel->getContainer()->getParameterBag());
$serviceKernel->setConnection($kernel->getContainer()->get('database_connection'));

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
