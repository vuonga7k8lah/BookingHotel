<?php

namespace ManageFile\Models;

use ManageFile\Database\DB;

class ExcelModels
{
    public static function insert($Data)
    {
        $sql = "INSERT INTO `infoSV`(`ID`, `MaSV`, `TenSV`, `DiaChi`, `SDT`, `TenLop`, `CreateDate`) VALUES (null,'" .
            $Data['MaSV'] . "','" . $Data['TenSV'] . "','" . $Data['DiaChi'] . "','" . $Data['SDT'] . "','" .
            $Data['TenLop'] . "',null)";
        return DB::Connect()->query($sql);
    }
}