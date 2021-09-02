<?php

namespace App\Controller;

use App\Models\HotelModel;

class InsertBookingController
{
    private HotelModel $model;

    /**
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args) {

        $dates = $request->getQueryParams();
        $details = $request->getParsedBody();
        var_dump($details);
        exit;
        $this->model->InsertBooking($dates, $details['check_in']);
        $this->model->updateCapacity($details['id']);
        return $response->withheader('Location', '/hotels?booking=1');
    }

}