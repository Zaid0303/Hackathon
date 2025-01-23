<?php

include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
include("includes/config.php");

if (isset($_POST['submit'])) {
    $ngo_name = $_POST['ngo_name'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];
    $address = $_POST['address'];
    $registration_date = $_POST['registration_date'];

    // Check if all fields are filled
    if (!empty($ngo_name) && !empty($contact_email) && !empty($contact_phone) && !empty($address) && !empty($registration_date)) {

        // Insert query
        $insert_ngo = "INSERT INTO `ngos` (`ngo_id`, `ngo_name`, `contact_email`, `contact_phone`, `address`, `registration_date`) 
        VALUES (NULL, '$ngo_name', '$contact_email', '$contact_phone', '$address', '$registration_date')";

        $connect = mysqli_query($connection, $insert_ngo);

        if ($connect) {
            // Set success message
            $_SESSION['success'] = 'Wow! NGO added successfully!';
        } else {
            // Set error message
            $_SESSION['error'] = 'Failed to add NGO. Please try again.';
        }
    } else {
        // Set warning message for missing fields
        $_SESSION['warning'] = 'Please fill in all fields!';
    }

    // Redirect to the same page to display the alert
    header("Location: add_ngo.php");
    exit;
}
?>


<!-- Start main content-->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div
                        class="page-title-box d-block d-md-flex align-items-center justify-content-between text-center text-md-start">
                        <h4 class="mb-sm-0">Add NGO</h4>
                        <button type="button" class="btn btn-primary waves-effect waves-light mt-2 mt-md-0">
                           <a href="show_ngo.php"></a> Show Details
                        </button>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Check if there is any session or query parameter for alerts -->
                            <?php if (isset($_SESSION['success'])): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong>
                                    <?php echo $_SESSION['success']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php unset($_SESSION['success']); ?>
                            <?php elseif (isset($_SESSION['error'])): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong>
                                    <?php echo $_SESSION['error']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php unset($_SESSION['error']); ?>
                            <?php elseif (isset($_SESSION['warning'])): ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Warning!</strong>
                                    <?php echo $_SESSION['warning']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php unset($_SESSION['warning']); ?>
                            <?php endif; ?>

                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="ngo_name" class="form-label">NGO Name</label>
                                    <input type="text" class="form-control" id="ngo_name" name="ngo_name"
                                        placeholder="Enter NGO Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contact_email" class="form-label">Contact Email</label>
                                    <input type="email" class="form-control" id="contact_email" name="contact_email"
                                        placeholder="Enter Contact Email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contact_phone" class="form-label">Contact Phone</label>
                                    <input type="text" class="form-control" id="contact_phone" name="contact_phone"
                                        placeholder="Enter Contact Phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" name="address" rows="3"
                                        placeholder="Enter Address" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="registration_date" class="form-label">Registration Date</label>
                                    <input type="date" class="form-control" id="registration_date"
                                        name="registration_date" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->

            </div> <!-- end row -->

        </div> <!-- container-fluid -->


    </div>
    <!-- End Page-content -->
    <?php


    include("includes/footer.php");


    ?>
</div> <!-- End main content-->