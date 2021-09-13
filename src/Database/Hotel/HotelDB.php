<?php

namespace BookingHotel\Database\Hotel;

use BookingHotel\Database\DB;

class HotelDB
{
    public function __construct()
    {
        $this->createTableHotel();
    }

    public function createTableHotel(): bool
    {
        $sql = "CREATE TABLE IF NOT EXISTS hotels (
  MaKS int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  tenKS text NOT NULL,
  diaChi text NOT NULL,
  tenMien text NOT NULL,
  email text NOT NULL,
  website text NOT NULL,
  createDate timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (MAKS)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        DB::Connect()->query($sql);
        return true;
    }
}