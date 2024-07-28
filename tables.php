<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unimo Complex</title>
    <!-- CSS -->
    <style>
        body {
            background-image: url('./Images/restauarent/a-table-with-food-and-drinks-on-it-ai-generated-free-photo.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;           
            background-size: cover;
            background-position: center;
        }
       
.occupied {

  display: inline-block;
  padding: 10px 46px;
  font-family: Verdana;
  color: #000000;
  background-color: rgb(255, 189, 47);
  border-radius: 10px;

}

.available {

display: inline-block;
padding: 10px 46px;
font-family: Verdana;
color: rgb(255, 189, 47);
background-color: #111111;
border-radius: 10px;

}


    </style>
    <link rel="stylesheet" href="./CSS/main css.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="./CSS/fontawesome-free-6.5.1-web/css/all.css">

    <!-- JS -->
    <script src="./JS/pre loader 2.js"></script>
</head>
<body onload="myFunction()" style="margin:0;">
    <div style="display:none;" id="myDiv" class="animate-bottom">

        <!-- Navbar -->
        <div class="d1">
            <div class="navbar">
                <a href="./Login interface - Admin.php">ADMIN</a>
                <a href="#">REPORTS</a>
                <a href="./menu.php">MENU</a>
                <a href="./payments.php">PAYMENTS</a>
                <a class="active2" href="./tables.php">TABLES</a>
                <a href="./oders.php">ORDERS</a>
                <a href="./reservation.php">RESERVATION</a>
                <a href="./home.php">HOME</a>
                <a class="left active" href="./home.php">UniMO<span style="color: rgb(255, 189, 47); font-weight: bolder;">.</span>Complex</a>
            </div>
        </div>

        <!-- Midflex -->
        <div class="d2">
            <p class="center">Tables</p>
        </div>

        <!-- PHP code to establish connection with the localserver -->
        <?php
        // Username is root
        $user = 'root';
        $password = '';

        // Database name is tablesnew
        $database = 'tablesnew';

        // Server is localhost with port number 3306
        $servername = 'localhost:3306';
        $mysqli = new mysqli($servername, $user, $password, $database);

        // Checking for connections
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }

        // SQL query to select data from database
        $sql = "SELECT * FROM tablesnew";
        $result = $mysqli->query($sql);
        $mysqli->close();
        ?>

        <section>
            <!-- TABLE CONSTRUCTION -->
            <table>
                <tr>
                    <th>Table Number</th>
                    <th>Table Status</th>
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php 
                    // LOOP TILL END OF DATA
                    while ($rows = $result->fetch_assoc()) {
                        $status_class = $rows['status'] === 'Occupied' ? 'occupied' : ($rows['status'] === 'Available' ? 'available' : '');
                ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['table']; ?></td>
                    <td class="<?php echo $status_class; ?>"><?php echo $rows['status']; ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </section>

        <br><br><br><br><br><br>
        
        <!-- Footer -->
        <div class="dr9">
            <p class="design">Copyright<span style="color: rgb(255, 189, 47); font-weight: bolder;">&copy;</span>2024 | Design By : Jeewaka Supun</p>
        </div>

    </div>
</body>
</html>