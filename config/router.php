<?php
return [
    'get'    => [
        ////-------------------Shop----------------------
        // Home
        ''        => 'BookingHotel\Controllers\Shop\Home\HomeController@getView',
        ////----------------------API-----------
        //User
        'users'   => 'BookingHotel\Controllers\API\Users\UsersController@getUsers',
        'users/'  => 'BookingHotel\Controllers\API\Users\UsersController@getUser',
        //Hotel
        'hotels'  => 'BookingHotel\Controllers\API\Hotels\HotelsController@getHotels',
        'hotels/' => 'BookingHotel\Controllers\API\Hotels\HotelsController@getHotel',
        ////----------------------Admin-----------
        'a.dashboard'   => 'BookingHotel\Controllers\Admin\Dashboard\DashboardController@getView',
    ],
    'post'   => [
        //API
        //User
        'users'  => 'BookingHotel\Controllers\API\Users\UsersController@createUser',
        'login'  => 'BookingHotel\Controllers\API\Users\UsersController@handleLogin',
        //Hotel
        'hotels' => 'BookingHotel\Controllers\API\Hotels\HotelsController@createHotel',
    ],
    'put'    => [
        //API
        //User
        'users'  => 'BookingHotel\Controllers\API\Users\UsersController@updateUser',
        //Hotel
        'hotels' => 'BookingHotel\Controllers\API\Hotels\HotelsController@updateHotel',
    ],
    'delete' => [
        //API
        //User
        'users/'  => 'BookingHotel\Controllers\API\Users\UsersController@deleteUser',
        //Hotel
        'hotels/' => 'BookingHotel\Controllers\API\Hotels\HotelsController@deleteHotel',
    ]
];