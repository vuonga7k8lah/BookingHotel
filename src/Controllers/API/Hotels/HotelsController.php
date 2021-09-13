<?php

namespace BookingHotel\Controllers\API\Hotels;

use BookingHotel\Core\HandleResponse;
use BookingHotel\Core\TrainJWT;
use BookingHotel\Models\HotelModel;
use BookingHotel\Shares\TrainGetTokenHeader;
use Exception;

class HotelsController
{
    use TrainGetTokenHeader, TrainJWT;

    public function getHotel($aData)
    {
        echo HandleResponse::success('data hotel', HotelModel::getHotel($aData['ID']));
    }

    public function getHotels()
    {
        $aData = [];
        $aHotel = HotelModel::getHotels();
        foreach ($aHotel as $aItem) {
            $aData[] = [
                'tenKS'      => $aItem[1],
                'diaChi'     => $aItem[2],
                'tenMien'    => $aItem[3],
                'email'      => $aItem[4],
                'website'    => $aItem[5],
                'createDate' => $aItem[6],
            ];
        }
        echo HandleResponse::success('list hotels', $aData);
    }

    public function createHotel()
    {
        $aData = $_POST;
        $aData['token'] = $this->getTokenHeaders();
        try {
            if (checkDataIsset(['tenKS', 'diaChi', 'tenMien', 'email', 'website'], $aData)) {
                if (checkDataEmpty($aData)) {
                    if (!HotelModel::isEmailExist($aData['email'])) {
                        if ($this->verifyToken($aData['token'])) {
                            $status = HotelModel::insert($aData);
                            if ($status) {
                                echo HandleResponse::success('create the hotel successfully');
                            } else {
                                throw new Exception('create the hotel errors', 401);
                            }
                        }
                    } else {
                        throw new Exception('Sorry,the email is exist');
                    }
                }
            }
        } catch (Exception $exception) {
            echo HandleResponse::error($exception->getMessage(), $exception->getCode());
        }
    }

    public function updateHotel($aData)
    {
        $aData['token'] = $this->getTokenHeaders();
        try {
            if (checkDataEmpty($aData)) {
                if (checkDataIsset(['MaKS'], $aData)) {
                    if ($this->verifyToken($aData['token'])) {
                        if (!HotelModel::isEmailExist($aData['email'])) {
                            $status = HotelModel::update($aData['MaKS'], $aData);
                            if ($status) {
                                echo HandleResponse::success('The hotel is update successfully');
                            } else {
                                throw new Exception('The hotel is update not successfully', 401);
                            }
                        } else {
                            throw new Exception('Sorry,the email is exist');
                        }
                    }
                }
            }
        } catch (Exception $exception) {
            echo HandleResponse::error($exception->getMessage(), $exception->getCode());
        }
    }

    public function deleteHotel($aData)
    {
        $aData['token'] = $this->getTokenHeaders();
        try {
            if (checkDataEmpty($aData)) {
                if ($this->verifyToken($aData['token'])) {
                    $status = HotelModel::delete($aData['ID']);
                    if ($status) {
                        echo HandleResponse::success('The hotel is delete successfully');
                    } else {
                        throw new Exception('The hotel is delete not successfully', 401);
                    }
                }
            }
        } catch (Exception $exception) {
            echo HandleResponse::error($exception->getMessage(), $exception->getCode());
        }
    }
}