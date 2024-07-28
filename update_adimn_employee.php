

php
<?php
$conn = mysqli_connect("localhost", "root", "", "adminemployeenew");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

        $employee_id = $_REQUEST['employee_id'];
        $full_name = $_REQUEST['full_name'];
        $date_of_birth = $_REQUEST['date_of_birth'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $e_mail = $_REQUEST['e_mail'];
        $job_title = $_REQUEST['job_title'];
        $hours_of_work = $_REQUEST['hours_of_work'];
        $salary = $_REQUEST['salary'];

$sql = "UPDATE adminemployeenew SET full_name='$full_name', date_of_birth='$date_of_birth', address ='$address' , phone='$phone', e_mail='$e_mail', job_title='$job_title', hours_of_work='$hours_of_work', salary='$salary'  WHERE employee_id='$employee_id'";

if(mysqli_query($conn, $sql)){
    echo '<script>alert("Record updated successfully !")</script>';
    echo '<script>window.location.href="admin.php";</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);;
?>