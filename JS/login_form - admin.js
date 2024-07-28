function login()
          {
            var un = document.getElementById("uname").value;
            var p = document.getElementById("password").value;
            if ( un == 'ADMIN' && p == '123456789')
            {
                alert("scuccessfull")
                window.location.assign("admin.php");
            }
            else
            {
               alert("Enter your valid deatils...")
            }
           
          }