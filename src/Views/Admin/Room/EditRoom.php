<?php
CheckLoginAdmin();
use BookingHotel\Core\Request;
use BookingHotel\Core\URL;
use BookingHotel\Models\HotelModel;
use BookingHotel\Models\RoomModel;

require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';

$ID = Request::getIDOnURL();
$aItem = RoomModel::getRoom($ID);
$aRowKS = HotelModel::getHotels();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Edit Room</div>
            <!-- /.col-lg-12 -->
            <div class="right__table">
                <?php if (isset($_SESSION['error_updateLocation'])): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $_SESSION['error_updateLocation'] ?>
                    </div>
                <?php endif ?>
                <form action="<?= URL::uri('a.editRoom'); ?>" method="POST" enctype="multipart/form-data"
                      novalidate>
                    <div class="form-group">
                        <label>Tên Phòng</label>
                        <input type="hidden" name="MaPhong" value="<?=$aItem['MaPhong']?>">
                        <input class="form-control" type="text" name="tenPhong" value="<?= $aItem['tenPhong'] ?>"
                               required/>
                    </div>
                    <div class="form-group">
                        <label>Khách Sạn</label>
                        <select class="form-control" name="MaKS" id="MaKS">
                            <?php foreach ($aRowKS as $key => $value): ?>
                                <option <?= ($value[0] == $aItem['MaKS']) ? 'selected' : '' ?>
                                    value="<?= $value[0] ?>"><?= $value[2] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Giá Phòng</label>
                        <input class="form-control" type="number"  name="gia" value="<?= $aItem['gia']; ?>"
                               required/>
                    </div>
                    <div class="form-group">
                        <label>Chi Tiết</label>
                        <textarea class="form-control" rows="15" name="content" id="editor1" required>
                               <?= $aItem['content'] ?>
                            </textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" id="imagesRoom" name="images[]" multiple data-allow-reorder="true"
                               data-max-file-size="3MB" data-max-files="5" required>
                        <?php $aImage = json_decode($aItem['image'], true);
                        $preview = '';
                        $inputIMG = '';
                        foreach ($aImage as $src) {
                            $preview .= '<img src="' . $src . '" width="200px;" height="200px">';
                            $inputIMG .= '<input name="images[]" type="hidden" value="' . $src . '">';
                        }
                        ?>
                        <div id="previewRoom" style="margin-top: 20px"><?= $preview ?></div>
                        <div id="inputIMGRoom"><?= $inputIMG ?></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">SAVE Room</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
<?php
require_once 'src/Views/Admin/footer.php';
