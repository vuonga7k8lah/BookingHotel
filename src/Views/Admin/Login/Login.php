<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="./assets/Login_v1/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/Login_v1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/Login_v1/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/Login_v1/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/Login_v1/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/Login_v1/css/util.css">
    <link rel="stylesheet" type="text/css" href="./assets/Login_v1/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="./assets/Login_v1/images/img-01.png" alt="IMG">
            </div>
            <form class="login100-form validate-form" action="<?=\BookingHotel\Core\URL::uri('a.login')?>" method="POST">
					<span class="login100-form-title">
						Admin Login
					</span>
                <?php if (isset($_SESSION['error_adminLogin'])):?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?=$_SESSION['error_adminLogin']?>
                    </div>
                <?php endif?>
                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="./assets/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="./assets/Login_v1/vendor/bootstrap/js/popper.js"></script>
<script src="./assets/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="./assets/Login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="./assets/Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="./assets/Login_v1/js/main.js"></script>

</body>
</html>
<?php
\BookingHotel\Core\Session::checkReloadPage('error_adminLogin');
