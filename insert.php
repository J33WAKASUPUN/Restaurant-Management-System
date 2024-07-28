<!DOCTYPE html>
<html>

<head>
    <title>Insert Page</title>
</head>

<body>
    <center>
        <?php
        // Enable error reporting
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Connect to the reservationnew database
        $conn = mysqli_connect($servername, $username, $password, "reservationnew");
        if ($conn === false) {
            die("ERROR: Could not connect to reservationnew. " . mysqli_connect_error());
        }

        // Connect to the tablesnew database
        $conn_tables = new mysqli($servername, $username, $password, "tablesnew");
        if ($conn_tables->connect_error) {
            die("ERROR: Could not connect to tablesnew. " . $conn_tables->connect_error);
        }

        // Get form data
        $id = $_REQUEST['reservation_id'];
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $numberofguests = $_REQUEST['numberofguests'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $date = $_REQUEST['date'];
        $time = $_REQUEST['time'];
        $table = $_REQUEST['table'];
        $table_id = $_REQUEST['table_id'];
        $spacialoccasion = $_REQUEST['spacialoccasion'];

        // Insert reservation into reservationnew table
        $sql = "INSERT INTO reservationnew VALUES ('$id', '$first_name', '$last_name', '$numberofguests', '$email', '$phone', '$date', '$time', '$table', '$spacialoccasion')";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Record stored in the database successfully!")</script>';
        } else {
            echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
        }

        // Update table status to 'Occupied' in tablesnew database
        $sql_update_table = "UPDATE tablesnew SET status='Occupied' WHERE table_id='$table_id'";

        if ($conn_tables->query($sql_update_table) === TRUE) {
            echo '<script>alert("Table status updated successfully!")</script>';
        } else {
            echo "ERROR: Could not execute $sql_update_table. " . $conn_tables->error;
        }

        // Close connections
        mysqli_close($conn);
        $conn_tables->close();
        ?>

        <script>
            window.location.href = "reservation.php";
        </script>
    </center>
</body>

</html>