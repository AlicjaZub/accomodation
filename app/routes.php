<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();


    $app->get('/hotels', 'HotelDetailsController');
    $app->get('/', 'HomePageController');
    $app->post('/hotels', 'InsertBookingController');

};
