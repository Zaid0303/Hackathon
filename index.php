<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HELPZ</title>
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


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img\image1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>One Gift, Endless Possibilities</h1>
                            <p>
                            A single donation can open doors to a brighter future. Give today and be the change you want to see.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">Donate Now</a>                               
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img\image2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Transforming Waste into Good</h1>
                            <p>
                            By donating clothes instead of discarding them, You can play a significant role in reducing textile waste
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img\images3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Give a Little, Change a Lot</h1>
                            <p>
                            Your donation, no matter the size, has the power to transform lives.By giving just a little, you can make a world of difference.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        


<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">          
            <h2>We believe that we can save more</h2>
        </div>
        <div class="row">
            <!-- Understanding Textile Waste and Its Impact -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="flaticon-trash"></i> <!-- Replace with a relevant icon for impact -->
                    </div>
                    <div class="service-text">
                        <h3>Textile Waste and Its Impact</h3>
                        <p>Textile waste has become a significant environmental issue in recent years, as the fast fashion industry continues to grow. Millions of tons of clothes end up in landfills each year, contributing to pollution, toxic chemicals , and the depletion of natural resources.</p>
                    </div>
                </div>
            </div>
            
            <!-- The Importance of Recycling Textiles -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="flaticon-recycle"></i> <!-- Replace with a relevant icon for recycling -->
                    </div>
                    <div class="service-text">
                        <h3>The Importance of Recycling Textiles</h3>
                        <p>Recycling textiles is a key strategy in reducing waste and conserving natural resources. Clothes that are no longer in use can be recycled into new products, such as insulation materials, cleaning cloths, or even new garments.</p>
                    </div>
                </div>
            </div>
            
            <!-- Donation and Upcycling as Sustainable Solutions -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="flaticon-refresh"></i> <!-- Replace with an upcycling-related icon -->
                    </div>
                    <div class="service-text">
                        <h3>Donation and Upcycling</h3>
                        <p>Rather than discarding unused clothing, donating or upcycling them offers a sustainable alternative. Donation programs enable gently used clothes to reach those in need, while upcycling turns old textiles into new, valuable products. Both methods reduce waste, encourage a circular economy, and promote the reuse of materials, benefiting both the environment and communities.</p>
                    </div>
                </div>
            </div>

            <!-- Supporting Sustainable Fashion Brands -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="flaticon-fashion"></i> <!-- Replace with a sustainable fashion-related icon -->
                    </div>
                    <div class="service-text">
                        <h3>Sustainable Fashion Brands</h3>
                        <p>Brands that focus on eco-friendly materials, ethical production methods, and long-lasting designs help reduce the amount of waste generated by the fashion industry.</p>
                    </div>
                </div>
            </div>

            <!-- Innovative Technologies in Textile Waste Management -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="flaticon-technology"></i> 
                    </div>
                    <div class="service-text">
                        <h3>Innovative Technologies</h3>
                        <p>Advancements in technology are making it possible to process textile waste more efficiently.These technologies hold great promise for the future, as they provide more sustainable solutions for managing textile waste on a larger scale.</p>
                    </div>
                </div>
            </div>

            <!-- Raising Awareness and Educating Consumers -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class=""></i> 
                    </div>
                    <div class="service-text">
                        <h3>Raising Awareness Among Consumers</h3>
                        <p>Awareness is key to tackling the issue of textile waste. Educating consumers about the environmental impact of textile waste and promoting conscious buying decisions can significantly reduce overconsumption and waste.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Service End -->

        
       
        
        
        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Popular Causes</p>
                    <h2>Let's know about charity causes around the world</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-1.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $100000</p>
                                <p><strong>Goal:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-2.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $100000</p>
                                <p><strong>Goal:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-3.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $100000</p>
                                <p><strong>Goal:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-4.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $100000</p>
                                <p><strong>Goal:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->
        
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
