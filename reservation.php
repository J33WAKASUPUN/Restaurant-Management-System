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

.occupied {

display: inline-block;
padding: 10px 30px;
font-family: Verdana;
color: #000000;
background-color: rgb(255, 189, 47);
border-radius: 10px;

}

.available {

display: inline-block;
padding: 10px 30px;
font-family: Verdana;
color: rgb(255, 189, 47);
background-color: #111111;
border-radius: 10px;

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
        <div class="d1">
            <div class="navbar">
              <a href="./Login interface - Admin.php">ADMIN</a>
              <a href="./reports.php">REPORTS</a>
              <a href="./menu.php">MENU</a>
              <a href="./payments.php">PAYMENTS</a>
              <a href="./oders.php">ORDERS</a>
              <a class="active2" href="./reservation.php">RESERVATION</a>
              <a href="./home.php">HOME</a>
              <a class="left active" href="./home.php">UniMO<span style="color: rgb(255, 189, 47); font-weight: bolder;">.</span>Complex</a>
            </div>
        </div>

        <!-- Midflex -->
        <div class="d2">
            <p class="center">Reservation</p>
        </div>

      <div class="d220">
        <div class="d28">
        <form action="insert.php" method="post">

                <div class="row2">
                  <div class="col-75r">
                  <input type="hidden" name="reservation_id" id="rid">
                  </div>
                </div>

                <div class="row2">
                  <div class="col-25r">
                    <label for="fname">First<span style="color: rgba(189, 62, 62, 0.014);">_</span>Name</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="first_name" id="firstName">
                  </div>
                </div>

                <div class="row2">
                  <div class="col-25r">
                    <label for="lname">Last<span style="color: rgba(189, 62, 62, 0.014);">_</span>Name</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="last_name" id="lastName">
                  </div>
                </div>

                <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Number<span style="color: rgba(189, 62, 62, 0.014);">_</span>of<span style="color: rgba(189, 62, 62, 0.014);">_</span>Guests</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="numberofguests" id="nog">
                    </div>
                  </div>

                <div class="row2">
                    <div class="col-25r">
                      <label for="lname">E<span style="color: rgba(189, 62, 62, 0.014);">_</span>mail</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="email" id="e">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Phone<span style="color: rgba(189, 62, 62, 0.014);">_</span>Number</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="phone" id="p">
                    </div>
                  </div>

                <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Date</label>
                    </div>
                    <div class="col-75r">
                    <input type="date" name="date" id="d">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Time</label>
                    </div>
                    <div class="col-75r">
                    <input type="time" name="time" id="t">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Table</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="table_id" id="tbl" placeholder="Table ID">
                    <br>
                    <br>
                    <input type="text" name="table" id="tbl" placeholder="Table Number">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Spacial<span style="color: rgba(189, 62, 62, 0.014);">_</span>Occasion</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="spacialoccasion" id="sp">
                    </div>
                  </div>
                  <br>
                  <br>

                <div class="row2">
                    <input type="submit" value="SUBMIT" onclick="submit_me()">
                </div>

                </form>

                
        </div>

        <div class="d228">

                <!-- PHP code to establish connection with the localserver -->
                <?php

 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'tablesnew';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM tablesnew ";
$result = $mysqli->query($sql);
$mysqli->close();
?>


<section>
     
       <!-- TABLE CONSTRUCTION -->
       <table class="table2">
           <tr>
               <th class="th2">Table Number
               <th class="th2">Table Status</th>
         
           </tr>
           <!-- PHP CODE TO FETCH DATA FROM ROWS -->
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
        </div>
          
      </div>

       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
             
        <!-- PHP code to establish connection with the localserver -->
<?php

 
 // Username is root
 $user = 'root';
 $password = '';
  
 // Database name is geeksforgeeks
 $database = 'reservationnew';
  
 // Server is localhost with
 // port number 3306
 $servername='localhost:3306';
 $mysqli = new mysqli($servername, $user, $password, $database);
  
 // Checking for connections
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
  
 // SQL query to select data from database
 $sql = " SELECT * FROM reservationnew ";
 $result = $mysqli->query($sql);
 $mysqli->close();
 
 ?>
 



<section>
      <div class="d2">
            <p class="center">Reservation List</p>
        </div>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Reservation <br> <center>ID</center></th>
                <th>First <br> <center>Name</center></th>
                <th>Last <br> <center>Name</center> </th>
                <th>Number <br> <center>of</center> Guests</th>
                <th>E Mail</th>
                <th>Phone <br> <center>Number</center></th>
                <th>Date</th>
                <th>Time</th>
                <th>Table <br> <center>Number</center></th>
                <th>Spacial <br> <center>Occasion</center></th>
                <th>Delete</th>
          
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php 
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['id'];?></td>    
                <td><?php echo $rows['first_name'];?></td>
                <td><?php echo $rows['last_name'];?></td>
                <td><?php echo $rows['numberofguests'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['time'];?></td>
                <td><?php echo $rows['table'];?></td>
                <td><?php echo $rows['spacialoccasion'];?></td>
                <td><a href="delete_reservation.php?id=<?php echo $rows['id']; ?>"><input type="button" value="DELETE"></a></td>

            </tr>
            <?php
                }
            ?>
        </table>
    </section>

        <!-- Footer -->
        

        <div class="dr9">
            <p class="design">Copyright<span style="color: rgb(255, 189, 47); font-weight: bolder;">&copy;</span>2024 | Design By : Jeewaka Supun</p>
        </div>

      
    </body>
</html>