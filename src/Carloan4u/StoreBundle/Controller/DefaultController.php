<?php

namespace Carloan4u\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => "Mehdi");
    }
}
