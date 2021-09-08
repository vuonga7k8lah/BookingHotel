<?php

namespace BookingHotel\Controllers\API\Users;

use BookingHotel\Core\TrainJWT;

class UsersController
{
    use TrainJWT;
    public function getUsers($aData)
    {
        $token=$this->encodeJWT([
           'username'=>'vuong',
           'helo'=>'vuong1',
        ]);
        echo $token;
        echo '<br>';
        $verify=$this->decodeJWT($token);
        var_export($verify);
    }
}