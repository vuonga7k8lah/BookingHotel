<?php
CheckLoginAdmin();

use BookingHotel\Core\URL;


require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';

$aRowDD=[
    1=>'Administrator',
    2=>'Editor',
    3=>'Numbers'
];
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Add User</div>
            <!-- /.col-lg-12 -->
            <div class="right__table">
                <?php if (isset($_SESSION['error_updateLocation'])): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $_SESSION['error_updateLocation'] ?>
                    </div>
                <?php endif ?>
                <form action="<?= URL::uri('a.addUser'); ?>" method="POST" enctype="multipart/form-data"
                      novalidate>
                    <div class="form-group">

                        <label>Tên Khách Hàng</label>
                        <input class="form-control" type="text" name="hoTen" required/>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" id="username" required />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" id="username" required />
                    </div>
                    <div class="form-group">
                        <label>SDT</label>
                        <input class="form-control" type="text" name="SDT" required/>
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control" name="role">
                            <?php foreach ($aRowDD as $key => $value): ?>
                                <option value="<?= $key ?>"><?= $value ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" required/>
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
