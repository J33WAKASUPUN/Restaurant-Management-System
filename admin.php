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
              <a class="active2" href="./Login interface - Admin.php">ADMIN</a>
              <a href="./reports.php">REPORTS</a>
              <a href="./menu.php">MENU</a>
              <a href="./payments.php">PAYMENTS</a>
              <a href="./oders.php">ORDERS</a>
              <a href="./reservation.php">RESERVATION</a>
              <a href="./home.php">HOME</a>
              <a class="left active" href="./home.php">UniMO<span style="color: rgb(255, 189, 47); font-weight: bolder;">.</span>Complex</a>
            </div>
        </div>

        <!-- Midflex -->
        <div class="d2">
            <p class="center">Add Employees</p>
        </div>

        <div class="d48">
        <form action="insert - admin - employee.php" method="post">

                <div class="row2">
                  <div class="col-25r">
                    <label for="fname">Employee<span style="color: rgba(189, 62, 62, 0.014);">_</span>ID</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="employee_id" id="rid">
                  </div>
                </div>

                <div class="row2">
                  <div class="col-25r">
                    <label for="fname">Full<span style="color: rgba(189, 62, 62, 0.014);">_</span>Name</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="full_name" id="firstName">
                  </div>
                </div>

                <div class="row2">
                  <div class="col-25r">
                    <label for="lname">Date<span style="color: rgba(189, 62, 62, 0.014);">_</span>of<span style="color: rgba(189, 62, 62, 0.014);">_</span>Birth</label>
                  </div>
                  <div class="col-75r">
                  <input type="date" name="date_of_birth" id="lastName">
                  </div>
                </div>

                <div class="row2">
                    <div class="col-25r">
                    <label for="lname">Address</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="address" id="nog">
                    </div>
                  </div>

                <div class="row2">
                    <div class="col-25r">
                    <label for="lname">Phone<span style="color: rgba(189, 62, 62, 0.014);">_</span>of<span style="color: rgba(189, 62, 62, 0.014);">_</span>Number</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="phone" id="e">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                    <label for="lname">E<span style="color: rgba(189, 62, 62, 0.014);">_</span>mail</label>>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="e_mail" id="p">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Job<span style="color: rgba(189, 62, 62, 0.014);">_</span>Title</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="job_title" id="t">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Hours<span style="color: rgba(189, 62, 62, 0.014);">_</span>of<span style="color: rgba(189, 62, 62, 0.014);">_</span>Work</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="hours_of_work" id="tbl">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Salary</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="salary" id="sp">
                    </div>
                  </div>
                  <br>
                  <br>

                <div class="row2">
                    <input type="submit" value="SUBMIT" onclick="submit_me()">
                </div>

                </form>

                
        </div>



        <!-- PHP code to establish connection with the localserver -->
<?php
 
 // Username is root
 $user = 'root';
 $password = '';
  
 // Database name is geeksforgeeks
 $database = 'adminemployeenew';
  
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
 $sql = " SELECT * FROM adminemployeenew ";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>


<section>
      <div class="d2">
            <p class="center">Employee List</p>
        </div>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Employee ID</th>
                <th>full Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>E mail</th>
                <th>Job Title</th>
                <th>Hours of Work</th>
                <th>Salary</th>
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
                <td><?php echo $rows['employee_id'];?></td>    
                <td><?php echo $rows['full_name'];?></td>
                <td><?php echo $rows['date_of_birth'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['e_mail'];?></td>
                <td><?php echo $rows['job_title'];?></td>
                <td><?php echo $rows['hours_of_work'];?></td>
                <td><?php echo $rows['salary'];?></td>
                <td><a href="delete_admin_employee.php?employee_id=<?php echo $rows['employee_id']; ?>"><input type="button" value="DELETE"></a></td>
                <td><a href="edit_admin_employee.php?employee_id=<?php echo $rows['employee_id']; ?>"><input type="button" value="EDIT"></a></td>
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