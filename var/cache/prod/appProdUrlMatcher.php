<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // new_page
        if ($pathinfo === '/newpage') {
            return array (  '_controller' => 'AppBundle\\Controller\\NewPageController::indexAction',  '_route' => 'new_page',);
        }

        // page_study
        if ($pathinfo === '/study') {
            return array (  '_controller' => 'AppBundle\\Controller\\NewPageController::studyAction',  '_route' => 'page_study',);
        }

        // page_photo
        if ($pathinfo === '/photo') {
            return array (  '_controller' => 'AppBundle\\Controller\\NewPageController::photoAction',  '_route' => 'page_photo',);
        }

        if (0 === strpos($pathinfo, '/single')) {
            // page_single
            if ($pathinfo === '/single') {
                return array (  '_controller' => 'AppBundle\\Controller\\NewPageController::singleAction',  '_route' => 'page_single',);
            }

            // page_single_delete
            if (0 === strpos($pathinfo, '/single/delete') && preg_match('#^/single/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_page_single_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_single_delete')), array (  '_controller' => 'AppBundle\\Controller\\NewPageController::singleDeleteAction',));
            }
            not_page_single_delete:

        }

        // page_travel
        if ($pathinfo === '/travel') {
            return array (  '_controller' => 'AppBundle\\Controller\\NewPageController::travelAction',  '_route' => 'page_travel',);
        }

        // page_blog
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'AppBundle\\Controller\\NewPageController::blogAction',  '_route' => 'page_blog',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
