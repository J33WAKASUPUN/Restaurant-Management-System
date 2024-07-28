<!DOCTYPE html>
<html lang="en">
    <title>Unimo Complex</title>
    <head>
         <!-- CSS -->
        <style>
        body {
            background-image:url('./Images/restauarent/a-table-with-food-and-drinks-on-it-ai-generated-free-photo.jpg');
            background-repeat:no-repeat;
            background-attachment: fixed;           
            background-size:cover;
            background-position: center;
            }

            p {
    color: rgb(255, 255, 255);
    text-decoration: none;
    font-family:Verdana;
    font-size: 50px;
    margin-top: 40px;
    margin-bottom:40px;
    text-align: center;
    text-shadow: 0 0 1px 7px rgba(0, 0, 0, 0.5);
            }

        </style>
        <link rel="stylesheet" href="./CSS/main css.css">

         <!-- Fontawsome -->
        <link rel="stylesheet" href="./CSS/fontawesome-free-6.5.1-web/css/all.css">

         <!-- JS -->
         
         <script src="./JS/pre loader 2.js"></script>
         

    </head>
    <body onload="myFunction()" style="margin:0;">
     <div style="display:none;" id="myDiv" class="animate-bottom">

        <!-- Navbar -->
        <br>
        <br>
        <br>
        <br>

    <center>
 
        <?php
        if (isset($_POST['generate_report'])) {
            // Enable error reporting
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";

            // Connect to the reservationnew database
            $conn_reservation = new mysqli($servername, $username, $password, "reservationnew");
            if ($conn_reservation->connect_error) {
                die("ERROR: Could not connect to reservationnew. " . $conn_reservation->connect_error);
            }

            // Connect to the ordersnew database
            $conn_orders = new mysqli($servername, $username, $password, "ordersnew");
            if ($conn_orders->connect_error) {
                die("ERROR: Could not connect to ordersnew. " . $conn_orders->connect_error);
            }

            // Connect to the paymentsnew database
            $conn_payments = new mysqli($servername, $username, $password, "paymentsnew");
            if ($conn_payments->connect_error) {
                die("ERROR: Could not connect to paymentsnew. " . $conn_payments->connect_error);
            }

            // Fetch data from reservationnew table
            $sql_reservation = "SELECT * FROM reservationnew";
            $result_reservation = $conn_reservation->query($sql_reservation);

            // Fetch data from ordersnew table
            $sql_orders = "SELECT * FROM ordersnew";
            $result_orders = $conn_orders->query($sql_orders);

            // Fetch data from paymentsnew table
            $sql_payments = "SELECT * FROM paymentsnew";
            $result_payments = $conn_payments->query($sql_payments);

            // Display data from reservationnew table
            echo "<p>Reservations<p>";
            if ($result_reservation->num_rows > 0) {
                echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Guests</th><th>Email</th><th>Phone</th><th>Date</th><th>Time</th><th>Table</th><th>Special Occasion</th></tr>";
                while($row = $result_reservation->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["numberofguests"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["table"]."</td><td>".$row["spacialoccasion"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "No reservations found.";
            }

            // Display data from ordersnew table
            echo "<p>Orders<p>";
            if ($result_orders->num_rows > 0) {
                echo "<table><tr><th>Reservation ID</th><th>Order ID</th><th>Table</th><th>Item Ordered</th><th>Quantity</th><th>Amount</th><th>Total Amount</th></tr>";
                while($row = $result_orders->fetch_assoc()) {
                    echo "<tr><td>".$row["reservation_id"]."</td><td>".$row["oder_id"]."</td><td>".$row["table"]."</td><td>".$row["item_orded_name"]."</td><td>".$row["quantity"]."</td><td>".$row["amount"]."</td><td>".$row["total_amount"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "No orders found.";
            }

            // Display data from paymentsnew table
            echo "<p>Payments<p>";
            if ($result_payments->num_rows > 0) {
                echo "<table><tr><th>Reservation ID</th><th>Table</th><th>Grand Total Amount</th><th>Payment Method</th></tr>";
                while($row = $result_payments->fetch_assoc()) {
                    echo "<tr><td>".$row["reservation_id"]."</td><td>".$row["table"]."</td><td>".$row["grandtotal_amount"]."</td><td>".$row["payment_method"]."</td></tr>";
                }
                echo "</table>";
                
            } else {
                echo "No payments found.";
            }

            // Close connections
            $conn_reservation->close();
            $conn_orders->close();
            $conn_payments->close();
        } else {
            echo "";
        }
        ?>
        <br>
        <br>
        <br>
        <br>


        <!-- Add download button -->
        <form action="download_report.php" method="post">
            <button class="btncal" type="submit" name="download_report">Download Report</button>
        </form>
        <br>
        <br>
        <br>
        <form action="download_report.php" method="post">
            <button class="btncal" type="submit" name="download_report">Upload Report</button>
        </form>
        <br>
        <br>
        <br>
        <br>

    </body>
   

</html>