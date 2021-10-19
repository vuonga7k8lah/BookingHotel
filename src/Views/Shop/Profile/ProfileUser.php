<?php
require_once 'src/Views/Shop/header.php';
require_once 'src/Views/Shop/navigation.php';
$aUser=\BookingHotel\Models\UserModel::getUserWithID($_SESSION['userID']);
?>
    <div class="container">
            <div class="main-body">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=\BookingHotel\Core\URL::uri('')?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
                <!-- /Breadcrumb -->

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                         class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4><?=$aUser['hoTen']?></h4>
                                        <p class="text-secondary mb-1"><?=$aUser['email']?></p>
                                        <button class="btn btn-primary">Follow</button>
                                        <button class="btn btn-outline-primary">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?=$aUser['hoTen']?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?=$aUser['email']?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">username</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?=$aUser['username']?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row gutters-sm">
                            <?php
                            $aOrder=\BookingHotel\Models\OrderModel::getListOrderByUserID($_SESSION['userID']);
                           foreach ($aOrder as $aItem):
                            ?>
                            <div class="col-sm-6 mb-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?=$aItem['5']?>" alt="<?=$aItem[1]?>">
                                    <div class="card-body">
                                        <h5 class="card-title">Tên Khách Sạn:<?=$aItem[0]?></h5>
                                        <h6 class="card-title">Ngày Đến:<?=$aItem[3]?></h6>
                                        <h6 class="card-title">Ngày Trả:<?=$aItem[4]?></h6>
                                        <p class="card-text">Tên Phòng:<?=$aItem[1]?></p>
                                        <p href="#" class="btn btn-primary" style="display: block;margin: 0 auto">Giá:
                                            <?=$aItem[2]?></p>
                                    </div>
                                </div>
                            </div>
                           <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
require_once 'src/Views/Shop/footer.php';
