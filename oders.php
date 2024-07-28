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
            background-size:  cover;
            background-position: center;
            }

  ul {
    list-style-type: none;
  }
  
  .list {
    width: 96%;
    background: rgba(255, 189, 47, 0.2);
    border-radius: 10px;
    margin-left:17%;
    
  }
  .list-items {
    padding-right: 33px;
    padding-bottom: 10px;
    padding-top: 10px;
    font-family:Verdana;
    transition: .7s ease;
    color:rgb(255, 255, 255);
  
  }
  .list-items:hover {
    color: rgb(255, 189, 47);
    
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
              <a class="active2" href="./oders.php">ORDERS</a>
              <a href="./reservation.php">RESERVATION</a>
              <a href="./home.php">HOME</a>
              <a class="left active" href="./home.php">UniMO<span style="color: rgb(255, 189, 47); font-weight: bolder;">.</span>Complex</a>
            </div>
        </div>

        <!-- Midflex -->
        <div class="d2">
            <p class="center">Orders</p>
        </div>

      <div class="d200">

        <div class="d38">
        <form action="insert2.php" method="post">

               <div class="row2">
                  <div class="col-25r">
                    <label for="fname">Reservation<span style="color: rgba(189, 62, 62, 0.014);">_</span>ID</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="reservation_id" id="rid">
                  </div>
                </div>

                <div class="row2">                  
                  <div class="col-75r">
                  <input type="hidden" name="oder_id" id="oid">
                  </div>
                </div>

                <div class="row2">
                  <div class="col-25r">
                    <label for="lname">Table<span style="color: rgba(189, 62, 62, 0.014);">_</span>Number</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="table" id="tbl">
                  </div>
                </div>

                <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Item<span style="color: rgba(189, 62, 62, 0.014);">_</span>Orderd</label>
                    </div>
                    <div class="col-75r">
                    <input type="hidden" name="item_orded_cat" id="item_cat" >               
                    </div>                   
                    <div class="col-75r">
                    <input type="text" name="item_orded_name" id="item_name" >
                    <ul class="list"></ul>
                    </div>

<script>
    let categories = ["Starters", "Submarine", "Chicken", "Shawarma", "Burgers", "Chinese (Rice)","Chinese (Sides)","Indian","Indian (Curries)","Beverages", "Deserts",];
    let sortedCategories = categories.sort();

    let itemAmounts = {
      "Starters - Chicken Sweet Corn Soup":690.00,
  "Starters - Mix Green Salad":690.00,
  "Starters - French Fries":690.00,
  "Starters - French Fries with Chicken":790.00,
  "Starters - French Fries with Nuggets":740.00,

  "Submarine - Chicken":990.00,
  "Submarine - Spicy Chicken":1140.00,
  "Submarine - Beef":1190.00,
  "Submarine - Prawns":1290.00,
  "Submarine - UNIMO Special":1390.00,

  "Chicken - Tandoori Chicken":690.00,
  "Chicken - Crispy Chicken (5PCS)":1900.00,
  "Chicken - Crispy Chicken (10PCS)":3790.00,

  "Shawarma - Chicken Shawarma":790.00,
  "Shawarma - Chilli Chicken":890.00,

  "Burgers - Crispy Chicken":890.00,
  "Burgers - Beef":890.00,

  "Chinese (Rice) - Fried Rice Chicken":890.00,
  "Chinese (Rice) - Fried Rice Beef":990.00,
  "Chinese (Rice) - Fried Rice Seafood":1290.00,
  "Chinese (Rice) - Nasi Goreng":1190.00,
  "Chinese (Rice) - Dragon Rice":1390.00,

  "Chinese (Sides) - Devilled Chicken":990.00,
  "Chinese (Sides) - pepper Chicken":990.00,
  "Chinese (Sides) - Beef Fry with Onion":1090.00,
  "Chinese (Sides) - Hot Butter cuttele fish":1290.00,
  "Chinese (Sides) - Hot Butter prawn":1290.00,

  "Indian - UNIMO Special Ghee Parata":200.00,
  "Indian - Naan Plain":190.00,
  "Indian - Naan Garlic":220.00,
  "Indian - Naan Cheese":250.00,
  "Indian - Naan Butter":220.00,

  "Indian (Curries) - Butter Beef":1290.00,
  "Indian (Curries) - Butter Chicken":1090.00,
  "Indian (Curries) - Butter Prawn":1290.00,
  "Indian (Curries) - Kadai Chicken":1090.00,
  "Indian (Curries) - Masala Chicken":990.00,
  "Indian (Curries) - Masala Prawn":1290.00,

  "Beverages - Sweet Lassi":490.00,
  "Beverages - Mango Lassi":590.00,
  "Beverages - Vanila Milkshake":690.00,
  "Beverages - Strawberry Milkshake":690.00,
  "Beverages - Mango Milkshake":690.00,
  "Beverages - Durian Milkshake":690.00,
  "Beverages - Lemon N Ginger":350.00,
  "Beverages - Lime n Mint":350.00,
  "Beverages - falooda":490.00,
  "Beverages - water 1LTR":130.00,
  "Beverages - Soft Drink 500ML":170.00,
  "Beverages - Soft Drink 1LTR":270.00,

  "Deserts - Durian Ice Cream":490.00,
  "Deserts - Orio Ice Cream":490.00,
  "Deserts - Strawberry Cheesecake Ice Cream":490.00,
  "Deserts - Vanila with Honey Ice Cream":490.00,
  "Deserts - Chocolate Fudge Ice Cream":490.00,
  "Deserts - Mango Ice Cream":490.00,
  "Deserts - Butter Scotch Ice Cream":490.00,
  "Deserts - Durian Ice Cream":490.00,
    };

    let sortedItemNames = Object.keys(itemAmounts).sort();

    let itemCatInput = document.getElementById("item_cat");
    itemCatInput.addEventListener("keyup", (e) => {
      removeElements(itemCatInput.nextElementSibling);
      for (let i of sortedCategories) {
        if (i.toLowerCase().startsWith(itemCatInput.value.toLowerCase()) && itemCatInput.value != "") {
          let listItem = document.createElement("li");
          listItem.classList.add("list-items");
          listItem.style.cursor = "pointer";
          listItem.setAttribute("onclick", "displayCategory('" + i + "')");
          let word = "<b>" + i.substr(0, itemCatInput.value.length) + "</b>";
          word += i.substr(itemCatInput.value.length);
          listItem.innerHTML = word;
          itemCatInput.nextElementSibling.appendChild(listItem);
        }
      }
    });

    function displayCategory(value) {
      itemCatInput.value = value;
      removeElements(itemCatInput.nextElementSibling);
    }

    let itemNameInput = document.getElementById("item_name");
    itemNameInput.addEventListener("keyup", (e) => {
      removeElements(itemNameInput.nextElementSibling);
      for (let i of sortedItemNames) {
        if (i.toLowerCase().startsWith(itemNameInput.value.toLowerCase()) && itemNameInput.value != "") {
          let listItem = document.createElement("li");
          listItem.classList.add("list-items");
          listItem.style.cursor = "pointer";
          listItem.setAttribute("onclick", "displayItemName('" + i + "')");
          let word = "<b>" + i.substr(0, itemNameInput.value.length) + "</b>";
          word += i.substr(itemNameInput.value.length);
          listItem.innerHTML = word;
          itemNameInput.nextElementSibling.appendChild(listItem);
        }
      }
    });

    function displayItemName(value) {
      itemNameInput.value = value;
      document.getElementById("amount").value = itemAmounts[value];
      removeElements(itemNameInput.nextElementSibling);
    }

    function removeElements(parent) {
      while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
      }
    }
  </script>

                </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Item<span style="color: rgba(189, 62, 62, 0.014);">_</span>Amount</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="amount" id="amount"> 
                    </div>
                  </div>

                <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Quantity</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="quantity" id="quantity">
                    </div>
                  </div>
