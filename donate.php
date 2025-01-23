<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HELPZ - Free Charity Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
       
    <?php include 'Topbar.php' ?>

    <?php include 'Navbar.php' ?> 
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Donate Now</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="donate.php">Donate</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Donate Start -->
        <div class="container">
            <div class="donate" data-parallax="scroll" data-image-src="img\donate_448x296.png">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>Donate for better lives</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                Donating items you no longer need is not only a generous way to help others, but it also supports environmental sustainability. By choosing to donate clothes, furniture, or household goods, you're giving them a second life and ensuring they reach those in need. Responsible disposal through donation reduces waste, conserves resources, and provides essential items to individuals and families. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
    <div class="donate-form">
        <form>
            <!-- Name input -->
            <div class="control-group">
                <input type="text" class="form-control" placeholder="Name" required="required" />
            </div>
            
            <!-- Email input -->
            <div class="control-group">
                <input type="email" class="form-control" placeholder="Email" required="required" />
            </div>

            <!-- Donate and Disposal radio buttons (side by side) -->
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-custom">
                    <input type="radio" name="donation-option" value="donate" checked> Donate
                </label>
                <label class="btn btn-custom">
                    <input type="radio" name="donation-option" value="disposal"> Disposal
                </label>
            </div>

            <!-- Submit button -->
            <div>
                <button class="btn btn-custom" type="submit">Donate Now</button>
            </div>
        </form>
    </div>
</div>

                </div>
            </div>
        </div>
        <!-- Donate End -->

        <?php include 'Footer.php' ?>
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
