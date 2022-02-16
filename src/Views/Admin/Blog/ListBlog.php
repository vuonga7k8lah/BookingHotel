<?php
CheckLoginAdmin();
use BookingHotel\Core\URL;
use BookingHotel\Models\BlogModel;
use BookingHotel\Models\HotelModel;
use BookingHotel\Models\RoomModel;

require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';
$aRow = BlogModel::getBlogs();
$row = RoomModel::getRooms();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">List Blog</div>

            <div class="right__table">
                <div>
                    <table>
                        <thead>
                        <tr align="center">
                            <th>STT</th>
                            <th>Tên Tiêu Đề</th>
                            <th>Nội Dung</th>
                            <th>Ảnh</th>
                            <th>Viewed</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;
                        foreach ($aRow as $key => $val):
                            ?>
                            <tr class="odd gradeX" align="center">
                                <td><?= $i ?></td>
                                <td><?= $val[1] ?></td>
                                <td style="text-align: center"><?= html_entity_decode(the_excerpt($val[2])) .
                                    '...' ?></td>
                                <td style="float: left;width: 120px;text-align: center"><?php LoadAnh($val[3]); ?></td>
                                <td><?= $val[4] ?></td>
                                <td  class="right__iconTable">
                                    <a onclick="return confirm('Are you sure you want to delete this item?');"
                                       href="<?= URL::uri('a.deleteBlog') . '/' . $val[0] ?>">
                                        <img src="assets/Admin/assets/icon-trash-black.svg" alt="">
                                    </a>
                                </td>
                                <td  class="right__iconTable">
                                    <a onclick="return confirm('Are you sure you want to edit this item?');"
                                       href="<?= URL::uri('a.editBlog') . '/' . $val[0] ?>">
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
