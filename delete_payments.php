<?php
$conn = mysqli_connect("localhost", "root", "", "paymentsnew");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_GET['reservation_id'];

$sql = "DELETE FROM paymentsnew WHERE reservation_id='$id'";

if(mysqli_query($conn, $sql)){
    echo '<script>alert("Record deleted successfully !")</script>';
    echo '<script>window.location.href="payments.php";</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>