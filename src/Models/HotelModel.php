<?php

namespace App\Models;

class HotelModel
{
    private $db;

    /**
     * @param $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getHotelsDetails() {
        $query = $this->db->prepare("SELECT `id`,`hotel_name`,`location`,`cost_per_night`,`capacity` FROM `hotels` WHERE `capacity` > 0");
        $query->execute();
        return $query->fetchAll();
    }

    public function InsertBooking($dates, $id) {
        $query = $this->db->prepare("INSERT INTO `bookings`(`check_in`, `check_out`, `hotel_id`) VALUES (:check_in, :check_out, :id)");
        return $query->execute([':check_in' => $dates['check_in'],
        ':check_out' => $dates['check_in'], ':id' => $id['id']
            ]);
    }

    public function updateCapacity($id) {
        $query = $this->db->prepare("UPDATE `hotels` SET `capacity` = `capacity` -1 WHERE `id` = :id;");
        return $query->execute([':id' => $id['id']]);
    }

}