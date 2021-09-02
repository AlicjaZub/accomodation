<?php

namespace App\Controller;

use App\Models\HotelModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class HotelDetailsController
{
    private HotelModel $model;
    private PhpRenderer $renderer;

    /**
     * @param HotelModel $model
     * @param PhpRenderer $renderer
     */
    public function __construct(HotelModel $model, PhpRenderer $renderer)
    {
        $this->model = $model;
        $this->renderer = $renderer;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $hotels = $this->model->getHotelsDetails();
        return $this->renderer->render($response, 'hotelDetails.phtml', ['hotels'=>$hotels]);
    }

}