<?php
include_once(dirname(__FILE__) .  '/includes/config.php');
include_once(dirname(__FILE__) .  '/php/functions/validator.php');
$authorized_roles = ['user'];
include_once(dirname(__FILE__) .  '/includes/authenticate.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>HIMS | Health Insurance Management System</title>
    <!-- Favicon -->
    <link href="./images/favicon.ico" rel="icon" />
    <!-- CALL APP STYLE SHEET -->
    <link href="./css/app.css" rel="stylesheet" />
</head>

<body class="mobile-view loading">

    <!-- =========== PAGE PRE-LOADER =============================== -->
    <div class="pre-loader" id="preLoader">
        <div class="pre-loader-gif"></div>
    </div>

    <!-- ================================== CALL NAV-BAR HERE ================================== -->
    <?php include_once './components/navigation-bar.php' ?>
    <!-- ===================================== END NAV-BAR ===================================== -->

    <main>
    
        <div class="enquiry-form">
		<center><h1><b>ENQUIRY FORM</b></h1></center>
		 <p><b>If you have any queries kindly take a moment to fill up this form,our reprentatives will contact you shortly.<b></p>
		<form action="./php/actions/enquiry.php" method="post">
        <?php show_message(); ?>
			<p><b>Title:</b></p>
			<input type="text" name="title" placeholder="title">
            <p><b>Subject:</b></p>
                <select name = "subject">
                <option value = "">"SELECT SUBJECT"</option>
                    <option value = "PROFILE VARIFICATION">PROFILE VARIFICATION</option>
                    <option value = "TECHNICAL">TECHNICAL</option>
                    <option value = "PAYMENTS">PAYMENTS</option>
                    <option value = "PACKAGES">PACKAGES</option>
                    <option value = "OTHERS">OTHERS</option>
                </select>
			<p><b>Description:</b></p>
            <textarea name="description" placeholder="description" rows ="10" cols = "90"></textarea>
            <input type="hidden" name="action" value="create-enquiry">
			<button type="submit">SUBMIT</button>
		</form>
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
