<?php

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\Common\ServiceKernel;

/**
 * @var Composer\Autoload\ClassLoader
 */
$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../var/bootstrap.php.cache';

// Enable APC for autoloading to improve performance.
// You should change the ApcClassLoader first argument to a unique prefix
// in order to prevent cache key conflicts with other applications
// also using APC.
/*
$apcLoader = new Symfony\Component\ClassLoader\ApcClassLoader(sha1(__FILE__), $loader);
$loader->unregister();
$apcLoader->register(true);
*/

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();

$kernel->boot();

// START: init service kernel
$serviceKernel = ServiceKernel::create($kernel->getEnvironment(), $kernel->isDebug());
$serviceKernel->setEnvVariable(array(
    'host' => $request->getHttpHost(),
    'clientIp' => $request->getClientIp(),
    'schemeAndHost' => $request->getSchemeAndHttpHost(),
    'basePath' => $request->getBasePath(),
    'uri' => $request->getUri(),
    'baseUrl' =>  $request->getSchemeAndHttpHost() . $request->getBasePath(),
));
$serviceKernel->setParameterBag($kernel->getContainer()->getParameterBag());
$serviceKernel->registerModuleDirectory(dirname(__DIR__). '/plugins');
$connection = $kernel->getContainer()->get('database_connection');
$serviceKernel->setConnection($connection);
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
