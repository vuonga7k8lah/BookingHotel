<?php

namespace BookingHotel\Models;

use BookingHotel\Database\DB;

class BlogModel
{
    public static function insert($aData)
    {
        $id = 0;
        $aDB = DB::Connect();
        $sql
            = "INSERT INTO `blogs`(`id`, `title`, `content`, `image`, `countView`, `createDate`) VALUES (null,'{$aData['title']}','{$aData['content']}','{$aData['image']}',0,null)";
        $status = $aDB->query($sql);
        if ($status) {
            $id = $aDB->insert_id;
        }
        return $id;
    }
    public static function delete($id){
        return DB::Connect()->query("DELETE FROM `blogs` WHERE id=".$id);
    }
    public static function getBlogs()
    {
        return DB::Connect()->query("SELECT * FROM blogs")->fetch_all();
    }

    public static function getCountBlogs(): int
    {
        return DB::Connect()->query("SELECT * FROM blogs")->num_rows;
    }

    public static function getCountViewByBlogID($blogID): int
    {
        $query = DB::Connect()->query("SELECT countView FROM blogs WHERE id={$blogID}")->fetch_assoc();
        return !empty($query['countView']) ?$query['countView']: 0;
    }

    public static function getBlog($blogID): ?array
    {
        return DB::Connect()->query("SELECT * FROM blogs WHERE id={$blogID}")->fetch_assoc();
    }

    public static function update($id, $aData)
    {
        $query = [];
        if ($aData['title'] ?? '') {
            $query[] = " title ='" . $aData['title'] . "'";
        }
        if ($aData['content'] ?? '') {
            $query[] = " content ='" . $aData['content'] . "'";
        }
        if ($aData['images'] ?? '') {
            $query [] = " image = '" . json_encode($aData['images']) . "'";
        }
        if ($aData['countView'] ?? '') {
            $query [] = " countView = " .$aData['countView'];
        }
        return DB::Connect()->query("UPDATE `blogs` SET " . implode(',', $query) .
            " WHERE id='" . $id . "'");
    }

    public static function getBlogsLimit(int $page = 1, int $limit = 6)
    {
        $start = ($page - 1) * $limit;
        return DB::Connect()->query("SELECT * FROM blogs LIMIT {$start},{$limit} ")->fetch_all();
    }
}
