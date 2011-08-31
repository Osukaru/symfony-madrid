<?php

namespace SFM\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ProyectosController extends Controller
{
    /**
     * @Route("/proyectos", name="proyectos")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
