<?php
$conn = mysqli_connect("localhost", "root", "", "menunew");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_GET['item_id'];

$sql = "DELETE FROM menunew WHERE item_id='$id'";

if(mysqli_query($conn, $sql)){
    echo '<script>alert("Record deleted successfully !")</script>';
    echo '<script>window.location.href="menu.php";</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>