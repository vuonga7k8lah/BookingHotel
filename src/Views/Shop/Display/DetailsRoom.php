<?php

use BookingHotel\Core\Request;
use BookingHotel\Models\HotelModel;
use BookingHotel\Models\RoomModel;

require_once 'src/Views/Shop/header.php';
require_once 'src/Views/Shop/navigation.php';
$idRoom = Request::getIDOnURL();
$aRoom = RoomModel::getRoom($idRoom);
$aHotel = HotelModel::getHotel($aRoom['MaKS']);
$srcHotel = json_decode($aHotel['image'], true)[0]
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


                        <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                            <div class="container">
                                <div class="col-md-12">
                                    <div class="offer-dedicated-body-left">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade" id="pills-order-online" role="tabpanel"
                                                 aria-labelledby="pills-order-online-tab">
                                                <div id="#menu"
                                                     class="bg-white rounded shadow-sm p-4 mb-4 explore-outlets">
                                                    <h5 class="mb-4">Recommended</h5>
                                                    <form class="explore-outlets-search mb-4">
                                                        <div class="input-group">
                                                            <input type="text" placeholder="Search for dishes..."
                                                                   class="form-control">
                                                            <div class="input-group-append">
                                                                <button type="button" class="btn btn-link">
                                                                    <i class="icofont-search"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <h6 class="mb-3">Most Popular <span class="badge badge-success"><i
                                                                    class="icofont-tags"></i> 15% Off All Items </span>
                                                    </h6>
                                                    <div class="owl-carousel owl-theme owl-carousel-five offers-interested-carousel mb-3 owl-loaded owl-drag owl-hidden">

                                                        <div class="owl-stage-outer">
                                                            <div class="owl-stage"
                                                                 style="transform: translate3d(-682px, 0px, 0px); transition: all 0s ease 0s; width: 2183px;">
                                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/2.png">
                                                                                <h6>Sandwiches</h6>
                                                                                <small>8 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/3.png">
                                                                                <h6>Soups</h6>
                                                                                <small>2 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/4.png">
                                                                                <h6>Pizzas</h6>
                                                                                <small>56 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/5.png">
                                                                                <h6>Pastas</h6>
                                                                                <small>10 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/6.png">
                                                                                <h6>Chinese</h6>
                                                                                <small>25 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/1.png">
                                                                                <h6>Burgers</h6>
                                                                                <small>5 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/2.png">
                                                                                <h6>Sandwiches</h6>
                                                                                <small>8 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/3.png">
                                                                                <h6>Soups</h6>
                                                                                <small>2 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/4.png">
                                                                                <h6>Pizzas</h6>
                                                                                <small>56 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/5.png">
                                                                                <h6>Pastas</h6>
                                                                                <small>10 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/6.png">
                                                                                <h6>Chinese</h6>
                                                                                <small>25 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/1.png">
                                                                                <h6>Burgers</h6>
                                                                                <small>5 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/2.png">
                                                                                <h6>Sandwiches</h6>
                                                                                <small>8 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/3.png">
                                                                                <h6>Soups</h6>
                                                                                <small>2 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/4.png">
                                                                                <h6>Pizzas</h6>
                                                                                <small>56 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                                    <div class="item">
                                                                        <div class="mall-category-item">
                                                                            <a href="#">
                                                                                <img class="img-fluid"
                                                                                     src="img/list/5.png">
                                                                                <h6>Pastas</h6>
                                                                                <small>10 ITEMS</small>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-nav">
                                                            <button type="button" role="presentation" class="owl-prev">
                                                                <i class="icofont-thin-left"></i></button>
                                                            <button type="button" role="presentation" class="owl-next">
                                                                <i class="icofont-thin-right"></i></button>
                                                        </div>
                                                        <div class="owl-dots disabled"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <h5 class="mb-4 mt-3 col-md-12">Best Sellers</h5>
                                                    <div class="col-md-4 col-sm-6 mb-4">
                                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                                            <div class="list-card-image">
                                                                <div class="star position-absolute"><span
                                                                            class="badge badge-success"><i
                                                                                class="icofont-star"></i> 3.1 (300+)</span>
                                                                </div>
                                                                <div class="favourite-heart text-danger position-absolute">
                                                                    <a href="#"><i class="icofont-heart"></i></a></div>
                                                                <div class="member-plan position-absolute"><span
                                                                            class="badge badge-dark">Promoted</span>
                                                                </div>
                                                                <a href="#">
                                                                    <img src="img/list/7.png"
                                                                         class="img-fluid item-img">
                                                                </a>
                                                            </div>
                                                            <div class="p-3 position-relative">
                                                                <div class="list-card-body">
                                                                    <h6 class="mb-1"><a href="#" class="text-black">Bite
                                                                            Me Sandwiches</a></h6>
                                                                    <p class="text-gray mb-2">North Indian • Indian</p>
                                                                    <p class="text-gray time mb-0"><a
                                                                                class="btn btn-link btn-sm pl-0 text-black pr-0"
                                                                                href="#">$550 </a> <span
                                                                                class="badge badge-success">NEW</span>
                                                                        <span class="float-right">
                                             <a class="btn btn-outline-secondary btn-sm" href="#">ADD</a>
                                             </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 mb-4">
                                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                                            <div class="list-card-image">
                                                                <div class="star position-absolute"><span
                                                                            class="badge badge-success"><i
                                                                                class="icofont-star"></i> 3.1 (300+)</span>
                                                                </div>
                                                                <div class="favourite-heart text-danger position-absolute">
                                                                    <a href="#"><i class="icofont-heart"></i></a></div>
                                                                <div class="member-plan position-absolute"><span
                                                                            class="badge badge-dark">Promoted</span>
                                                                </div>
                                                                <a href="#">
                                                                    <img src="img/list/8.png"
                                                                         class="img-fluid item-img">
                                                                </a>
                                                            </div>
                                                            <div class="p-3 position-relative">
                                                                <div class="list-card-body">
                                                                    <h6 class="mb-1"><a href="#" class="text-black">Famous
                                                                            Dave's Bar-B
                                                                        </a>
                                                                    </h6>
                                                                    <p class="text-gray mb-2">Hamburgers • Indian</p>
                                                                    <p class="text-gray time mb-0"><a
                                                                                class="btn btn-link btn-sm pl-0 text-black pr-0"
                                                                                href="#">$250 </a> <span
                                                                                class="badge badge-primary">NEW</span>
                                                                        <span class="float-right">
                                             <span class="count-number">
                                             <button class="btn btn-outline-secondary  btn-sm left dec"> <i
                                                         class="icofont-minus"></i> </button>
                                             <input class="count-number-input" type="text" value="1" readonly="">
                                             <button class="btn btn-outline-secondary btn-sm right inc"> <i
                                                         class="icofont-plus"></i> </button>
                                             </span>
                                        </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 mb-4">
                                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                                            <div class="list-card-image">
                                                                <div class="star position-absolute"><span
                                                                            class="badge badge-success"><i
                                                                                class="icofont-star"></i> 3.1 (300+)</span>
                                                                </div>
                                                                <div class="favourite-heart text-danger position-absolute">
                                                                    <a href="#"><i class="icofont-heart"></i></a></div>
                                                                <div class="member-plan position-absolute"><span
                                                                            class="badge badge-dark">Promoted</span>
                                                                </div>
                                                                <a href="#">
                                                                    <img src="img/list/9.png"
                                                                         class="img-fluid item-img">
                                                                </a>
                                                            </div>
                                                            <div class="p-3 position-relative">
                                                                <div class="list-card-body">
                                                                    <h6 class="mb-1"><a href="#" class="text-black">Bite
                                                                            Me Sandwiches</a></h6>
                                                                    <p class="text-gray mb-2">North Indian • Indian</p>
                                                                    <p class="text-gray time mb-0"><a
                                                                                class="btn btn-link btn-sm pl-0 text-black pr-0"
                                                                                href="#">$250 </a> <span
                                                                                class="badge badge-info">NEW</span>
                                                                        <span class="float-right">
                                             <a class="btn btn-outline-secondary btn-sm" href="#">ADD</a>
                                             </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <h5 class="mb-4 mt-3 col-md-12">Quick Bites <small
                                                                class="h6 text-black-50">3 ITEMS</small></h5>
                                                    <div class="col-md-12">
                                                        <div class="bg-white rounded border shadow-sm mb-4">
                                                            <div class="gold-members p-3 border-bottom">
                                                                <a class="btn btn-outline-secondary btn-sm  float-right"
                                                                   href="#">ADD</a>
                                                                <div class="media">
                                                                    <div class="mr-3"><i
                                                                                class="icofont-ui-press text-danger food-item"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Chicken Tikka Sub</h6>
                                                                        <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gold-members p-3 border-bottom">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i
                                                   class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i
                                                   class="icofont-plus"></i> </button>
                                       </span>
                                                                <div class="media">
                                                                    <div class="mr-3"><i
                                                                                class="icofont-ui-press text-danger food-item"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Cheese corn Roll <span
                                                                                    class="badge badge-danger">BESTSELLER</span>
                                                                        </h6>
                                                                        <p class="text-gray mb-0">$600</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gold-members p-3">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i
                                                   class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i
                                                   class="icofont-plus"></i> </button>
                                       </span>
                                                                <div class="media">
                                                                    <div class="mr-3"><i
                                                                                class="icofont-ui-press text-success food-item"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Cheese Spinach corn Roll <span
                                                                                    class="badge badge-success">Pure Veg</span>
                                                                        </h6>
                                                                        <p class="text-gray mb-0">$600</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <h5 class="mb-4 mt-3 col-md-12">Starters <small
                                                                class="h6 text-black-50">3 ITEMS</small></h5>
                                                    <div class="col-md-12">
                                                        <div class="bg-white rounded border shadow-sm mb-4">
                                                            <div class="menu-list p-3 border-bottom">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i
                                                   class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i
                                                   class="icofont-plus"></i> </button>
                                       </span>
                                                                <div class="media">
                                                                    <img class="mr-3 rounded-pill" src="img/5.jpg"
                                                                         alt="Generic placeholder image">
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Veg Spring Roll</h6>
                                                                        <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="menu-list p-3 border-bottom">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i
                                                   class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i
                                                   class="icofont-plus"></i> </button>
                                       </span>
                                                                <div class="media">
                                                                    <img class="mr-3 rounded-pill" src="img/2.jpg"
                                                                         alt="Generic placeholder image">
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Stuffed Mushroom <span
                                                                                    class="badge badge-danger">BESTSELLER</span>
                                                                        </h6>
                                                                        <p class="text-gray mb-0">$600</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="menu-list p-3">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i
                                                   class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i
                                                   class="icofont-plus"></i> </button>
                                       </span>
                                                                <div class="media">
                                                                    <img class="mr-3 rounded-pill" src="img/3.jpg"
                                                                         alt="Generic placeholder image">
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Honey Chilli Potato
                                                                            <span class="badge badge-success">Pure Veg</span>
                                                                        </h6>
                                                                        <p class="text-gray mb-0">$600</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <h5 class="mb-4 mt-3 col-md-12">Soups <small
                                                                class="h6 text-black-50">8 ITEMS</small></h5>
                                                    <div class="col-md-12">
                                                        <div class="bg-white rounded border shadow-sm">
                                                            <div class="gold-members p-3 border-bottom">
                                                                <a class="btn btn-outline-secondary btn-sm  float-right"
                                                                   href="#">ADD</a>
                                                                <div class="media">
                                                                    <div class="mr-3"><i
                                                                                class="icofont-ui-press text-danger food-item"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Tomato Dhania Shorba</h6>
                                                                        <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gold-members p-3 border-bottom">
                                                                <a class="btn btn-outline-secondary btn-sm  float-right"
                                                                   href="#">ADD</a>
                                                                <div class="media">
                                                                    <div class="mr-3"><i
                                                                                class="icofont-ui-press text-danger food-item"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Veg Manchow Soup</h6>
                                                                        <p class="text-gray mb-0">$600</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gold-members p-3 border-bottom">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i
                                                   class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i
                                                   class="icofont-plus"></i> </button>
                                       </span>
                                                                <div class="media">
                                                                    <div class="mr-3"><i
                                                                                class="icofont-ui-press text-success food-item"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Lemon Coriander Soup</h6>
                                                                        <p class="text-gray mb-0">$600</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gold-members p-3 border-bottom">
                                                                <a class="btn btn-outline-secondary btn-sm  float-right"
                                                                   href="#">ADD</a>
                                                                <div class="media">
                                                                    <div class="mr-3"><i
                                                                                class="icofont-ui-press text-danger food-item"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Tomato Dhania Shorba</h6>
                                                                        <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gold-members p-3 border-bottom">
                                                                <a class="btn btn-outline-secondary btn-sm  float-right"
                                                                   href="#">ADD</a>
                                                                <div class="media">
                                                                    <div class="mr-3"><i
                                                                                class="icofont-ui-press text-danger food-item"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Veg Manchow Soup</h6>
                                                                        <p class="text-gray mb-0">$600</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gold-members p-3">
                                                                <a class="btn btn-outline-secondary btn-sm  float-right"
                                                                   href="#">ADD</a>
                                                                <div class="media">
                                                                    <div class="mr-3"><i
                                                                                class="icofont-ui-press text-success food-item"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mb-1">Lemon Coriander Soup</h6>
                                                                        <p class="text-gray mb-0">$600</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-gallery" role="tabpanel"
                                                 aria-labelledby="pills-gallery-tab">
                                                <div id="gallery" class="bg-white rounded shadow-sm p-4 mb-4">
                                                    <div class="restaurant-slider-main position-relative homepage-great-deals-carousel">
                                                        <div class="owl-carousel owl-theme homepage-ad owl-loaded owl-drag owl-hidden">

                                                            <div class="owl-stage-outer">
                                                                <div class="owl-stage"
                                                                     style="transform: translate3d(-1364px, 0px, 0px); transition: all 0s ease 0s; width: 8184px;">
                                                                    <div class="owl-item cloned" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/1.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/2.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/3.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item active" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/1.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/2.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/3.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/1.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/2.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/3.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/1.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/2.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned" style="width: 682px;">
                                                                        <div class="item">
                                                                            <img class="img-fluid"
                                                                                 src="img/gallery/3.png">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-nav">
                                                                <button type="button" role="presentation"
                                                                        class="owl-prev"><i
                                                                            class="fa fa-chevron-left"></i></button>
                                                                <button type="button" role="presentation"
                                                                        class="owl-next"><i
                                                                            class="fa fa-chevron-right"></i></button>
                                                            </div>
                                                            <div class="owl-dots disabled"></div>
                                                        </div>
                                                        <div class="position-absolute restaurant-slider-pics bg-dark text-white">
                                                            2 of 14 Photos
                                                        </div>
                                                        <div class="position-absolute restaurant-slider-view-all">
                                                            <button type="button" class="btn btn-light bg-white">See all
                                                                Photos
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-restaurant-info" role="tabpanel"
                                                 aria-labelledby="pills-restaurant-info-tab">
                                                <div id="restaurant-info" class="bg-white rounded shadow-sm p-4 mb-4">
                                                    <div class="address-map float-right ml-5">
                                                        <div class="mapouter">
                                                            <div class="gmap_canvas">
                                                                <iframe width="300" height="170" id="gmap_canvas"
                                                                        src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                                                        frameborder="0" scrolling="no" marginheight="0"
                                                                        marginwidth="0"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-4">Restaurant Info</h5>
                                                    <p class="mb-3">Jagjit Nagar, Near Railway Crossing,
                                                        <br> Near Model Town, Ludhiana, PUNJAB
                                                    </p>
                                                    <p class="mb-2 text-black"><i
                                                                class="icofont-phone-circle text-primary mr-2"></i> +91
                                                        01234-56789, +91 01234-56789</p>
                                                    <p class="mb-2 text-black"><i
                                                                class="icofont-email text-primary mr-2"></i>
                                                        iamosahan@gmail.com, osahaneat@gmail.com</p>
                                                    <p class="mb-2 text-black"><i
                                                                class="icofont-clock-time text-primary mr-2"></i> Today
                                                        11am – 5pm, 6pm – 11pm
                                                        <span class="badge badge-success"> OPEN NOW </span>
                                                    </p>
                                                    <hr class="clearfix">
                                                    <p class="text-black mb-0">You can also check the 3D view by using
                                                        our menue map clicking here &nbsp;&nbsp;&nbsp; <a
                                                                class="text-info font-weight-bold" href="#">Venue
                                                            Map</a></p>
                                                    <hr class="clearfix">
                                                    <h5 class="mt-4 mb-4">More Info</h5>
                                                    <p class="mb-3">Dal Makhani, Panneer Butter Masala, Kadhai Paneer,
                                                        Raita, Veg Thali, Laccha Paratha, Butter Naan</p>
                                                    <div class="border-btn-main mb-4">
                                                        <a class="border-btn text-success mr-2" href="#"><i
                                                                    class="icofont-check-circled"></i> Breakfast</a>
                                                        <a class="border-btn text-danger mr-2" href="#"><i
                                                                    class="icofont-close-circled"></i> No Alcohol
                                                            Available</a>
                                                        <a class="border-btn text-success mr-2" href="#"><i
                                                                    class="icofont-check-circled"></i> Vegetarian
                                                            Only</a>
                                                        <a class="border-btn text-success mr-2" href="#"><i
                                                                    class="icofont-check-circled"></i> Indoor
                                                            Seating</a>
                                                        <a class="border-btn text-success mr-2" href="#"><i
                                                                    class="icofont-check-circled"></i> Breakfast</a>
                                                        <a class="border-btn text-danger mr-2" href="#"><i
                                                                    class="icofont-close-circled"></i> No Alcohol
                                                            Available</a>
                                                        <a class="border-btn text-success mr-2" href="#"><i
                                                                    class="icofont-check-circled"></i> Vegetarian
                                                            Only</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-book" role="tabpanel"
                                                 aria-labelledby="pills-book-tab">
                                                <div id="book-a-table"
                                                     class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                                                    <h5 class="mb-4">Book A Table</h5>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Full Name</label>
                                                                    <input class="form-control" type="text"
                                                                           placeholder="Enter Full Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Email Address</label>
                                                                    <input class="form-control" type="text"
                                                                           placeholder="Enter Email address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Mobile number</label>
                                                                    <input class="form-control" type="text"
                                                                           placeholder="Enter Mobile number">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Date And Time</label>
                                                                    <input class="form-control" type="text"
                                                                           placeholder="Enter Date And Time">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-right">
                                                            <button class="btn btn-primary" type="button"> Submit
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel"
                                                 aria-labelledby="pills-reviews-tab">
                                                <div id="ratings-and-reviews"
                                                     class="bg-white rounded shadow-sm p-4 mb-4 clearfix restaurant-detailed-star-rating">
                    <span class="star-rating float-right">
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                              </span>
                                                    <h5 class="mb-0 pt-1">Rate this Place</h5>
                                                </div>
                                                <div class="bg-white rounded shadow-sm p-4 mb-4 clearfix graph-star-rating">
                                                    <h5 class="mb-0 mb-4">Ratings and Reviews</h5>
                                                    <div class="graph-star-rating-header">
                                                        <div class="star-rating">
                                                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                                                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                                                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                                                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                                                            <a href="#"><i class="icofont-ui-rating"></i></a> <b
                                                                    class="text-black ml-2">334</b>
                                                        </div>
                                                        <p class="text-black mb-4 mt-2">Rated 3.5 out of 5</p>
                                                    </div>
                                                    <div class="graph-star-rating-body">
                                                        <div class="rating-list">
                                                            <div class="rating-list-left text-black">
                                                                5 Star
                                                            </div>
                                                            <div class="rating-list-center">
                                                                <div class="progress">
                                                                    <div style="width: 56%" aria-valuemax="5"
                                                                         aria-valuemin="0" aria-valuenow="5"
                                                                         role="progressbar"
                                                                         class="progress-bar bg-primary">
                                                                        <span class="sr-only">80% Complete (danger)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rating-list-right text-black">56%</div>
                                                        </div>
                                                        <div class="rating-list">
                                                            <div class="rating-list-left text-black">
                                                                4 Star
                                                            </div>
                                                            <div class="rating-list-center">
                                                                <div class="progress">
                                                                    <div style="width: 23%" aria-valuemax="5"
                                                                         aria-valuemin="0" aria-valuenow="5"
                                                                         role="progressbar"
                                                                         class="progress-bar bg-primary">
                                                                        <span class="sr-only">80% Complete (danger)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rating-list-right text-black">23%</div>
                                                        </div>
                                                        <div class="rating-list">
                                                            <div class="rating-list-left text-black">
                                                                3 Star
                                                            </div>
                                                            <div class="rating-list-center">
                                                                <div class="progress">
                                                                    <div style="width: 11%" aria-valuemax="5"
                                                                         aria-valuemin="0" aria-valuenow="5"
                                                                         role="progressbar"
                                                                         class="progress-bar bg-primary">
                                                                        <span class="sr-only">80% Complete (danger)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rating-list-right text-black">11%</div>
                                                        </div>
                                                        <div class="rating-list">
                                                            <div class="rating-list-left text-black">
                                                                2 Star
                                                            </div>
                                                            <div class="rating-list-center">
                                                                <div class="progress">
                                                                    <div style="width: 2%" aria-valuemax="5"
                                                                         aria-valuemin="0" aria-valuenow="5"
                                                                         role="progressbar"
                                                                         class="progress-bar bg-primary">
                                                                        <span class="sr-only">80% Complete (danger)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rating-list-right text-black">02%</div>
                                                        </div>
                                                    </div>
                                                    <div class="graph-star-rating-footer text-center mt-3 mb-3">
                                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                                            Rate and Review
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">
                                                    <a href="#" class="btn btn-outline-primary btn-sm float-right">Top
                                                        Rated</a>
                                                    <h5 class="mb-1">All Ratings and Reviews</h5>
                                                    <div class="reviews-members pt-4 pb-4">
                                                        <div class="media">
                                                            <a href="#"><img alt="Generic placeholder image"
                                                                             src="http://bootdey.com/img/Content/avatar/avatar1.png"
                                                                             class="mr-3 rounded-pill"></a>
                                                            <div class="media-body">
                                                                <div class="reviews-members-header">
                                    <span class="star-rating float-right">
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating"></i></a>
                                          </span>
                                                                    <h6 class="mb-1"><a class="text-black" href="#">Singh
                                                                            Osahan</a></h6>
                                                                    <p class="text-gray">Tue, 20 Mar 2020</p>
                                                                </div>
                                                                <div class="reviews-members-body">
                                                                    <p>Contrary to popular belief, Lorem Ipsum is not
                                                                        simply random text. It has roots in a piece of
                                                                        classical Latin literature from 45 BC, making it
                                                                        over 2000 years old. Richard McClintock, a Latin
                                                                        professor at Hampden-Sydney College in Virginia,
                                                                        looked up one of the more obscure Latin words,
                                                                        consectetur, from a Lorem Ipsum passage, and
                                                                        going through the cites of the word in classical
                                                                        literature, discovered the undoubtable source.
                                                                        Lorem Ipsum comes from sections </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <hr>
                                                    <a class="text-center w-100 d-block mt-4 font-weight-bold" href="#">See
                                                        All Reviews</a>
                                                </div>
                                                <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                                                    <h5 class="mb-4">Leave Comment</h5>
                                                    <p class="mb-2">Rate the Place</p>
                                                    <div class="mb-4">
                                                <span class="star-rating">
                                                         <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                                                         <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                                                         <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                                                         <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                                                         <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                                                         </span>
                                                    </div>
                                                    <form>
                                                        <div class="form-group">
                                                            <label>Your Comment</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-primary btn-sm" type="button"> Submit
                                                                Comment
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <button type="button" id="btn-booking_<?= $aRoom['MaPhong'] ?>" class="btn btn-lg btn-primary"
                                style="display: block;margin:0
                        auto">Đặt Ngay
                        </button>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            <li><a href="#">Properties <span>(12)</span></a></li>
                            <li><a href="#">Home <span>(22)</span></a></li>
                            <li><a href="#">House <span>(37)</span></a></li>
                            <li><a href="#">Villa <span>(42)</span></a></li>
                            <li><a href="#">Apartment <span>(14)</span></a></li>
                            <li><a href="#">Condominium <span>(140)</span></a></li>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 04, 2019</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 04, 2019</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 04, 2019</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
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
                            <h5 class="modal-title">Chi Tiết Đặt Phòng</h5>
                        </div>
                        <div class="modal-body modal-xl">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Ngày Đến</label>
                                            <div class="col-sm-10">
                                                <input type="datetime-local" id="bookRoom_startDate" value="<?= date('Y-m-d\TH:i:s') ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Ngày Đi</label>
                                            <div class="col-sm-10">
                                                <input type="datetime-local" id="bookRoom_endDate" value="<?= date('Y-m-d\TH:i:s') ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Giá</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="bookRoom_gia" disabled readonly value="<?=
                                                $aRoom['gia'] ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Tên
                                                    Phòng</label>
                                                <input type="hidden" id="bookRoom_idPhong" value="<?=$aRoom['MaPhong']?>">
                                                <div class="col-sm-10">
                                                    <input type="text" id="bookRoom_tenPhong" disabled readonly
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
                                            <h2>Nhập thông tin chi tiết của bạn</h2>
                                            <form>
                                                <div class="mb-3">
                                                    <label for="bookRoom_email" class="form-label" style="font-weight: bold">Email address</label>
                                                    <input type="email" name="email" class="form-control"
                                                           required
                                                           id="bookRoom_email"
                                                           aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bookRoom_fullName" class="form-label" style="font-weight: bold">Họ Và Tên</label>
                                                    <input type="text" required name="fullName" class="form-control"
                                                           id="bookRoom_fullName">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="sdt" required class="form-label" style="font-weight: bold">Số
                                                        Điện Thoại</label>
                                                    <input type="number" name="sdt" class="form-control"
                                                           id="bookRoom_sdt">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bookRoom_request" class="form-label" style="font-weight: bold">Yêu Cầu Đặc Biệt</label>
                                                    <div id="emailHelp" class="form-text">Các yêu cầu đặc biệt không đảm bảo sẽ được đáp ứng – tuy nhiên, chỗ nghỉ sẽ cố gắng hết sức để thực hiện. Bạn luôn có thể gửi yêu cầu đặc biệt sau khi hoàn tất đặt phòng của mình!</div>
                                                    <textarea name="request" class="form-control" id="bookRoom_request"
                                                              rows="3"></textarea>
                                                </div>
                                                <button type="submit" id="btn-submit-bookRoom" class="btn btn-primary"
                                                        style="display: block;
                                                margin: 0 auto;">Submit</button>
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
