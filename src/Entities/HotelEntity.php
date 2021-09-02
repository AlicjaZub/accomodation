<?php

namespace App\Entities;

class HotelEntity
{
    private $location;
    private $cost_per_night;
    private $capacity;

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }/**
     * @return mixed
     */
    public function getCostPerNight()
    {
        return $this->cost_per_night;
    }/**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }


}