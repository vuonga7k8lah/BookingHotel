<?php

use BookingHotel\Core\Request;
use BookingHotel\Core\URL;

$uri = Request::uri();
$aUri = explode('/', $uri);
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark <?= ($uri == 'profile') ? '' :
    'ftco-navbar-light' ?>" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= URL::uri() ?>">Hotel Eternity</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="<?= URL::uri() ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item active"><a href="<?= URL::uri('') ?>#room" class="nav-link">Rooms</a></li>
                <li class="nav-item active"><a href="" class="nav-link">About</a></li>
                <li class="nav-item active"><a href="<?= URL::uri('listBlog/') ?>" class="nav-link">Blog</a></li>
                <li class="nav-item active"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= isset($_SESSION['isUserLogin']) ? $_SESSION['hoTen'] : 'Account' ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= URL::uri('login') ?>">Login</a>
                        <?php if (isset($_SESSION['isUserLogin'])): ?>
                            <a class="dropdown-item" href="<?= URL::uri('profile') ?>">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= URL::uri('logout') ?>">Logout</a>
                        <?php endif; ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
