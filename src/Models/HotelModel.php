<?php

namespace BookingHotel\Models;

use BookingHotel\Database\DB;

class HotelModel
{
    public static function insert($aData): int
    {
        $DB = DB::Connect();
        $query
            = $DB->query("INSERT INTO `hotels`(`MaKS`, `tenKS`, `diaChi`, `tenMien`, `email`, `website`, `createDate`) VALUES (null,'" .
            $aData['tenKS'] . "','" . $aData['diaChi'] . "','" . $aData['tenMien'] . "','" . $aData['email'] .
            "','" . $aData['website'] . "',null)");
        return ($query) ? $DB->insert_id : 0;
    }

    public static function getHotels()
    {
        return DB::Connect()->query("SELECT * FROM hotels")->fetch_all();
    }

    public static function getHotel($id): ?array
    {
        $sql = "SELECT * FROM hotels WHERE MaKS = " . $id;
        return DB::Connect()->query($sql)->fetch_assoc();
    }
    public static function update($MaKS, $aData)
    {
        $query = [];
        if ($aData['tenKS'] ?? '') {
            $query[] = " tenKS ='" . $aData['tenKS'] . "'";
        }
        if ($aData['diaChi'] ?? '') {
            $query[] = " diaChi ='" . $aData['diaChi'] . "'";
        }
        if ($aData['tenMien'] ?? '') {
            $query [] = " tenMien = '" . $aData['tenMien'] . "'";
        }
        if ($aData['email'] ?? '') {
            $query [] = " email = '" . $aData['email'] . "'";
        }
        if ($aData['website'] ?? '') {
            $query [] = " website = '" . $aData['website'] . "'";
        }
        return DB::Connect()->query("UPDATE `hotels` SET " . implode(',', $query) .
            ",`createDate`=null WHERE MaKS='" . $MaKS . "'");
    }
    public static function delete($MaKS)
    {
        return DB::Connect()->query("DELETE FROM `hotels` WHERE MaKS='" . $MaKS . "'");
    }
    public static function isEmailExist($email): bool
    {
        return !empty(self::getIDWithEmail($email));
    }

    public static function getIDWithEmail($email): int
    {
        $result = DB::Connect()->query("SELECT MaKS FROM hotels WHERE email='" . $email . "'");
        return ($result->num_rows > 0) ? ($result->fetch_assoc())['MaKS'] : 0;
    }

}