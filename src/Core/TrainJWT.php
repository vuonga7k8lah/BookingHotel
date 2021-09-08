<?php


namespace BookingHotel\Core;

use Exception;
use Firebase\JWT\JWT;


trait TrainJWT
{
    private $key = 'vuongdttn-1998';

    public function verifyToken($token,$checkUser=false): bool
    {
        try {
            $oInfo = $this->decodeJWT($token);
            if ($checkUser){
                return UserModel::isUserExist($oInfo->userName);
            }else{
                return UserModel::isUserAdmin($oInfo->userName);
            }
        } catch (Exception $e) {
            echo HandleResponse::error( $e->getMessage(),401);die();
        }
    }

    public function decodeJWT($token): object
    {
        try {
            return JWT::decode($token, $this->key, ['HS256']);
        }catch (Exception $e) {
           echo HandleResponse::error($e->getMessage(),401);die();
        }
    }

    /*
     * $time tính theo giờ
     */

    public function encodeJWT($aData): string
    {
        return JWT::encode($aData, $this->key);
    }

    public function setTime($time = ''): TrainJWT
    {
        JWT::$leeway = (!empty($time)) ? $time * 60 * 60 : 864000;
        return $this;
    }
}