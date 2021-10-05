<?php

use BookingHotel\Core\URL;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel VuongDTTN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?= URL::uri(); ?>">
    <link rel="shortcut icon" type="image/png" href="./assets/IMG/hotel.jpeg"/>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">

<link rel="stylesheet" href="./assets/Shop/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./assets/Shop/css/animate.css">

    <link rel="stylesheet" href="./assets/Shop/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/Shop/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/Shop/css/magnific-popup.css">

    <link rel="stylesheet" href="./assets/Shop/css/aos.css">

    <link rel="stylesheet" href="./assets/Shop/css/ionicons.min.css">

    <link rel="stylesheet" href="./assets/Shop/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./assets/Shop/css/jquery.timepicker.css">
    <?php
    $uri=\BookingHotel\Core\Request::uri();
    $aUri=explode('/',$uri);
    if ($aUri[0]=='profile'){
        echo '<link rel="stylesheet" href="./assets/Shop/profile.css">';
    }
    ?>

    <link rel="stylesheet" href="./assets/Shop/css/flaticon.css">
    <link rel="stylesheet" href="./assets/Shop/css/icomoon.css">
    <link rel="stylesheet" href="./assets/Shop/icofont/icofont.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/Shop/css/style.css">
    <link rel="stylesheet" href="./assets/Shop/css/comment.css">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script type="text/javascript">window.$crisp = [];
        window.CRISP_WEBSITE_ID = "54e61e15-d653-477c-ba55-d88862973a0c";
        (function () {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();</script>
    <script>
        let GLOBAL_HOTEL = {
            "url": "<?=URL::uri();?>"
        }
    </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>
<body>