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
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <body onload="myFunction()" style="margin:0;">
     <div style="display:none;" id="myDiv" class="animate-bottom">

        <!-- Navbar -->
        <div class="d1">
            <div class="navbar">
              <a href="./Login interface - Admin.php">ADMIN</a>
              <a href="./reports.php">REPORTS</a>
              <a href="./menu.php">MENU</a>
              <a class="active2" href="./payments.php">PAYMENTS</a>
              <a href="./oders.php">ORDERS</a>
              <a href="./reservation.php">RESERVATION</a>
              <a href="./home.php">HOME</a>
              <a class="left active" href="./home.php">UniMO<span style="color: rgb(255, 189, 47); font-weight: bolder;">.</span>Complex</a>
            </div>
        </div>

        <!-- Midflex -->
        <div class="d2">
            <p class="center">Payments</p>
        </div>

      <div class="d200">
        <div class="d118">
        <form id="paymentForm" method="post">

                <div class="row2">
                  <div class="col-25r">
                    <label for="fname">Reservation<span style="color: rgba(189, 62, 62, 0.014);">_</span>ID</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="reservation_id" id="rid">
                  </div>
                </div>

                <div class="row2">
                   <div class="col-25r">
                     <label for="fname">Table</label>
                </div>
                <div class="col-75r">
                     <input type="text" name="table_id" id="table" placeholder="Table ID">
                     <br>
                     <br>
                     <input type="text" name="table" id="table" placeholder="Table Number">
                </div>
                </div>

               <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Grand<span style="color: rgba(189, 62, 62, 0.014);">_</span>Total<span style="color: rgba(189, 62, 62, 0.014);">_</span>Amount</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="tot" id="totamount">
                    </div>

                    <br>

                    <script>
                      function calculateGrandTotalAmount() {
                        // Get the input value
                      var input = document.getElementById("totamount").value;
                       // Extract numbers from the input using regex
                      var numbers = input.match(/\d+/g);
                       // Calculate the sum
                      var sum = numbers.reduce(function(acc, val) {
                      return acc + parseInt(val);
                       }, 0);
                       // Update the grand total amount input field
                      document.getElementById("grandtotamount").value = sum;
                      }
                    </script>

                    <div class="row2">
                    <button id="calculateBtn" class="btncal" type="button" onclick="calculateGrandTotalAmount()">CALCULATE</button>
                    </div>

                    <br>

                    <div class="col-75r">
                    <input type="text" name="grandtotal_amount" id="grandtotamount">
                    </div>
                  </div>

                <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Payment<span style="color: rgba(189, 62, 62, 0.014);">_</span>Method</label>
                    </div>
                  <div class="radio-group">
                    <input type="radio" id="option1" name="payment_method" value="Cash">
                    <label class="labelradio1" for="option1">Cash</label>
                  </div>

                  <div class="radio-group">
                    <input type="radio" id="option2" name="payment_method" value="Debit Card<">
                    <label class="labelradio2" for="option2">Debit<span style="color: rgba(189, 62, 62, 0.014);">_</span>Card</label>
                  </div>

                <div class="radio-group">
                    <input type="radio" id="option3" name="payment_method" value="Credit Card">
                    <label class="labelradio3" for="option3">Credit<span style="color: rgba(189, 62, 62, 0.014);">_</span>Card</label>
                </div>
                  </div>
                  <br>

                  <hr>
 
                  <br>

                  <div class="row2">
                     <input type="submit" value="SUBMIT" onclick="submitForm(event)">
                  </div>

                  <br>
                  <br>

                  <div class="row2">
                     <button id="calculateBtn" class="btncal" type="button" onclick="printBill()">PRINT BILL</button>
                  </div>

<script>
function submitForm(event) {
  event.preventDefault(); // Prevent the default form submission
  var form = document.getElementById("paymentForm");
  var formData = new FormData(form);
  
  // Submit the form to insert4.php
  fetch("insert4.php", 
  {
    method: "POST",
    body: formData
  }
)
  .then(response => {
    if (response.ok) {
      console.log("Data inserted successfully!");
    } else {
      console.error("Failed to insert data:", response.statusText);
    }
  })
  .catch(error => {
    console.error("Error inserting data:", error);
  });
}

function printBill() {
  var reservationId = document.getElementById("rid").value;
  window.open("print_bill.php?reservation_id=" + reservationId, "_self");
}
</script>


        </form>         

        </div>

        
        

        <div class="d218">
        <?php
 
 // Username is root
 $user = 'root';
 $password = '';
  
 // Database name is geeksforgeeks
 $database = 'ordersnew';
  
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
 $sql = " SELECT * FROM ordersnew ";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>


<section>
        <!-- TABLE CONSTRUCTION -->
        <table class="table1">
            <tr>
                <th class="th1">Reservation ID</th>
                <th class="th1">Order ID</th>
                <th class="th1">Table Number</th>
                <th class="th1">Item Orderd</th>
                <th class="th1">Item Amount</th>
                <th class="th1">Quantity</th>
                <th class="th1">Total Amount</th>

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
                <td class="td1"><?php echo $rows['reservation_id'];?></td>
                <td class="td1"><?php echo $rows['oder_id'];?></td>   
                <td class="td1"><?php echo $rows['table'];?></td> 
                <td class="td1"><?php echo $rows['item_orded_name'];?></td>
                <td class="td1"><?php echo $rows['amount'];?></td>
                <td class="td1"><?php echo $rows['quantity'];?></td>
                <td class="td1"><?php echo $rows['total_amount'];?></td>
                
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
    
        </div>

      </div>

              <!-- PHP code to establish connection with the localserver -->
<?php
 
 // Username is root
 $user = 'root';
 $password = '';
  
 // Database name is geeksforgeeks
 $database = 'paymentsnew';
  
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
 $sql = " SELECT * FROM paymentsnew ";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>


<section>
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
  
 
  
      <div class="d2">
            <p class="center">Payments List</p>
        </div>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Reservation ID</th>
                <th>Table Number</th>
                <th>Grand Total Amount</th>
                <th>Payment Method</th>
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
                <td><?php echo $rows['reservation_id'];?></td>
                <td><?php echo $rows['table'];?></td>    
                <td><?php echo $rows['grandtotal_amount'];?></td>
                <td><?php echo $rows['payment_method'];?></td>
                <td><a href="delete_payments.php?reservation_id=<?php echo $rows['reservation_id']; ?>"><input type="button" value="DELETE"></a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>

      <br>
      <br>
      <br>
      <br>

        <!-- Footer -->
        
        <div class="dr9">
            <p class="design">Copyright<span style="color: rgb(255, 189, 47); font-weight: bolder;">&copy;</span>2024 | Design By : Jeewaka Supun</p>
        </div>

      
    </body>
</html>