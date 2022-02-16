<?php
//isUserLogin();
use BookingHotel\Core\Request;
use BookingHotel\Core\Session;
use BookingHotel\Core\URL;
use BookingHotel\Models\LocationModel;

require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';
CheckLoginAdmin();
$ID = Request::getIDOnURL();
$aRow = LocationModel::getLocation($ID);
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
                <!-- /.col-lg-12 -->
                <div class="right__table">
                    <?php if (isset($_SESSION['error_updateLocation'])): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?= $_SESSION['error_updateLocation'] ?>
                        </div>
                    <?php endif ?>
                    <form action="<?= URL::uri('a.editLocation'); ?>" style="width: 100%" method="POST" enctype="multipart/form-data"
                          novalidate>
                        <div class="form-group">
                            <label>Tên Địa Điểm</label>
                            <input type="hidden" name="MaDD" value="<?= $aRow['MaDD'] ?>">
                            <input class="form-control" type="text" name="tenDD" value="<?= $aRow['tenDD'] ?>"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input class="form-control" type="text" name="diaChi" value="<?= $aRow['diaChi'] ?>"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label>Chi Tiết</label>
                            <textarea class="form-control" rows="10" name="content" id="editor1" required>
                                <?= $aRow['content'] ?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" id="imagesLocation" name="images[]" multiple data-allow-reorder="true"
                                   data-max-file-size="3MB" data-max-files="5">
                            <?php $aImage = json_decode($aRow['image'], true);
                            $preview = '';
                            $inputIMG = '';
                            foreach ($aImage as $src) {
                                $preview .= '<img src="' . $src . '" width="200px;" height="200px">';
                                $inputIMG .= '<input name="images[]" type="hidden" value="' . $src . '">';
                            }
                            ?>
                            <div id="previewLocation" style="margin-top: 30px"><?= $preview ?></div>
                            <div id="inputIMGLocation"><?= $inputIMG ?></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">SAVE Location</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
    </div>
<?php
Session::checkReloadPage('error_updateLocation');
require_once 'src/Views/Admin/footer.php';
