<?php
require_once(dirname(__FILE__) .  '/includes/config.php');
include_once(dirname(__FILE__) .  '/php/functions/validator.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Sign up | Health Insurance Management System</title>
    <!-- Favicon -->
    <link href="./images/favicon.ico" rel="icon" />
    <!-- CALL APP STYLE SHEET -->
    <link href="./css/app.css" rel="stylesheet" />
    <link href="./css/login.css" rel="stylesheet" />
    <link href="./css/profile.css" rel="stylesheet" />
</head>

<body class="mobile-view loading body-bg-l-ocean ">
    <!-- =========== PAGE PRE-LOADER =============================== -->
    <div class="pre-loader" id="preLoader">
        <div class="pre-loader-gif"></div>
    </div>
    <!-- ================================== CALL NAV-BAR HERE ================================== -->
    <?php include_once './components/navigation-bar.php' ?>
    <!-- ===================================== END NAV-BAR ===================================== -->
    <main>
        <div class="limiter">
            <div class="container-login">
                <div class="wrap-login pl-55 pr-55 pt-65 pb-50">
                    <form class="login-form validate-form" action="php/actions/forget-password.php" method="post">
                        <span class="login-form-title pb-33">
                            Reset Password
                        </span>
                        <?php show_message(); ?>
                        <div class="col-12 p-0">
                            <label class="labels">Reset code</label>
                            <input class="form-control" type="text" name="password_reset_code" placeholder="Reset code">
                        </div>
                        <div class="col-12 p-0">
                            <label class="labels">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-12 px-0 pt-0">
                            <label class="labels">Confirm Password</label>
                            <input class="form-control" type="password" name="confirm-password" placeholder="Confirm Password">
                        </div> 
                        <div class="container-login-form-btn mt-20">
                            <input type="hidden" name="action" value="reset">
                            <button class="btn login-form-btn">Reset</button>
                        </div>
                        <div class="text-center pt-45 pb-4">
                            <span class="txt1">Forgot</span>
                            <a href="forget-password.php" class="txt2 hov1"> Password?</a>
                        </div>
                        <div class="text-center">
                            <span class="txt1"> Already have an account? </span>
                            <a href="login.php" class="txt2 hov1"> Sign in </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- ================================ CALL FOOTER HERE ================================ -->
    <?php include_once "./components/footer.php" ?>
    <!-- ================================   END FOOTER    ================================= -->
    <!-- ====== SCROLL TO TOP BUTTON ====== -->
    <button class="scroll-to-top-btn">
        <i class="arrow up"></i>
    </button>
    <!-- CALL APP JS MODULE -->
    <script src="./js/app.js" type="module"></script>
</body>

</html>