<?php 
include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
include("includes/config.php");


if(isset($_GET['sid'])){
    $id = $_GET['sid'];

    $update_brand = "SELECT  * from `brands` where `brand_id` = '$id' ";
    $res = mysqli_query($connection,$update_brand);
    if($res){
        if(mysqli_num_rows($res) > 0){

?>
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

    <?php 
    while($row = mysqli_fetch_assoc($res)){

    
    ?>
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div
                    class="page-title-box d-block d-md-flex align-items-center justify-content-between text-center text-md-start">
                    <h4 class="mb-sm-0">Add Brands</h4>
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
                            <input type="hidden" class="form-control" 
                         name="brand_id" required value="<?php echo $row['brand_id'] ?>" >
                                <label for="brand_name" class="form-label">Brand Name</label>
                                <input type="text" class="form-control" id="brand_name" name="brand_name"
                                    placeholder="Enter Brand Name" required value="<?php echo $row['brand_name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="contact_email" class="form-label">Contact Email</label>
                                <input type="email" class="form-control" id="contact_email" name="contact_email"
                                    placeholder="Enter Contact Email" required value="<?php echo $row['contact_email'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="contact_phone" class="form-label">Contact Phone</label>
                                <input type="text" class="form-control" id="contact_phone" name="contact_phone"
                                    placeholder="Enter Contact Phone" required value="<?php echo $row['contact_phone'] ?>">
                            </div>
                          
                            <div class="mb-3">
                                <label for="registration_date" class="form-label">Registration Date</label>
                                <input type="date" class="form-control" id="registration_date"
                                    name="registration_date" required>
                            </div>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
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
    }
}
    }
}


if(isset($_POST['update'])){
    $brand_id = $_POST['brand_id'];
    $brand_name = $_POST['brand_name'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];
    $registration_date = $_POST['registration_date'];

    $update_brand = "UPDATE `brands` SET `brand_name`='$brand_name',`contact_email`='$contact_email',
    `contact_phone`='$contact_phone' WHERE `brand_id` = '$brand_id'";
   
    $result = mysqli_query($connection,$update_brand);
    if($result){
        echo '<script>
        alert("data updated successfully");
        window.location.href="show_brand.php"
        </script>';
    }
}




include('includes/footer.php');
?>