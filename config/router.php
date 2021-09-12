<?php
return [
    'get'    => [
        //Shop
        // Home
        ''          => 'BookingHotel\Controllers\Shop\Home\HomeController@getView',
        //API
        //User
        'users'     => 'BookingHotel\Controllers\API\Users\UsersController@getUsers',
        'users/'     => 'BookingHotel\Controllers\API\Users\UsersController@getUser',
        'lecturers'  => 'ManageFile\Controller\LecturerController@getLecturers',
        'lecturers/' => 'ManageFile\Controller\LecturerController@getLecturers',
        'projects/'  => 'ManageFile\Controller\ManageFIleController@getProjects',
    ],
    'post'   => [
        //API
        //User
        'users'     => 'BookingHotel\Controllers\API\Users\UsersController@createUser',
        'login'     => 'BookingHotel\Controllers\API\Users\UsersController@handleLogin',
        'projects'  => 'ManageFile\Controller\ManageFIleController@createProject',
        'lecturers' => 'ManageFile\Controller\LecturerController@createLecturer',
    ],
    'put'    => [
        //API
        //User
        'users'     => 'BookingHotel\Controllers\API\Users\UsersController@updateUser',
        'lecturers' => 'ManageFile\Controller\LecturerController@updatelecturer',
    ],
    'delete' => [
        //API
        //User
        'users/'     => 'BookingHotel\Controllers\API\Users\UsersController@deleteUser',
        'projects'  => 'ManageFile\Controller\ManageFIleController@deleteProject',
        'lecturers' => 'ManageFile\Controller\LecturerController@deletelecturer',
    ]
];