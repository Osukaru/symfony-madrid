<?php

namespace SFM\WebsiteBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMenuPrincipal(Request $request)
    {
        $menu = $this->factory->createItem('root');
        $menu->setCurrentUri($request->getRequestUri());

		    $menu->addChild('Inicio', array('route' => 'inicio'));
        $menu->addChild('Blog', array('route' => 'blog'));
        $menu->addChild('Proyectos', array('route' => 'proyectos'));
        $menu->addChild('Personas', array('route' => 'personas'));


        return $menu;
    }
}
