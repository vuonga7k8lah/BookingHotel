<?php

namespace BookingHotel\Controllers\Shop\Display;

class DisplayController
{
    public function getListHotel()
    {
        return include('src/Views/Shop/Display/ListHotels.php');
    }

    public function getDetailsRoom()
    {
        return include('src/Views/Shop/Display/DetailsRoom.php');
    }
}