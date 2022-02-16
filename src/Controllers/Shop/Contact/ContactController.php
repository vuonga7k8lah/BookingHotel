<?php

namespace BookingHotel\Controllers\Shop\Contact;

class ContactController
{
    public function getViewContact()
    {
        include './src/Views/Shop/Contact/Contact.php';
    }
    public function getViewAbout()
    {
        include './src/Views/Shop/About/About.php';
    }
}
