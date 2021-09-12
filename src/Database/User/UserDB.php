<?php

namespace BookingHotel\Database\User;

use BookingHotel\Database\DB;

class UserDB
{
    protected string $tblName = 'users';

    public function __construct()
    {
        $this->createTableUser();
    }

    public function createTableUser()
    {
        $sql = "CREATE TABLE IF NOT EXISTS users (
  ID int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  hoTen text NOT NULL,
  username text NOT NULL,
  password varchar(100) NOT NULL,
  ngaySinh date NOT NULL,
  CMT varchar(11) NOT NULL,
  diaChi text NOT NULL,
  level int(11) NOT NULL DEFAULT 1,
  token text NOT NULL,
  email text NOT NULL,
  code text DEFAULT NULL,
  createDate timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        return DB::Connect()->query($sql);
    }
}