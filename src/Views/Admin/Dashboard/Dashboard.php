<?php
//isUserLogin();
require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';
?>
    <div class="right">
        <div class="right__content" style="text-decoration: none">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Bảng điều khiển</p>
            <div class="right__cards" ">
                <a class="right__card" href="<?=\BookingHotel\Core\URL::uri('a.listHotel')?>">
                    <div class="right__cardTitle">Number Hotel</div>
                    <div class="right__cardNumber"><?=\BookingHotel\Models\DashboardModel::countHotel()?></div>
                    <div class="right__cardDesc">Detail
                        <img src="assets/Admin/assets/arrow-right.svg" alt="">
                    </div>
                </a>
                <a class="right__card" href="<?=\BookingHotel\Core\URL::uri('a.listRoom')?>">
                    <div class="right__cardTitle">Number Room</div>
                    <div class="right__cardNumber"><?=\BookingHotel\Models\DashboardModel::countRoom()?></div>
                    <div class="right__cardDesc">Detail <img src="assets/Admin/assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="<?=\BookingHotel\Core\URL::uri('a.listBlog')?>">
                    <div class="right__cardTitle">Number Blog</div>
                    <div class="right__cardNumber"><?=\BookingHotel\Models\DashboardModel::countBlog()?></div>
                    <div class="right__cardDesc">Detail<img src="assets/Admin/assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="<?=\BookingHotel\Core\URL::uri('a.listLocation')?>">
                    <div class="right__cardTitle">Number Location</div>
                    <div class="right__cardNumber"><?=\BookingHotel\Models\DashboardModel::countLocation()?></div>
                    <div class="right__cardDesc">Detail<img src="assets/Admin/assets/arrow-right.svg" alt=""></div>
                </a>
            </div>
        </div>
    </div>
<?php
require_once 'src/Views/Admin/footer.php';
