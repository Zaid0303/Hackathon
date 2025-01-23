<?php
// Database connection parameters
include('Includes/config.php');


// Manage donation request
if ($_GET['type'] == 'donation' && isset($_GET['request_id'])) {
    $requestId = $_GET['request_id'];

    // Example: Approve or reject donation request
    // Here, you would perform SQL UPDATE based on admin action
    // For simplicity, let's assume marking as approved
    $updateQuery = "UPDATE donation_requests SET status = 'Approved' WHERE request_id = $requestId";
    mysqli_query($connection, $updateQuery);

    // Redirect back to view_requests.php after update
    header("Location: view_requests.php");
    exit();
}

// Manage disposal request
if ($_GET['type'] == 'disposal' && isset($_GET['disposal_id'])) {
    $disposalId = $_GET['disposal_id'];

    // Example: Mark disposal request as completed
    // Here, you would perform SQL UPDATE based on admin action
    // For simplicity, let's assume marking as completed
    $updateQuery = "UPDATE disposal_requests SET status = 'Completed' WHERE disposal_id = $disposalId";
    mysqli_query($connection, $updateQuery);

    // Redirect back to view_requests.php after update
    header("Location: view_requests.php");
    exit();
}

// Close connection
mysqli_close($connection);
?>
