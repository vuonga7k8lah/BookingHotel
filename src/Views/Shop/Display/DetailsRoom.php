<?php

use BookingHotel\Core\Request;
use BookingHotel\Core\URL;
use BookingHotel\Models\BlogModel;
use BookingHotel\Models\HotelModel;
use BookingHotel\Models\RoomModel;

require_once 'src/Views/Shop/header.php';
require_once 'src/Views/Shop/navigation.php';
$idRoom = Request::getIDOnURL();
$aRoom = RoomModel::getRoom($idRoom);
$aHotel = HotelModel::getHotel($aRoom['MaKS']);
$srcHotel = json_decode($aHotel['image'], true)[0];
$LatLng = explode(',',$aHotel['diaChi']);
?>
    <div class="hero-wrap" style="background-image: url(<?= $srcHotel ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2">Home</span> / <span><?= $aHotel['tenKS']
                                ?></span>
                        </p>
                        <h1 class="mb-4 bread"><?= $aHotel['tenKS'] ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="single-slider owl-carousel">
                                <?php
                                foreach (json_decode($aRoom['image'], true) as $image):
                                    ?>
                                    <div class="item">
                                        <div class="room-img" style="background-image: url(<?= $image ?>);"></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <h2 style="display: block;font-weight: bold;margin: 0 auto"><?= $aRoom['tenPhong'] ?></h2>
                        <div class="col-md-12 room-single mt-4 mb-5 ftco-animate" style="overflow: auto;height:
                        700px">
                            <?= $aRoom['content'] ?>
                        </div>
                        <form>
                            <input type="hidden" name="TenPhong" id="TenPhong" value="<?= $aHotel['tenKS'] ?>">
                            <input type="hidden" name="LatLng0" id="LatLng0" value="<?= trim($LatLng[0]) ?>">
                            <input type="hidden" name="LatLng1" id="LatLng1" value="<?= trim($LatLng[1]) ?>">
                        </form>
                        <?php include getcwd() . '/src/Views/Shop/Comment/ViewCommentRating.php'; ?>
                    </div>
                </div>
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <?php
                        if (\BookingHotel\Models\OrderModel::checkOrderRoom($idRoom)){
                            ?>
                            <button type="button" class="btn btn-lg btn-primary"
                                    style="display: block;margin:0
                        auto">Xin L???i Ph??ng ???? ???????c ?????t
                            </button>
                                <?php
                        }else{
                          ?>
                            <button type="button" id="btn-booking_<?= $aRoom['MaPhong'] ?>" class="btn btn-lg btn-primary"
                                    style="display: block;margin:0
                        auto">?????t Ngay
                            </button>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <section>
                            <div id='map_canvas' style="height: 400px"></div>
                            <div id="current">Nothing yet...</div>
                        </section>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        <?php $aBlogs = BlogModel::getBlogsLimit(1, 3);
                        foreach ($aBlogs as $item):
                            $src = (json_decode($item[3], true))[0] ?>
                            <div class="block-21 mb-4 d-flex">
                                <a class="<?= URL::uri('detailBlog/' . $item[0]) ?>"
                                   style="background-image: url(<?= $src ?>); width: 80px;height: 80px"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                                href="<?= URL::uri('detailBlog/' . $item[0]) ?>"><?= $item[1] ?></a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="<?= URL::uri('detailBlog/' . $item[0]) ?>"><span
                                                        class="icon-calendar"></span><?= date('M m, Y',
                                                    strtotime($item[5])) ?></a></div>
                                        <div><a href="<?= URL::uri('detailBlog/' . $item[0]) ?>"><span
                                                        class="icon-person"></span> Admin</a></div>
                                        <div><a href="<?= URL::uri('detailBlog/' . $item[0]) ?>"><span
                                                        class="icon-chat"></span><?= $item[4] ?></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">dish</a>
                            <a href="#" class="tag-cloud-link">menu</a>
                            <a href="#" class="tag-cloud-link">food</a>
                            <a href="#" class="tag-cloud-link">sweet</a>
                            <a href="#" class="tag-cloud-link">tasty</a>
                            <a href="#" class="tag-cloud-link">delicious</a>
                            <a href="#" class="tag-cloud-link">desserts</a>
                            <a href="#" class="tag-cloud-link">drinks</a>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                            necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente
                            consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
            <div class="modal fade" id="bookingModal_<?= $aRoom['MaPhong'] ?>" tabindex="-1"
                 aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header" style="display: block;margin: 0 auto">
                            <h5 class="modal-title">Chi Ti???t ?????t Ph??ng</h5>
                        </div>
<!--                        id="bookRoom_startDate"-->
                        <div class="modal-body modal-xl">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Ng??y ?????n</label>
                                            <div class="col-sm-10">
                                                <input type="text"  class="form-control checkin_date"
                                                       id="bookRoom_startDate"
                                                       value="<?= date('Y-m-d') ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Ng??y ??i</label>
                                            <div class="col-sm-10">
                                                <input type="text"  class="form-control checkout_date" id="bookRoom_endDate"
                                                       value="<?= date('Y-m-d', strtotime("+1 day")) ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Gi??</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="bookRoom_gia"
                                                       disabled
                                                       readonly
                                                       value="<?= $aRoom['gia'] ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">T??n
                                                    Ph??ng</label>
                                                <input type="hidden" id="bookRoom_idPhong"
                                                       value="<?= $aRoom['MaPhong'] ?>">
                                                <div class="col-sm-10">
                                                        <input type="text" id="bookRoom_tenPhong" disabled readonly
                                                           class="form-control"
                                                           value="<?= $aRoom['tenPhong'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="col-lg-12">
                                            <div class="room-wrap d-md-flex" style="height: 300px">
                                                <a href="" class="img"
                                                   style="background-image:url(<?= $srcHotel ?>);height: 300px;"></a>
                                                <div class="half left-arrow d-flex align-items-center">
                                                    <div class="text p-4 p-xl-5 text-center">
                                                        <p class="star mb-0"><span class="ion-ios-star">
                                                        <p class="star mb-0">
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star"></span>
                                                        </p>
                                                        <h3 class="mb-3"><?= $aHotel['tenKS'] ?></h3>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-12">
                                            <h2>Nh???p th??ng tin chi ti???t c???a b???n</h2>
                                            <form>
                                                <input name="xxx" id="bookRoom_isUserLogin" type="hidden" value="<?=
                                                isset($_SESSION['isUserLogin']) ? 'true' : 'false' ?>">
                                                <div class="mb-3">
                                                    <label for="bookRoom_email" class="form-label"
                                                           style="font-weight: bold">Email address</label>
                                                    <input type="email" name="email" class="form-control"
                                                           value="<?= isset($_SESSION['isUserLogin']) ?
                                                               $_SESSION['email'] : '' ?>"
                                                           required
                                                           id="bookRoom_email"
                                                           aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bookRoom_fullName" class="form-label"
                                                           style="font-weight: bold">H??? V?? T??n</label>
                                                    <input type="text" required name="fullName"
                                                           value=" <?= isset($_SESSION['isUserLogin']) ?
                                                               $_SESSION['hoTen'] : '' ?>"
                                                           class="form-control"
                                                           id="bookRoom_fullName">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="sdt" required class="form-label"
                                                           style="font-weight: bold">S???
                                                        ??i???n Tho???i</label>
                                                    <input type="number" name="sdt" class="form-control"
                                                           id="bookRoom_sdt">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bookRoom_request" class="form-label"
                                                           style="font-weight: bold">Y??u C???u ?????c Bi???t</label>
                                                    <div id="emailHelp" class="form-text">C??c y??u c???u ?????c bi???t kh??ng ?????m
                                                        b???o s??? ???????c ????p ???ng ??? tuy nhi??n, ch??? ngh??? s??? c??? g???ng h???t s???c ?????
                                                        th???c hi???n. B???n lu??n c?? th??? g???i y??u c???u ?????c bi???t sau khi ho??n t???t
                                                        ?????t ph??ng c???a m??nh!
                                                    </div>
                                                    <textarea name="request" class="form-control" id="bookRoom_request"
                                                              rows="3"></textarea>
                                                </div>
                                                <button type="submit" id="btn-submit-bookRoom" class="btn btn-primary"
                                                        style="display: block;
                                                margin: 0 auto;">Submit
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div id="bookRoomQRCode"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
require_once 'src/Views/Shop/footer.php';
