<?php include_once"app/includes/nav.php";?>
<link rel="stylesheet" href="static/css/style-sing-log.css">
   <div class="welcomelogin">
       <div class="logincont">
         <h1> Log In </h1>
           <form action="users/login-process.php" method="post">
              <label for="userEmail"  >User :</label><br>
                  <input type="text" name="userEmail" placeholder="Username/Email..." ><br>
              <label id="passlab">Password :</label><br>
                 <input id="passlog" type="password" name="pwd" placeholder="Password..." ><br>
                 <button type="submit" name="submitLogin">Log In </button><br>
           </form>
           <?php
           //error masage from login-inc.php
           if(isset($_GET["error"])) {
                if($_GET["error"] == "emptyinput"){
                  echo "<p class='error'> Fill in all fields! </p>";
                }
                else if ($_GET["error"] == "wrongus"){
                  echo "<p class='error' > Incorrect Email or Username! </p>";
                }
                else if ($_GET["error"] == "wrongp"){
                  echo "<p class='error'> Incorrect password! </p>";
                }
                else if ($_GET["error"] == "nonlogin"){
                  echo "<p class='error'> You need to log In to add a comment </p>";
                }
                else if ($_GET["error"] == "passandus"){
                  echo "<p class='error' > Incorrect password and username! </p>";
                }
           }
           ?>
            <p id= "Go-to-r">
               If you don't have an account go to
               <a href="signup.php">Sign Up</a>
            </p>
        </div>
     </div>
