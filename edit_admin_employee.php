

<?php
$conn = mysqli_connect("localhost", "root", "", "adminemployeenew");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_GET['employee_id'];

$sql = "SELECT * FROM adminemployeenew WHERE employee_id='$id'";
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
            <p class="center">Edit Employees</p>
        </div>



        <div class="d108">
        <form action="update_adimn_employee.php" method="post">
        
        
                  <input type="hidden" name="employee_id" value="<?php echo $row['employee_id']; ?>">


                  <div class="row2">
                  <div class="col-25r">
                    <label for="fname">Full<span style="color: rgba(189, 62, 62, 0.014);">_</span>Name</label>
                  </div>
                  <div class="col-75r">
                  <input type="text" name="full_name" id="firstName" value="<?php echo $row['full_name']; ?>">
                  </div>
                </div>

                <div class="row2">
                  <div class="col-25r">
                    <label for="lname">Date<span style="color: rgba(189, 62, 62, 0.014);">_</span>of<span style="color: rgba(189, 62, 62, 0.014);">_</span>Birth</label>
                  </div>
                  <div class="col-75r">
                  <input type="date" name="date_of_birth" id="lastName" value="<?php echo $row['date_of_birth']; ?>">
                  </div>
                </div>

                <div class="row2">
                    <div class="col-25r">
                    <label for="lname">Address</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="address" id="nog" value="<?php echo $row['address']; ?>">
                    </div>
                  </div>

                <div class="row2">
                    <div class="col-25r">
                    <label for="lname">Phone<span style="color: rgba(189, 62, 62, 0.014);">_</span>of<span style="color: rgba(189, 62, 62, 0.014);">_</span>Number</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="phone" id="e" value="<?php echo $row['phone']; ?>">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                    <label for="lname">E<span style="color: rgba(189, 62, 62, 0.014);">_</span>mail</label>>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="e_mail" id="p" value="<?php echo $row['e_mail']; ?>">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Job<span style="color: rgba(189, 62, 62, 0.014);">_</span>Title</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="job_title" id="t" value="<?php echo $row['job_title']; ?>">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Hours<span style="color: rgba(189, 62, 62, 0.014);">_</span>of<span style="color: rgba(189, 62, 62, 0.014);">_</span>Work</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="hours_of_work" id="tbl" value="<?php echo $row['hours_of_work']; ?>">
                    </div>
                  </div>

                  <div class="row2">
                    <div class="col-25r">
                      <label for="lname">Salary</label>
                    </div>
                    <div class="col-75r">
                    <input type="text" name="salary" id="sp" value="<?php echo $row['salary']; ?>">
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

                
        <div class="dr9">
            <p class="design">Copyright<span style="color: rgb(255, 189, 47); font-weight: bolder;">&copy;</span>2024 | Design By : Jeewaka Supun</p>
        </div>
    </div>

</body>
</html>