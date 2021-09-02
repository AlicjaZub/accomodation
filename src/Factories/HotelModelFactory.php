<?php

namespace App\Factories;



use App\Models\HotelModel;

class HotelModelFactory
{
    public function __invoke($container): HotelModel
    {
        $db = $container->get('db');
        return new HotelModel($db);
    }
}