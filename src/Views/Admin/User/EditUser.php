<?php
CheckLoginAdmin();
use BookingHotel\Core\Request;
use BookingHotel\Core\URL;
use BookingHotel\Models\HotelModel;
use BookingHotel\Models\LocationModel;

require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';

$ID = Request::getIDOnURL();
$aItem = \BookingHotel\Models\UserModel::getUserWithID($ID);
$aRowDD=[
  1=>'Administrator',
  2=>'Editor',
  3=>'Numbers'
];
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Edit Hotel</div>
            <!-- /.col-lg-12 -->
            <div class="right__table">
                <?php if (isset($_SESSION['error_updateLocation'])): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $_SESSION['error_updateLocation'] ?>
                    </div>
                <?php endif ?>
                <form action="<?= URL::uri('a.editUser'); ?>" method="POST" enctype="multipart/form-data"
                      novalidate>
                    <div class="form-group">
                        <input type="hidden" name="ID" value="<?= $aItem['ID'] ?>">
                        <label>Tên Khách Hàng</label>
                        <input class="form-control" type="text" name="hoTen" value="<?= $aItem['hoTen'] ?>"
                               required/>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" id="username" value="<?= $aItem['username'] ?>"
                               required />
                    </div>
                    <div class="form-group">
                        <label>SDT</label>
                        <input class="form-control" type="text" name="SDT" value="<?= $aItem['SDT'] ?>"
                               required/>
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control" name="role" >
                            <?php foreach ($aRowDD as $key => $value): ?>
                                <option <?= ($key == $aItem['level']) ? 'selected' : '' ?>
                                        value="<?= $key ?>"><?= $value ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" value="<?= $aItem['email'] ?>"
                               required/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">SAVE User</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
<?php
require_once 'src/Views/Admin/footer.php';
