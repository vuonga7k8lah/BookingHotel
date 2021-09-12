<?php


namespace BookingHotel\Core;

use BookingHotel\Models\UserModel;
use Exception;
use Firebase\JWT\JWT;


trait TrainJWT
{
    private $key = 'vuongdttn-1998';

    /**
     * @throws Exception
     */
    public function verifyToken($token, $checkUser = false): bool
    {
        try {
            $oInfo = $this->decodeJWT($token);
            if ($checkUser) {
                return UserModel::isEmailExist($oInfo->email);
            } else {
                return UserModel::isEmailExist($oInfo->email);
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    public function decodeJWT($token): object
    {
        try {
            return JWT::decode($token, $this->key, ['HS256']);
        } catch (Exception $e) {
            echo HandleResponse::error($e->getMessage(), 401);
            die();
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

    public function getTokenHeaders(): string
    {
        $token = '';
        $headers = apache_request_headers();
        if (isset($headers['token'])) {
            $token = $headers['token'];
        }
        return $token;
    }
}