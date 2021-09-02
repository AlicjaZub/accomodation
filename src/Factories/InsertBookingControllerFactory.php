<?php

namespace App\Factories;

use App\Controller\InsertBookingController;

class InsertBookingControllerFactory
{
    public function __invoke($container) {
        $model = $container->get('HotelModel');
        return new InsertBookingController($model);
    }
}