<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "adminemployeenew");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $employee_id = $_REQUEST['employee_id'];
        $full_name = $_REQUEST['full_name'];
        $date_of_birth = $_REQUEST['date_of_birth'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $e_mail = $_REQUEST['e_mail'];
        $job_title = $_REQUEST['job_title'];
        $hours_of_work = $_REQUEST['hours_of_work'];
        $salary = $_REQUEST['salary'];

        // We are going to insert the data into our reservationnew table
        $sql = "INSERT INTO adminemployeenew VALUES ('$employee_id','$full_name','$date_of_birth','$address','$phone','$e_mail','$job_title','$hours_of_work','$salary')";

       // Check if the query is successful
       if(mysqli_query($conn, $sql)){
        echo '<script>alert("Record stored in a database successfully !")</script>';
        echo '<script>window.location.href="admin.php";</script>';
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>