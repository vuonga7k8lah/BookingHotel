<?php
//isUserLogin();
use BookingHotel\Core\URL;
use BookingHotel\Models\HotelModel;

require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';

$row = \BookingHotel\Models\UserModel::getAllUser();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">List User</div>

            <div class="right__table">
                <div>
                    <table>
                        <thead>
                        <tr align="center">
                            <th>STT</th>
                            <th>Tên khách hàng</th>
                            <th>Username</th>
                            <th>SDT</th>
                            <th>Email</th>
                            <th>Create date</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;
                        foreach ($row as $key => $val): ?>
                            <tr class="odd gradeX" align="center">
                                <td><?= $i ?></td>
                                <td><?= $val[1] ?></td>
                                <td><?= $val[2] ?></td>
                                <td ><?= $val[4]?></td>
                                <td><?=$val[7]?></td>
                                <td><?=$val[10]?></td>
                                <td class="right__iconTable">
                                    <a onclick="return confirm('Are you sure you want to delete this item?');"
                                       href="<?= URL::uri('a.deleteUser') . '/' . $val[0] ?>">
                                        <img src="assets/Admin/assets/icon-trash-black.svg" alt="">
                                    </a>
                                </td>
                                <td class="right__iconTable">
                                    <a onclick="return confirm('Are you sure you want to edit this item?');"
                                       href="<?= URL::uri('a.editUser') . '/' . $val[0] ?>">
                                        <img src="assets/Admin/assets/icon-edit.svg" alt="">
                                    </a>
                                </td>
                            </tr>
                            <?php $i++;
                        endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'src/Views/Admin/footer.php';
