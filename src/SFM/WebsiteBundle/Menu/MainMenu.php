<?php

namespace SFM\WebsiteBundle\Menu;

use Knp\Bundle\MenuBundle\Menu;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;

class MainMenu extends Menu
{
    /**
     * @param Request $request
     * @param Router $router
     */
    public function __construct(Request $request, Router $router)
    {
        parent::__construct();

        $this->setCurrentUri($request->getRequestUri());

		$this->addChild('Inicio', $router->generate('inicio'));
        $this->addChild('Blog', $router->generate('blog'));
        $this->addChild('Proyectos', $router->generate('proyectos'));
        $this->addChild('Personas', $router->generate('personas'));
    }
}
