<?php

namespace BookingHotel\Controllers\API\Order;

use BookingHotel\Core\HandleResponse;
use BookingHotel\Core\TrainJWT;
use BookingHotel\Models\OrderModel;
use BookingHotel\Shares\TrainGetTokenHeader;
use Exception;

class OrderAPIController
{
    use TrainGetTokenHeader, TrainJWT;

    public function getOrderUser()
    {
        $aData = [];
        $token = $this->getTokenHeaders();
        try {
            if ($this->verifyToken($token, true)) {
                $userID = ($this->decodeJWT($token))->ID;
                $aOrder = OrderModel::getListOrderByUserID($userID);
                foreach ($aOrder as $aItem) {
                    $aData[] = [
                        'tenKS'     => $aItem[0],
                        'tenPhong'  => $aItem[1],
                        'gia'       => $aItem[2],
                        'startDate' => $aItem[3],
                        'endDate'   => $aItem[4],
                        'qrcode'    => $aItem[5],
                    ];
                }
                echo HandleResponse::success('list data', $aData);
            } else {
                throw new Exception('Sorry,User not access', 401);
            }
        } catch (Exception $exception) {
            echo HandleResponse::error($exception->getMessage(), $exception->getCode());
        }
    }

    public function getAllOrder()
    {
        $aOrder = OrderModel::getListOrderBy();
        foreach ($aOrder as $aItem) {
            $aData[] = [
                'MaOrder'    => $aItem[0],
                'MaPhong'    => $aItem[1],
                'MaUser'     => $aItem[2],
                'info'       => json_decode($aItem[3], true),
                'startDate'  => $aItem[4],
                'endDate'    => $aItem[5],
                'gia'        => $aItem[6],
                'createDate' => $aItem[7],
            ];
        }
        echo HandleResponse::success('list data', $aData);
    }
}
