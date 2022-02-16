<?php

namespace BookingHotel\Controllers\Admin\User;

use BookingHotel\Core\Request;
use BookingHotel\Core\Session;
use BookingHotel\Core\URL;
use BookingHotel\Models\UserModel;
use Exception;

class UserController
{
    public function getAddView()
    {
        include 'src/Views/Admin/User/AddUser.php';
    }

    public function getEditView()
    {
        include 'src/Views/Admin/User/EditUser.php';
    }

    public function getListView()
    {
        include 'src/Views/Admin/User/ListUser.php';
    }

    public function handleAdd()
    {
        $aData = $_POST;
        $aData['password'] = md5($_POST['password']);
        try {
            if (checkDataEmpty($aData)) {

                $id = UserModel::insert($aData);
                if ($id) {
                    URL::redirect('a.listUser');
                } else {
                    throw new Exception('sorry, the user had not inserted successfully');
                }
            }
        } catch (Exception $exception) {
            Session::set('error_addBlog', $exception->getMessage());
            URL::redirect('a.addUser');
        }
    }

    public function handleEdit()
    {
        $aData = $_POST;
        try {
            if (checkDataEmpty($aData)) {
                $id = UserModel::update($aData['ID'], $aData);
                if ($id) {
                    URL::redirect('a.listUser');
                } else {
                    throw new Exception('sorry, the user had not updated successfully');
                }
            }
        } catch (Exception $exception) {
            Session::set('error_editUser', $exception->getMessage());
            URL::redirect('a.editUser');
        }
    }

    public function handleDelete()
    {
        $MaKH = Request::getIDOnURL();
        try {
            $id = UserModel::delete($MaKH);
            if ($id) {
                URL::redirect('a.listUser');
            } else {
                throw new Exception('sorry, the user had not delete successfully');
            }
        } catch (Exception $exception) {
            URL::redirect('a.listUser');
        }
    }
}
