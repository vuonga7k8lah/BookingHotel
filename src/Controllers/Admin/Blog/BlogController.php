<?php

namespace BookingHotel\Controllers\Admin\Blog;

use BookingHotel\Core\Request;
use BookingHotel\Core\Session;
use BookingHotel\Core\URL;
use BookingHotel\Models\BlogModel;
use Exception;

class BlogController
{
    public function getAddView()
    {
        include './src/Views/Admin/Blog/AddBlog.php';
    }

    public function getEditView()
    {
        include './src/Views/Admin/Blog/EditBlog.php';
    }

    public function getListView()
    {
        include './src/Views/Admin/Blog/ListBlog.php';
    }

    public function handleAdd()
    {
        $aData = $_POST;
        try {
            if (checkDataEmpty($aData)) {
                $aData['image'] = json_encode($aData['images']);
                $id = BlogModel::insert($aData);
                if ($id) {
                    URL::redirect('a.listBlog');
                } else {
                    throw new Exception('sorry, the Blog had not inserted successfully');
                }
            }
        } catch (Exception $exception) {
            Session::set('error_addBlog', $exception->getMessage());
            URL::redirect('a.addBlog');
        }
    }

    public function handleEdit()
    {
        $aData = $_POST;
        try {
            if (checkDataEmpty($aData)) {
                $aData['image'] = json_encode($aData['images']);
                $id = BlogModel::update($aData['id'], $aData);
                if ($id) {
                    URL::redirect('a.listBlog');
                } else {
                    throw new Exception('sorry, the blog had not updated successfully');
                }
            }
        } catch (Exception $exception) {
            Session::set('error_editBlog', $exception->getMessage());
            URL::redirect('a.editBlog');
        }
    }
    public function handleDelete()
    {
        $MaKS=Request::getIDOnURL();
        try {
            $id=BlogModel::delete($MaKS);
            if ($id) {
                URL::redirect('a.listBlog');
            } else {
                throw new Exception('sorry, the hotel had not delete successfully');
            }
        } catch (Exception $exception) {
            URL::redirect('a.listHotel');
        }
    }
}
