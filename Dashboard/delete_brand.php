<?php 

include("includes/config.php");

if(isset($_GET["id"])){
    $brand_id = $_GET["id"];
}

$delete = "DELETE from `brands` where `brand_id` = '$brand_id' ";
$query = mysqli_query($connection, $delete);
if($query){
    echo '<script>
    alert("data deleted successfully")
    window.location.href="viewuser.php"
    </script>';
}

?>