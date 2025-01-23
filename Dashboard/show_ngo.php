<?php

include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
include("includes/config.php");

?>



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div
                        class="page-title-box d-block d-md-flex align-items-center justify-content-between text-center text-md-start">
                        <h4 class="mb-sm-0">Show NGO</h4>
                        <button type="button" class="btn btn-primary waves-effect waves-light mt-2 mt-md-0">
                          <a href="add_ngo.php"></a>  Add NGO
                        </button>
                    </div>
                </div>
            </div>
            <!-- end page title -->



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">



                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $fetch_ngo = "SELECT * from `ngos`";
                                    $fetch_result = mysqli_query($connection, $fetch_ngo);
                                    if (mysqli_num_rows($fetch_result) > 0) {
                                        while ($row = mysqli_fetch_assoc($fetch_result)) {
                                            ?>
                                            <tr>

                                                <td><?php echo $row['ngo_name'] ?></td>
                                                <td><?php echo $row['contact_email'] ?></td>
                                                <td><?php echo $row['contact_phone'] ?></td>
                                                <td><?php echo $row['address'] ?></td>
                                                <td><?php echo $row['registration_date'] ?></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>
                                                        Edit</button>
                                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>
                                                        Delete</button>
                                                </td>
                                            </tr>

                                            <?php
                                        }
                                    }
                                    ?>


                                </tbody>
                            </table>

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