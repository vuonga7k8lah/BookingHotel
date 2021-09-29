<?php

namespace BookingHotel\Models;

use BookingHotel\Database\DB;

class CommentModel
{
    public static function insert($aData)
    {
        $connect = DB::Connect();
        $sql
            = "INSERT INTO `commentShop`(`MaCMMS`, `MaOrder`, `content`, `rating`, `createDate`) VALUES (null,'{$aData['MaOrder']}','{$aData['content']}','{$aData['rating']}',null)";
        $insert = $connect->query($sql);
        if ($insert) {
            return $connect->insert_id;
        }
        return 0;
    }
}