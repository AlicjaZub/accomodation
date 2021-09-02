<?php

namespace App\Factories;

use App\Controller\HomePageController;
use Psr\Container\ContainerInterface;

class HomePageControllerFactory
{
    public function __invoke(ContainerInterface $container): HomePageController
    {
        $renderer = $container->get('renderer');
        return new HomePageController($renderer);
    }

}