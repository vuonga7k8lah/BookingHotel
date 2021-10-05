<?php

use BookingHotel\Core\Request;
use BookingHotel\Core\URL;
use BookingHotel\Models\BlogModel;

require_once 'src/Views/Shop/header.php';
require_once 'src/Views/Shop/navigation.php';
$idBlog = Request::getIDOnURL();
$aBlog = BlogModel::getBlog($idBlog);
$srcBlog = json_decode($aBlog['image'], true)[0]
?>
    <div class="hero-wrap" style="background-image: url(<?= $srcBlog ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2">Home</span> / <span><?= $aBlog['title'] ?></span>
                        </p>
                        <h1 class="mb-4 bread">Blog</h1>
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
                        <h2 style="display: block;font-weight: bold;margin: 0 auto"><?= $aBlog['title'] ?></h2>
                        <div class="col-md-12 room-single mt-4 mb-5 ftco-animate" style="overflow: scroll">
                            <?= $aBlog['content'] ?>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">

                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        <?php $aBlogs = BlogModel::getBlogs();
                        foreach ($aBlogs as $item):
                            $src = (json_decode($item[3], true))[0] ?>
                            <div class="block-21 mb-4 d-flex">
                                    <a class="<?= URL::uri('detailBlog/' . $item[0]) ?>" style="background-image: url(<?=$src?>); width: 80px;height: 80px" ></a>
                                    <div class="text">
                                        <h3 class="heading"><a href="<?= URL::uri('detailBlog/' . $item[0]) ?>"><?= $item[1] ?></a></h3>
                                        <div class="meta">
                                            <div><a href="<?= URL::uri('detailBlog/' . $item[0]) ?>"><span class="icon-calendar"></span><?= date('M m, Y', strtotime($item[5])) ?></a></div>
                                            <div><a href="<?= URL::uri('detailBlog/' . $item[0]) ?>"><span class="icon-person"></span> Admin</a></div>
                                            <div><a href="<?= URL::uri('detailBlog/' . $item[0]) ?>"><span class="icon-chat"></span><?= $item[4] ?></span></a>
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
                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </section>
<?php
require_once 'src/Views/Shop/footer.php';
