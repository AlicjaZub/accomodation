<?php

namespace App\ViewHelper;



class HotelDetailsViewHelper
{
    public static function displayHotels($hotels): string
    {
        $output = '';

        foreach ($hotels as $hotel) {
            $output .= "<div>
                <h1>{$hotel['hotel_name']}</h1>
                <p>{$hotel['location']}</p>
                <p>cost: {$hotel['cost_per_night']}</p>
                <p>capacity: {$hotel['capacity']}</p>
                <button type='button' value='{$hotel['id']}' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Book Now!</button>
            </div>";
        }

        return $output;
    }

}

