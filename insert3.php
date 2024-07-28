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
        $conn = mysqli_connect("localhost", "root", "", "menunew");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $item_id = $_REQUEST['itemid'];
        $item_category = $_REQUEST['itemcategory'];
        $item_name = $_REQUEST['itemname'];
        $item_price = $_REQUEST['itemamount'];
       

        // We are going to insert the data into our reservationnew table
        $sql = "INSERT INTO menunew VALUES ('$item_id','$item_category','$item_name','$item_price')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Record stored in a database successfully !")</script>';
            echo '<script>window.location.href="menu.php";</script>';
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