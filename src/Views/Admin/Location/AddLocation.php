<?php
CheckLoginAdmin();
use BookingHotel\Core\URL;

require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Chèn danh mục</p>
            <div class="right__table">
                <?php if (isset($_SESSION['error_addLocation'])): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $_SESSION['error_addLocation'] ?>
                    </div>
                <?php endif ?>
                <form action="<?= URL::uri('a.addLocation'); ?>"  style="width: 100%" method="post"
                      enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tên Địa Điểm</label>
                        <input class="form-control" type="text" name="tenDD" required/>
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input class="form-control" type="text" name="diaChi" required/>
                    </div>
                    <div class="form-group">
                        <label>Chi Tiết</label>
                        <textarea class="form-control" rows="10" name="content" id="editor1" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" id="imagesLocation" name="images[]" multiple data-allow-reorder="true"
                               data-max-file-size="3MB" data-max-files="5">
                        <div id="previewLocation" style="margin-top: 30px"></div>
                        <div id="inputIMGLocation"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">SAVE Location</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
require_once 'src/Views/Admin/footer.php';
