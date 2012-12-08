<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // review
        if (rtrim($pathinfo, '/') === '/review') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'review');
            }
            return array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::indexAction',  '_route' => 'review',);
        }

        // review_show
        if (0 === strpos($pathinfo, '/review') && preg_match('#^/review/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::showAction',)), array('_route' => 'review_show'));
        }

        // review_new
        if ($pathinfo === '/review/new') {
            return array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::newAction',  '_route' => 'review_new',);
        }

        // review_create
        if ($pathinfo === '/review/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_review_create;
            }
            return array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::createAction',  '_route' => 'review_create',);
        }
        not_review_create:

        // review_edit
        if (0 === strpos($pathinfo, '/review') && preg_match('#^/review/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::editAction',)), array('_route' => 'review_edit'));
        }

        // review_update
        if (0 === strpos($pathinfo, '/review') && preg_match('#^/review/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_review_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::updateAction',)), array('_route' => 'review_update'));
        }
        not_review_update:

        // review_delete
        if (0 === strpos($pathinfo, '/review') && preg_match('#^/review/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_review_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::deleteAction',)), array('_route' => 'review_delete'));
        }
        not_review_delete:

        // dealership
        if (rtrim($pathinfo, '/') === '/dealership') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dealership');
            }
            return array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::indexAction',  '_route' => 'dealership',);
        }

        // dealership_show
        if (0 === strpos($pathinfo, '/dealership') && preg_match('#^/dealership/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::showAction',)), array('_route' => 'dealership_show'));
        }

        // dealership_new
        if ($pathinfo === '/dealership/new') {
            return array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::newAction',  '_route' => 'dealership_new',);
        }

        // dealership_create
        if ($pathinfo === '/dealership/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_dealership_create;
            }
            return array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::createAction',  '_route' => 'dealership_create',);
        }
        not_dealership_create:

        // dealership_edit
        if (0 === strpos($pathinfo, '/dealership') && preg_match('#^/dealership/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::editAction',)), array('_route' => 'dealership_edit'));
        }

        // dealership_update
        if (0 === strpos($pathinfo, '/dealership') && preg_match('#^/dealership/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_dealership_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::updateAction',)), array('_route' => 'dealership_update'));
        }
        not_dealership_update:

        // dealership_delete
        if (0 === strpos($pathinfo, '/dealership') && preg_match('#^/dealership/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_dealership_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::deleteAction',)), array('_route' => 'dealership_delete'));
        }
        not_dealership_delete:

        // carloan4u_store_default_index
        if (rtrim($pathinfo, '/') === '/hello') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'carloan4u_store_default_index');
            }
            return array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'carloan4u_store_default_index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
