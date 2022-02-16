<?php
CheckLoginAdmin();
require_once 'src/Views/Admin/header.php';
require_once 'src/Views/Admin/navigation.php';

$aLocations = \BookingHotel\Models\LocationModel::getLocations();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title" >List Locations</div>

            <div class="right__table">
                <div class="right__tableWrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Địa Điểm</th>
                            <th>Địa Điểm</th>
                            <th>Chi Tiết</th>
                            <th>Ảnh</th>
                            <th>Sửa</th>
                            <th>Xoá</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        $i= 1;
                        foreach ($aLocations as $item):
                        ?>
                        <tr>
                            <td data-label="STT"><?=$i?></td>
                            <td data-label="location"><?=$item[1]?></td>
                            <td data-label="location"><?=$item[3]?></td>
                            <td data-label="location"><?= html_entity_decode(the_excerpt($item[2])) . '...' ?></td>
                            <td data-label="Hình ảnh"><?php LoadAnh($item[4]); ?></td>
                            <td data-label="Sửa"
                                class="right__iconTable">
                                <a href="<?=\BookingHotel\Core\URL::uri('a.editLocation').'/'.$item[0]?>"
                                   onclick="return confirm('Are you sure you want to edit this item?');"
                                >
                                    <img src="assets/Admin/assets/icon-edit.svg" alt="">
                                </a>
                            </td>
                            <td data-label="Xoá"
                                class="right__iconTable">
                                <a
                                        onclick="return confirm('Are you sure you want to delete this item?');"
                                        href="<?=\BookingHotel\Core\URL::uri('a.deleteLocation').'/'.$item[0]?>">
                                    <img src="assets/Admin/assets/icon-trash-black.svg" alt="">
                                </a>
                            </td>
                        </tr>
                       <?php
                        $i++;
                        endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'src/Views/Admin/footer.php';
