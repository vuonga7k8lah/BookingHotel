<?php
return [
    'get'    => [
        ////-------------------Shop----------------------
        // Home
        ''                  => 'BookingHotel\Controllers\Shop\Home\HomeController@getView',
        ////----------------------API-----------
        //User
        'users'             => 'BookingHotel\Controllers\API\Users\UsersController@getUsers',
        'users/'            => 'BookingHotel\Controllers\API\Users\UsersController@getUser',
        //Hotel
        'hotels'            => 'BookingHotel\Controllers\API\Hotels\HotelsController@getHotels',
        'hotels/'           => 'BookingHotel\Controllers\API\Hotels\HotelsController@getHotel',
        //Location
        'locations'         => 'BookingHotel\Controllers\API\Location\LocationController@getLocations',
        'locations/'        => 'BookingHotel\Controllers\API\Location\LocationController@getLocation',
        ////----------------------Admin-----------
        //// Dashboard
        'a.dashboard'       => 'BookingHotel\Controllers\Admin\Dashboard\DashboardController@getView',
        //// login
        'a.login'           => 'BookingHotel\Controllers\Admin\Login\LoginController@getView',
        //// Hotels
        'a.addHotel'        => 'BookingHotel\Controllers\Admin\Hotel\HotelController@getAddView',
        'a.editHotel/'      => 'BookingHotel\Controllers\Admin\Hotel\HotelController@getEditView',
        'a.deleteHotel/'    => 'BookingHotel\Controllers\Admin\Hotel\HotelController@handleDelete',
        'a.listHotel'       => 'BookingHotel\Controllers\Admin\Hotel\HotelController@getListView',
        //// Locations
        'a.addLocation'     => 'BookingHotel\Controllers\Admin\Location\LocationController@getAddView',
        'a.editLocation/'   => 'BookingHotel\Controllers\Admin\Location\LocationController@getEditView',
        'a.deleteLocation/' => 'BookingHotel\Controllers\Admin\Location\LocationController@handleDelete',
        'a.listLocation'    => 'BookingHotel\Controllers\Admin\Location\LocationController@getListView',
    ],
    'post'   => [
        //API
        //User
        'users'          => 'BookingHotel\Controllers\API\Users\UsersController@createUser',
        'login'          => 'BookingHotel\Controllers\API\Users\UsersController@handleLogin',
        //Hotel
        'hotels'         => 'BookingHotel\Controllers\API\Hotels\HotelsController@createHotel',
        ////----------------------Admin-----------
        'a.login'        => 'BookingHotel\Controllers\Admin\Login\LoginController@handleLogin',
        //// Hotels
        'a.addHotel'     => 'BookingHotel\Controllers\Admin\Hotel\HotelController@handleAdd',
        'a.editHotel'    => 'BookingHotel\Controllers\Admin\Hotel\HotelController@handleEdit',
        //// Locations
        'a.addLocation'  => 'BookingHotel\Controllers\Admin\Location\LocationController@handleAdd',
        'a.editLocation' => 'BookingHotel\Controllers\Admin\Location\LocationController@handleEdit',
        //// upload
        'a.upload'       => 'BookingHotel\Controllers\Admin\Upload\UploadController@handleUpload',
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