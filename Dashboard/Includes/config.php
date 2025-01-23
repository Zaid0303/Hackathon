<?php 

$connection = mysqli_connect("localhost", "root", "", "clothing_donation");
if(!$connection){
    die(mysqli_connect_error());
}

?>