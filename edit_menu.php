<?php
$conn = mysqli_connect("localhost", "root", "", "menunew");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_GET['item_id'];

$sql = "SELECT * FROM menunew WHERE item_id='$id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
} else{
    echo "No record found";
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Unimo Complex</title>
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
   

        <div class="d2">
            <p class="center">Edit Menu Items</p>
        </div>



        <div class="d78">
        <form action="update_menu.php" method="post">
        
        
                  <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">

                <div class="row2">
                  <div class="col-25r">
                    <label for="fname">Item<span style="color: rgba(189, 62, 62, 0.014);">_</span>Category</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="item_category" value="<?php echo $row['item_category']; ?>">
                  </div>
                </div>

                <div class="row2">
                  <div class="col-25r">
                    <label for="lname">Item<span style="color: rgba(189, 62, 62, 0.014);">_</span>Name</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="item_name" value="<?php echo $row['item_name']; ?>">
                  </div>
                </div>

                <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Item<span style="color: rgba(189, 62, 62, 0.014);">_</span>Amount</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="item_price" value="<?php echo $row['item_price']; ?>">
                    </div>
                  </div>
                  <br>
                  <br>
                  <br>

                <div class="row2">
                    <input type="submit" value="UPDATE" onclick="submit_me()" >
                </div>

                </div>
                
                </form>

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
             


        <div class="dr9">
            <p class="design">Copyright<span style="color: rgb(255, 189, 47); font-weight: bolder;">&copy;</span>2024 | Design By : Jeewaka Supun</p>
        </div>
    </div>

</body>
</html>