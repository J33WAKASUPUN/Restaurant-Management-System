php
<?php
$conn = mysqli_connect("localhost", "root", "", "menunew");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$item_id = $_POST['item_id'];
$item_category = $_POST['item_category'];
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];

$sql = "UPDATE menunew SET item_category='$item_category', item_name='$item_name', item_price='$item_price' WHERE item_id='$item_id'";

if(mysqli_query($conn, $sql)){
    echo '<script>alert("Record updated successfully !")</script>';
    echo '<script>window.location.href="menu.php";</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);;
?>