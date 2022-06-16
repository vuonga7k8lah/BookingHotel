<?php

namespace BookingHotel\Models;

use BookingHotel\Database\DB;

class OrderModel
{
	public static function insert($aData)
	{
		$connect = DB::Connect();
		$sql
			= "INSERT INTO `orders`(`MaOrder`, `MaPhong`, `MaUser`, `info`, `startDate`, `endDate`, `gia`, `createDate`) VALUES (null,'" .
			$aData['MaPhong'] . "','" . $aData['MaUser'] . "','" . $aData['info'] . "','" . $aData['startDate'] .
			"','" . $aData['endDate'] . "'," . $aData['gia'] . ",null)";
		$insert = $connect->query($sql);
		if ($insert) {
			return $connect->insert_id;
		}
		return 0;
	}

	public static function checkUserOrderRoom($userID, $roomID): bool
	{
		$query = self::getOrderIDWithUserIDAndRoomID($userID, $roomID);
		return !empty($query);
	}

	public static function checkOrderRoom($roomID): bool
	{
		$query = DB::Connect()->query("SELECT MaOrder FROM orders WHERE MaPhong= '" .
			$roomID . "'");
		return $query->num_rows > 0;
	}

	public static function deleteOrder($maOrder): bool
    {
        $query = DB::Connect()->query("DELETE FROM orders WHERE MaOrder=".$maOrder);
        return !empty($query);
    }

	public static function getOrderIDWithUserIDAndRoomID($userID, $roomID)
	{
		$query = DB::Connect()->query("SELECT MaOrder FROM orders WHERE MaUser=" . $userID . " AND MaPhong= '" .
			$roomID . "'")->fetch_assoc();
		return !empty($query) ? $query['MaOrder'] : 0;
	}

	public static function getListRoomOrderBetweenDate(string $startDate, string $endDate)
	{
		$sql = "SELECT DISTINCT MaPhong FROM orders WHERE DATE(startDate) BETWEEN '{$startDate}' AND '{$endDate}'";
		$query = DB::Connect()->query($sql)->fetch_all();
		return is_array($query) ? $query : [];
	}

	public static function getListOrderByUserID($userID)
	{
		$sql
			= "SELECT hotels.tenKS,rooms.tenPhong,orders.gia,orders.startDate,orders.endDate,users.qrcode,orders.MaOrder FROM orders JOIN users ON orders.MaUser=users.ID JOIN rooms on orders.MaPhong=rooms.MaPhong JOIN hotels ON rooms.MaKS=hotels.MaKS WHERE orders.MaUser={$userID}";
		$query = DB::Connect()->query($sql)->fetch_all();
		return is_array($query) ? $query : [];
	}

	public static function getListOrderBy()
	{
		$query = DB::Connect()->query("SELECT * FROM orders")->fetch_all();
		return is_array($query) ? $query : [];
	}
}
