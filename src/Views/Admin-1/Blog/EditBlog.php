<?php

use BookingHotel\Core\Request;
use BookingHotel\Core\Session;
use BookingHotel\Core\URL;
use BookingHotel\Models\BlogModel;
use BookingHotel\Models\HotelModel;
use BookingHotel\Models\LocationModel;
use BookingHotel\Models\RoomModel;

CheckLoginAdmin();
require_once 'src/Views/Admin-1/header.php';
require_once 'src/Views/Admin-1/navigation.php';

$ID = Request::getIDOnURL();
$aItem = BlogModel::getBlog($ID);
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Blog
                        <small>edit</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php if (isset($_SESSION['error_editBlog'])): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?= $_SESSION['error_editBlog'] ?>
                        </div>
                    <?php endif ?>
                    <form action="<?= URL::uri('a.editBlog'); ?>" method="POST" enctype="multipart/form-data"
                          novalidate>
                        <div class="form-group">
                            <label>Tiêu Đề</label>
                            <input class="form-control" type="text" name="title" value="<?= $aItem['title'] ?>"
                                   required/>
                            <input name="id" value="<?= $aItem['id'] ?>" type="hidden">
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea class="form-control" rows="15" name="content" id="editor1" required>
                                <?= $aItem['content'] ?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" id="imagesBlog" name="images[]" multiple data-allow-reorder="true"
                                   data-max-file-size="3MB" data-max-files="5" required>
                            <?php $aImage = json_decode($aItem['image'], true);
                            $preview = '';
                            $inputIMG = '';
                            foreach ($aImage as $src) {
                                $preview .= '<img src="' . $src . '" width="200px;" height="200px">';
                                $inputIMG .= '<input name="images[]" type="hidden" value="' . $src . '">';
                            }
                            ?>
                            <div id="previewBlog" style="margin-top: 20px"><?= $preview ?></div>
                            <div id="inputIMGBlog"><?= $inputIMG ?></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">SAVE Blog</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
<?php
Session::checkReloadPage('error_editBlog');
require_once 'src/Views/Admin-1/footer.php';
