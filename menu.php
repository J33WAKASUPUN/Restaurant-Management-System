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
              <a class="active2" href="./menu.php">MENU</a>
              <a href="./payments.php">PAYMENTS</a>
              <a href="./oders.php">ORDERS</a>
              <a href="./reservation.php">RESERVATION</a>
              <a href="./home.php">HOME</a>
              <a class="left active" href="./home.php">UniMO<span style="color: rgb(255, 189, 47); font-weight: bolder;">.</span>Complex</a>
            </div>
        </div>

        <!-- Midflex -->
        <div class="d2">
            <p class="center">Menu</p>
        </div>

        <div class="d68">
        <form action="insert3.php" method="post">

                <div class="row2">
                  <div class="col-25r">
                    <label for="fname">Item<span style="color: rgba(189, 62, 62, 0.014);">_</span>ID</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="itemid" id="iid">
                  </div>
                </div>

                <div class="row2">
                  <div class="col-25r">
                    <label for="fname">Item<span style="color: rgba(189, 62, 62, 0.014);">_</span>Category</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="itemcategory" id="ic">
                  </div>
                </div>

                <div class="row2">
                  <div class="col-25r">
                    <label for="lname">Item<span style="color: rgba(189, 62, 62, 0.014);">_</span>Name</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="itemname" id="in">
                  </div>
                </div>

                <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Item<span style="color: rgba(189, 62, 62, 0.014);">_</span>Amount</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="itemamount" id="ia">
                    </div>
                  </div>
                  <br>
                  <br>

                <div class="row2">
                    <input type="submit" value="SUBMIT" onclick="submit_me()" >
                </div>

                </div>
                
                </form>
  
        </div>

    <br>
    <br>
    <br>

    </div>

    <div class="d_menuimg">
      <div class="d11" >
        <div class="container3">
            <img src="./Images/menu/menu 1.png" alt="Avatar" class="image3">
        </div>
      </div>

      <div class="d12" >
        <div class="container3">
            <img src="./Images/menu/menu 2.png" alt="Avatar" class="image3">
        </div>
      </div>

      <div class="d13" >
        <div class="container3">
            <img src="./Images/menu/menu 3.png" alt="Avatar" class="image3">
        </div>
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

        <!-- PHP code to establish connection with the localserver -->
<?php

 
 // Username is root
 $user = 'root';
 $password = '';
  
 // Database name is geeksforgeeks
 $database = 'menunew';
  
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
 $sql = " SELECT * FROM menunew ";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>


<section>
      <div class="d2">
            <p class="center">Menu List</p>
        </div>
        <br>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Item ID</th>
                <th>Item Category</th>
                <th>Item Name</th>
                <th>Item Amount</th>
                <th>Delete</th>
                <th>Edit</th>
          
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
                <td><?php echo $rows['item_id'];?></td>    
                <td><?php echo $rows['item_category'];?></td>
                <td><?php echo $rows['item_name'];?></td>
                <td><?php echo $rows['item_price'];?></td>
                <td><a href="delete_menu.php?item_id=<?php echo $rows['item_id']; ?>"><input type="button" value="DELETE"></a></td>
                <td><a href="edit_menu.php?item_id=<?php echo $rows['item_id']; ?>"><input type="button" value="EDIT"></a></td>

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