<?php
CheckLoginAdmin();
use BookingHotel\Core\URL;

require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';

$aRowKS=\BookingHotel\Models\HotelModel::getHotels();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Add Blogs</div>
            <div class="right__table">
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
    </div>

<?php
require_once 'src/Views/Admin/footer.php';
