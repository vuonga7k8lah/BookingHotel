<?php

namespace BookingHotel\Controllers\Shop\Profile;

class ProfileController
{
    public function getView()
    {
        include './src/Views/Shop/Profile/ProfileUser.php';
    }
}