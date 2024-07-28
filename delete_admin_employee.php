<?php
$conn = mysqli_connect("localhost", "root", "", "adminemployeenew");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_GET['employee_id'];

$sql = "DELETE FROM adminemployeenew WHERE employee_id='$id'";

if(mysqli_query($conn, $sql)){
    echo '<script>alert("Record deleted successfully !")</script>';
    echo '<script>window.location.href="admin.php";</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>