<?php
$conn = mysqli_connect("localhost", "root", "", "ordersnew");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$tableNumber = $_GET['table'];
$sql = "SELECT * FROM ordersnew WHERE table = '$tableNumber'";
$result = mysqli_query($conn, $sql);

$data = array();
while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);

mysqli_close($conn);
?>
