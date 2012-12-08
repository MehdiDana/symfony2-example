<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'review' => true,
       'review_show' => true,
       'review_new' => true,
       'review_create' => true,
       'review_edit' => true,
       'review_update' => true,
       'review_delete' => true,
       'dealership' => true,
       'dealership_show' => true,
       'dealership_new' => true,
       'dealership_create' => true,
       'dealership_edit' => true,
       'dealership_update' => true,
       'dealership_delete' => true,
       'carloan4u_store_default_index' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getreviewRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/review/',  ),));
    }

    private function getreview_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/review',  ),));
    }

    private function getreview_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/review/new',  ),));
    }

    private function getreview_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/review/create',  ),));
    }

    private function getreview_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/review',  ),));
    }

    private function getreview_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/review',  ),));
    }

    private function getreview_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\ReviewController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/review',  ),));
    }

    private function getdealershipRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/dealership/',  ),));
    }

    private function getdealership_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dealership',  ),));
    }

    private function getdealership_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/dealership/new',  ),));
    }

    private function getdealership_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/dealership/create',  ),));
    }

    private function getdealership_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dealership',  ),));
    }

    private function getdealership_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dealership',  ),));
    }

    private function getdealership_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DealershipController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dealership',  ),));
    }

    private function getcarloan4u_store_default_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Carloan4u\\StoreBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/hello/',  ),));
    }
}
