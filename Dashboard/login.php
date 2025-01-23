<?php
session_start();
include('Includes/config.php'); 

if (isset($_POST['Login'])) {
    $email = mysqli_real_escape_string($connection, $_POST['ad_email']);
    $password = mysqli_real_escape_string($connection, $_POST['ad_pass']);

    $loginQuery = "SELECT * FROM `users` WHERE `email` = '$email'";
    $loginResult = mysqli_query($connection, $loginQuery);

    if (mysqli_num_rows($loginResult) > 0) {
        $userData = mysqli_fetch_assoc($loginResult);
        if (password_verify($password, $userData['password'])) {
            $_SESSION['user_id'] = $userData['user_id'];
            $_SESSION['username'] = $userData['username'];
            $_SESSION['role_id'] = $userData['role_id'];

            if ($userData['role_id'] == 1) {
                header("Location: index.php");
            } elseif ($userData['role_id'] == 2) {
                header("Location: admin_dashboard/index.php"); 
            } elseif ($userData['role_id'] == 3) {
                header("Location: ngo_dashboard/index.php");
            } elseif ($userData['role_id'] == 4) {
                header("Location: brand_dashboard/index.php"); 
            }
        } else {
            $_SESSION['alert'] = "Invalid password!";
            $_SESSION['alert_type'] = "danger";
            header("Location: login.php");
        }
    } else {
        $_SESSION['alert'] = "Email not found!";
        $_SESSION['alert_type'] = "danger";
        header("Location: login.php");
    }
}
?>




<!doctype html>
<html lang="en">
<!-- Mirrored from themesdesign.in/upzet/layouts/auth-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Aug 2024 06:51:47 GMT -->

<head>

    <meta charset="utf-8" />
    <title> H E L P Z | Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="bg-pattern">
    <div class="bg-overlay"></div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="">
                                <div class="text-center">
                                    <a href="index.php" class="">
                                        <img src="assets/images/logo.png" alt="" height="24"
                                            class="auth-logo logo-dark mx-auto">
                                        <img src="assets/images/logo-light.png" alt="" height="24"
                                            class="auth-logo logo-light mx-auto">
                                    </a>
                                </div>
                                <!-- end row -->
                                <h4 class="font-size-18 text-muted mt-2 text-center">Admin Login !</h4>
                                <p class="mb-5 text-center">Sign in to continue to H E L P Z.</p>


                                <div class="row">
                                    <div class="col-md-12">
                                    <?php
                                    if (isset($_SESSION['alert'])) {
                                        echo "<div class='alert alert-{$_SESSION['alert_type']} alert-dismissible fade show' role='alert'>
                                                {$_SESSION['alert']}
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                              </div>";
                                        unset($_SESSION['alert']);
                                        unset($_SESSION['alert_type']);
                                    }
                                    ?>
                                        <form action="login.php" method="POST">
                                            <div class="mb-4">
                                                <label class="form-label" for="useremail">Email</label>
                                                <input type="email" class="form-control" name="ad_email"
                                                    placeholder="Enter email" required>
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <input type="password" class="form-control" name="ad_pass"
                                                    placeholder="Enter password" required>
                                            </div>
                                            <div class="d-grid mt-4">
                                                <input type="submit" class="btn btn-primary waves-effect waves-light"
                                                    value="Login" name="Login">
                                            </div>
                                            <div class="my-3 text-center">
                                                <p class="text-black-50">Don't have an account?
                                                    <a href="register.php" class="fw-medium text-primary"> Register </a>
                                                </p>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end Account pages -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>


</html>