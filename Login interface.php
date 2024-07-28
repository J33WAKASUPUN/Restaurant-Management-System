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
         <script src="./JS/pre loader.js"></script>
         <script src="./JS/login_form.js"></script>

    </head>
    <body onload="myFunction()" style="margin:0;">

      
      <div id="loader">
        <div class="loading-text">
          
          <span>L</span>
          <span>O</span>
          <span>A</span>
          <span>D</span>
          <span>I</span>
          <span>N</span>
          <span>G</span>
        
        </div>
      </div>
      
      
     <div style="display:none;" id="myDiv" class="animate-bottom">


<!-- Midflex -->


<div class="d17">

  <div class="d26">
    <p class="center">System Login</p>
  </div>

      <form name="form">
      <div class="row2">
        <div class="col-25">
          <label for="fname">User<span style="color: rgba(189, 62, 62, 0.014);">_</span>Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="uname" name="username" >
        </div>
      </div>

      <div class="row2">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password">
        </div>
      </div>

      <br>
      
      </form>

      <div class="row2">
        <input type="submit" value="LOGIN" onclick="login()">
      </div>
      
</div>

     </div>

    </body>
</html>