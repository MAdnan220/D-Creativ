<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>D'Creativ</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="admin/assets/images/d'creativ New Logo ( Transparent Orange) (1).png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="admin/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="admin/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="admin/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="admin/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="admin/assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="admin/assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="admin/assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="admin/assets/css/style.css">

</head>

<body class="skin-dark">

    <div class="main-wrapper">

        <!-- Content Body Start -->
        <div class="content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                        <div class="login-register-form-wrap">
                        
                        <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
                            <div class="content">
                                <h1>Sign in</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>

                            <div class="login-register-form">
                                <form action="login.php" method="POST">
                                    <div class="row">
                                        <div class="col-12 mb-20"><input class="form-control" name="username" type="text" placeholder="User ID / Email"></div>
                                        <div class="col-12 mb-20"><input class="form-control" name="password" type="password" placeholder="Password"></div>
                                        <div class="col-12 mb-20"><label for="remember" class="adomx-checkbox-2"><input id="remember" type="checkbox"><i class="icon"></i>Remember.</label></div>
                                        <div class="col-12">
                                            <div class="row justify-content-between">
                                                <div class="col-auto mb-15"><a href="#">Forgot Password?</a></div>
                                                <div class="col-auto mb-15">Dont have account? <a href="register.php">Create Now.</a></div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-10"><button class="button button-primary button-outline">sign in</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                        <div class="content">
                            <h1>Sign in</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- Content Body End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="admin/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="admin/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="admin/assets/js/vendor/popper.min.js"></script>
    <script src="admin/assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="admin/assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="admin/assets/js/main.js"></script>

</body>

</html>