<script>
function calculateTotalAmount() {
    // Get the values of the "amount" and "quantity" fields
    var amount = parseFloat(document.getElementById("amount").value);
    var quantity = parseFloat(document.getElementById("quantity").value);

    // Calculate the total amount
    var totalAmount = amount * quantity;

    // Set the value of the "total_amount" field to the calculated total
    document.getElementById("totalamount").value = totalAmount;
}
</script>                  
                  <br>
                  <br>

                  <div class="row2">
                    <button id="calculateBtn" class="btncal" type="button" onclick="calculateTotalAmount()">CALCULATE</button>
                  </div>

                  <br>
                 
                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Total<span style="color: rgba(189, 62, 62, 0.014);">_</span>Amount</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="total_amount" id="totalamount">
                    </div>
                  </div>
  
                  <br>
                  <br>
                  
                <div class="row2">
                    <input type="submit" value="SUBMIT" onclick="submit_me()">
                </div>

                </form>               
        </div>

        <div class="d218">
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
        <!-- TABLE CONSTRUCTION -->
        <table class="table1">
            <tr>
                <th class="th1">Reservation ID</th>
                <th class="th1">Table Number</th>
                <th class="th1">Number of Guests</th>
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
                    <td><?php echo $rows['table'];?></td>  
                    <td><?php echo $rows['numberofguests'];?></td>  
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
  <br>
  <br>
  <br>
  <br>
  <br>
 
 
  
      <div class="d2">
            <p class="center">Orders List</p>
        </div>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Reservation ID</th>
                <th>Order ID</th>
                <th>Table Number</th>
                <th>Item Orderd</th>
                <th>Item Amount</th>
                <th>Quantity</th>
                <th>Total Amount</th>
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
                <td><?php echo $rows['oder_id'];?></td>    
                <td><?php echo $rows['table'];?></td>
                <td><?php echo $rows['item_orded_name'];?></td>
                <td><?php echo $rows['amount'];?></td>
                <td><?php echo $rows['quantity'];?></td>
                <td><?php echo $rows['total_amount'];?></td>
                <td><a href="delete_orders.php?oder_id=<?php echo $rows['oder_id']; ?>"><input type="button" value="DELETE"></a></td>
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