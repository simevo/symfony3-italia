<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/c')) {
            // carousel
            if ('/carousel' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::carousel',  '_route' => 'carousel',);
            }

            // cookiebar
            if ('/cookiebar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::cookiebar',  '_route' => 'cookiebar',);
            }

            // comuni
            if ('/comuni' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::comuni',  '_route' => 'comuni',);
            }

        }

        // kitchen-sink
        if ('/kitchen-sink' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::kitchensink',  '_route' => 'kitchen-sink',);
        }

        // offcanvas
        if ('/offcanvas' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::offcanvas',  '_route' => 'offcanvas',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}