<?php
// Database connection parameters
include('Includes/config.php');

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch donation requests
$donationRequestsQuery = "SELECT dr.request_id, u.username AS user_name, n.ngo_name, dr.request_date, dr.status
                         FROM donation_requests dr
                         INNER JOIN users u ON dr.user_id = u.user_id
                         INNER JOIN ngos n ON dr.ngo_id = n.ngo_id
                         ORDER BY dr.request_date DESC";
$donationRequestsResult = mysqli_query($connection, $donationRequestsQuery);

// Fetch disposal requests
$disposalRequestsQuery = "SELECT disposal_id, user_id, disposal_date, status
                         FROM disposal_requests
                         ORDER BY disposal_date DESC";
$disposalRequestsResult = mysqli_query($connection, $disposalRequestsQuery);

// Close connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Requests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        .requests {
            margin-top: 20px;
        }
        .requests table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .requests table th, .requests table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .requests table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>View Donation Requests</h2>
    <div class="requests">
        <table>
            <tr>
                <th>Request ID</th>
                <th>User</th>
                <th>NGO</th>
                <th>Request Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($donationRequestsResult)) { ?>
            <tr>
                <td><?php echo $row['request_id']; ?></td>
                <td><?php echo $row['user_name']; ?></td>
                <td><?php echo $row['ngo_name']; ?></td>
                <td><?php echo $row['request_date']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><a href="manage_requests.php?type=donation&request_id=<?php echo $row['request_id']; ?>">Manage</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <h2>View Disposal Requests</h2>
    <div class="requests">
        <table>
            <tr>
                <th>Disposal ID</th>
                <th>User ID</th>
                <th>Disposal Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($disposalRequestsResult)) { ?>
            <tr>
                <td><?php echo $row['disposal_id']; ?></td>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['disposal_date']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><a href="manage_requests.php?type=disposal&disposal_id=<?php echo $row['disposal_id']; ?>">Manage</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
