<?php

namespace BookingHotel\Controllers\Shop\Blog;

class BlogController
{
    public function getViewDetail()
    {
        include './src/Views/Shop/Blog/DetailBlog.php';
    }

    public function getListBlog()
    {
        include './src/Views/Shop/Blog/ListBlog.php';
    }
}