<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'default');
            }

            return array (  '_controller' => 'Diabetes\\PortalBundle\\Controller\\HomeController::homeAction',  '_route' => 'default',);
        }

        // portal_homepage
        if ($pathinfo === '/user') {
            return array (  '_controller' => 'Diabetes\\PortalBundle\\Controller\\HomeController::homeAction',  '_route' => 'portal_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // portal_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Diabetes\\PortalBundle\\Controller\\SecurityController::loginAction',  '_route' => 'portal_login',);
                }

                // portal_login_check
                if ($pathinfo === '/loginCheck') {
                    return array('_route' => 'portal_login_check');
                }

            }

            // portal_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'portal_logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
