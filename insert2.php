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
        $conn = mysqli_connect("localhost", "root", "", "ordersnew");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $reservation_id = $_REQUEST['reservation_id'];
        $oder_id = $_REQUEST['oder_id'];
        $table = $_REQUEST['table'];
        $item_orded_name = $_REQUEST['item_orded_name'];
        $quantity = $_REQUEST['quantity'];
        $amount = $_REQUEST['amount'];
        $total_amount = $_REQUEST['total_amount'];


        // We are going to insert the data into our reservationnew table
        $sql = "INSERT INTO ordersnew VALUES ('$reservation_id','$oder_id','$table','$item_orded_name','$quantity','$amount','$total_amount')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Record stored in a database successfully !")</script>';
            echo '<script>window.location.href="oders.php";</script>';
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