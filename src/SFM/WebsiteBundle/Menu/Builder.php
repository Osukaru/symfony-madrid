<?php
namespace SFM\WebsiteBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function menuPrincipal(FactoryInterface $factory)
    {
        $menu = $factory->createItem('root');
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());

		    $menu->addChild('Inicio', array('route' => 'inicio'));
        $menu->addChild('Blog', array('route' => 'blog'));
        $menu->addChild('Proyectos', array('route' => 'proyectos'));
        $menu->addChild('Personas', array('route' => 'personas'));

        return $menu;
    }
}
