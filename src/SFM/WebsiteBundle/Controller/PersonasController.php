<?php

namespace SFM\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PersonasController extends Controller
{
    /**
     * @Route("/personas", name="personas")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
