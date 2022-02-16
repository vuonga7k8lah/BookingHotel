<?php

use BookingHotel\Core\URL;

?>
<div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
    <div class="left__content">
        <div class="left__logo" style="text-align: center">Admin</div>
        <div class="left__profile">
            <div class="left__image"><img src="./assets/IMG/hotel.jpeg" alt=""></div>
        </div>
        <ul class="left__menu">
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/Admin/assets/icon-dashboard.svg" alt="">Dashboard<img
                            class="left__iconDown" src="./assets/Admin/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="<?= URL::uri('a.dashboard') ?>">DashBoard</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/Admin/assets/icon-user.svg" alt="">Users<img
                            class="left__iconDown" src="./assets/Admin/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="<?= URL::uri('a.listUser') ?>">List User</a>
                    <a class="left__link" href="<?= URL::uri('a.addUser') ?>">Add User</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/Admin/assets/icon-book.svg" alt="">Locations<img
                            class="left__iconDown" src="./assets/Admin/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="<?= URL::uri('a.listLocation') ?>">List Locations</a>
                    <a class="left__link" href="<?= URL::uri('a.addLocation') ?>">Add Locations</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/Admin/assets/icon-book.svg" alt="">Room<img
                            class="left__iconDown" src="./assets/Admin/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="<?= URL::uri('a.listRoom') ?>">List Room</a>
                    <a class="left__link" href="<?= URL::uri('a.addRoom') ?>">Add Room</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/Admin/assets/icon-book.svg" alt="">Hotel<img
                            class="left__iconDown" src="./assets/Admin/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="<?= URL::uri('a.listHotel') ?>">List Hotel</a>
                    <a class="left__link" href="<?= URL::uri('a.addHotel') ?>">Add Hotel</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/Admin/assets/icon-book.svg" alt="">Blog<img
                            class="left__iconDown" src="./assets/Admin/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="<?= URL::uri('a.listBlog') ?>">List Blog</a>
                    <a class="left__link" href="<?= URL::uri('a.addBlog') ?>">Add Blog</a>
                </div>
            </li>
            <li class="left__menuItem">
                <a href="<?=URL::uri('a.logout')?>" class="left__title"><img
                            src="./assets/Admin/assets/icon-logout.svg" alt="">Logout</a>
            </li>
        </ul>
    </div>
</div>
