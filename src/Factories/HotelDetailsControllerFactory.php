<?php

namespace App\Factories;

use App\Controller\HotelDetailsController;
use Psr\Container\ContainerInterface;

class HotelDetailsControllerFactory
{

    public function __invoke(ContainerInterface $container): HotelDetailsController
    {
       $model = $container->get('HotelModel');
        $renderer = $container->get('renderer');
        return new HotelDetailsController($model, $renderer);

    }

}