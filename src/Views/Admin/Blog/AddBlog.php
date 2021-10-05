<?php

use BookingHotel\Core\URL;

CheckLoginAdmin();
require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';

?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Blogs
                        <small>add</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php if (isset($_SESSION['error_addBlog'])): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?= $_SESSION['error_addBlog'] ?>
                        </div>
                    <?php endif ?>
                    <form action="<?= URL::uri('a.addBlog'); ?>" method="POST" enctype="multipart/form-data" novalidate>
                        <div class="form-group">
                            <label>Tiêu Đề</label>
                            <input class="form-control" type="text" name="title" required/>
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea class="form-control" rows="15" name="content" id="editor1" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" id="imagesBlog" name="images[]" multiple data-allow-reorder="true"
                                   data-max-file-size="3MB" data-max-files="5" required>
                            <div id="previewBlog"></div>
                            <div id="inputIMGBlog"></div>
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
\BookingHotel\Core\Session::checkReloadPage('error_addBlog');
require_once 'src/Views/Admin/footer.php';
