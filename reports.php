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

            h2 {
    color: rgb(255, 255, 255);
    text-decoration: none;
    font-family:Verdana;
    font-size: 30px;
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
        <div class="d1">
            <div class="navbar">
              <a href="./Login interface - Admin.php">ADMIN</a>
              <a class="active2" href="./reports.php">REPORTS</a>
              <a href="./menu.php">MENU</a>
              <a href="./payments.php">PAYMENTS</a>
              <a href="./oders.php">ORDERS</a>
              <a href="./reservation.php">RESERVATION</a>
              <a href="./home.php">HOME</a>
              <a class="left active" href="./home.php">UniMO<span style="color: rgb(255, 189, 47); font-weight: bolder;">.</span>Complex</a>
            </div>
        </div>


        <div class="d1188"> 
            
        <!-- Midflex -->
        <div class="d2">
            <p class="center">Reports</p>
        </div>

 
        <form action="reports_save.php" method="post">
            <button class="btncal" type="submit" name="generate_report">GENERATE REPORT</button>
        </form>

        <br>
        <br>

        </div>
        <!-- Footer -->
    
        <div class="dr9">
            <p class="design">Copyright<span style="color: rgb(255, 189, 47); font-weight: bolder;">&copy;</span>2024 | Design By : Jeewaka Supun</p>
        </div>

      
    </body>
</html>