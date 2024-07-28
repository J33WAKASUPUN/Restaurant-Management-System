function login()
          {
            var un = document.getElementById("uname").value;
            var p = document.getElementById("password").value;
            if ( un == 'Jeewaka' && p == '15611')
            {
                alert("scuccessfull")
                window.location.assign("home.php");
            }
            else
            {
               alert("Enter your valid deatils...")
            }
           
          }