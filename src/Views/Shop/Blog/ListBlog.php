<?php

use BookingHotel\Core\URL;
use BookingHotel\Models\BlogModel;
$star=\BookingHotel\Core\Request::getIDOnURL()?:1;

require_once 'src/Views/Shop/header.php';
require_once 'src/Views/Shop/navigation.php';
?>
    <div class="hero-wrap" style="background-image: url('assets/Shop/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span>
                            <span>Blog</span></p>
                        <h1 class="mb-4 bread">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Read Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <?php
                $aBlogs = BlogModel::getBlogsLimit($star, 6);
                if (empty($aBlogs)){
                    echo "Sorry,we not found blog";
                }
                foreach ($aBlogs as $item):
                    $src = (json_decode($item[3], true))[0]
                    ?>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20"
                               style="background-image: url(<?=$src?>);">
                            </a>
                            <div class="text mt-3 text-center">
                                <div class="meta mb-2">
                                    <div><a href="<?=URL::uri('detailBlog/'.$item[0])?>"><?=date('d M Y',strtotime($item[5]))?></a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="" class="meta-chat"><span class="icon-chat"></span> <?=$item[4]?></a></div>
                                </div>
                                <h3 class="heading"><a href="<?=URL::uri('detailBlog/'.$item[0]) ?>"><?=$item[1]?></a></h3>
                                <p><a href="<?=URL::uri('detailBlog/'.$item[0])?>" class="btn-custom">Read more</a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="<?=URL::uri('listBlog/'.($star-1))?>">&lt;</a></li>
                            <?php
                            $pages=ceil(BlogModel::getCountBlogs()/6)+1;
                            for ($i=1;$i<$pages;$i++):
                            ?>
                            <li class="<?=($i==$star)?'active':''?>"><span><?=$i?></span></li>
                            <?php endfor;?>
                            <li><a href="<?=URL::uri('listBlog/'.($star+1))?>">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
require_once 'src/Views/Shop/footer.php';
