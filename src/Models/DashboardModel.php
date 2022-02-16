<?php

namespace BookingHotel\Models;

use BookingHotel\Database\DB;

class DashboardModel
{
    public static function countHotel(): ?int
    {
        $query = DB::Connect()->query("SELECT count(MaKS) as total FROM hotels");
        return !empty($query) ? ($query->fetch_assoc())['total'] : 0;
    }
    public static function countRoom(): ?int
    {
        $query = DB::Connect()->query("SELECT count(MaPhong) as total FROM rooms");
        return !empty($query) ? ($query->fetch_assoc())['total'] : 0;
    }
    public static function countBlog(): ?int
    {
        $query = DB::Connect()->query("SELECT count(id) as total FROM blogs");
        return !empty($query) ? ($query->fetch_assoc())['total'] : 0;
    }
    public static function countLocation(): ?int
    {
        $query = DB::Connect()->query("SELECT count(MaDD) as total FROM locations");

        return !empty($query) ? ($query->fetch_assoc())['total'] : 0;
    }
}
