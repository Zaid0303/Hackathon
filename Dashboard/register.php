<?php
session_start();
include('Includes/config.php');

if (isset($_POST['SignUp'])) {
    $username = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['pass']);
    $repeatPassword = mysqli_real_escape_string($connection, $_POST['rp_pass']);
    $role = mysqli_real_escape_string($connection, $_POST['role']); // Get selected role

    // Map roles to IDs
    $role_id_map = [
        'User' => 1,
        'NGO' => 3,
        'Brand' => 4,
    ];

    $role_id = $role_id_map[$role] ?? 1; // Default to 'User' role if not selected

    // Password validation for strength
    if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/\d/', $password)) {
        $_SESSION['alert'] = "Password must be at least 8 characters long and contain at least one uppercase letter and one number.";
        $_SESSION['alert_type'] = "danger";
        header("Location: register.php");
        exit();
    }

    if ($password === $repeatPassword) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $checkEmailQuery = "SELECT * FROM `users` WHERE `email` = '$email'";
        $checkEmailResult = mysqli_query($connection, $checkEmailQuery);

        if (mysqli_num_rows($checkEmailResult) > 0) {
            $_SESSION['alert'] = "Email already exists!";
            $_SESSION['alert_type'] = "danger";
            header("Location: register.php");
        } else {
            $insertUserQuery = "INSERT INTO `users`(`user_id`, `username`, `email`, `phone_number`, `password`, `role_id`) 
                                VALUES (NULL, '$username', '$email', NULL, '$hashedPassword', '$role_id')";
            $insertUserResult = mysqli_query($connection, $insertUserQuery);

            if ($insertUserResult) {
                $_SESSION['alert'] = "Registration successful! Please login.";
                $_SESSION['alert_type'] = "success";
                header("Location: login.php");
            } else {
                $_SESSION['alert'] = "Registration failed. Please try again!";
                $_SESSION['alert_type'] = "danger";
                header("Location: register.php");
            }
        }
    } else {
        $_SESSION['alert'] = "Passwords do not match!";
        $_SESSION['alert_type'] = "danger";
        header("Location: register.php");
    }
}
?>


<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/upzet/layouts/auth-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Aug 2024 06:51:47 GMT -->

<head>

    <meta charset="utf-8" />
    <title> H E L P Z | SignUp </title>
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
                            <div class="text-center">
                                <a href="index.php" class="">
                                    <img src="assets/images/logo.png" alt="" height="24"
                                        class="auth-logo logo-dark mx-auto">
                                    <img src="assets/images/logo-light.png" alt="" height="24"
                                        class="auth-logo logo-light mx-auto">
                                </a>
                            </div>

                            <h4 class="font-size-18 text-muted text-center mt-2">Free Register</h4>
                            <p class="text-muted text-center mb-4">Get your free H E L P Z account now.</p>


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

                                    <form action="register.php" method="POST">
                                        <div class="mb-4">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter username" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="useremail">Email</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter email" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="pass"
                                                placeholder="Enter password" required>
                                            <small class="form-text text-muted">Password must be at least 8 characters
                                                long, include one uppercase letter and one number.</small>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="userpassword">Repeat Password</label>
                                            <input type="password" class="form-control" name="rp_pass"
                                                placeholder="Repeat password" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="role">Select Role</label>
                                            <select class="form-control" name="role" required>
                                                <option value="User">User</option>
                                                <option value="NGO">NGO</option>
                                                <option value="Brand">Brand</option>
                                            </select>
                                        </div>
                                        <div class="d-grid mt-4">
                                            <input type="submit" class="btn btn-primary waves-effect waves-light"
                                                value="Register" name="SignUp">
                                        </div>
                                        <div class="my-3 text-center">
                                            <p class="text-black-50">Already have an account?
                                                <a href="login.php" class="fw-medium text-primary"> Login </a>
                                            </p>
                                        </div>
                                    </form>


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

<!-- Mirrored from themesdesign.in/upzet/layouts/auth-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Aug 2024 06:51:47 GMT -->

</html>