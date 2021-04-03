<?php include_once"app/includes/nav.php";?>
    <link rel="stylesheet" href="static/css/style-sing-log.css">
    <div class="indexwelcome">
      <div class="singupcont">
        <center>
          <form action="users/signup-process.php" method="post">
              <label  class="label-sigup" >Full name :</label><br>
                 <input   class="inputSignup" type="text" name="nameUs" placeholder="Full name..."><br>
              <label>Email :</label><br>
                <input  type="text" name="email" placeholder="Email..."><br>
              <label>Username :</label><br>
                 <input type="text" name="uid" placeholder="Username..."><br>
              <label >Password :</label><br>
                 <input type="password" name="pwd" placeholder="Password..."><br>
              <label>Repeat password :</label><br>
                 <input   type="password" name="pwdrepeat" placeholder="Repeat password..."><br>
                 <button type="submit" name="submitSignup" class="buttonLog">Sign up </button>
          </form>
        </center>
    <?php
  //if the user doesnt signup corectly
  // with get wi che data that we can see es the eero writen above in sigup-inc.php or function-inc.php
  //simply $_GET meton can be see and estract data from url $_POST no
    if(isset($_GET["error"])) {
         if($_GET["error"] == "emptyinput"){
           echo "<p class='errorlog'> Fill in all fields! </p>";
         }
         else if ($_GET["error"] == "invaliduid"){
           echo "<p class='errorlog'> Choose a proper username! </p>";
         }
         else if ($_GET["error"] == "invaliduid"){
           echo "<p class='errorlog'> Choose a proper email! </p>";
         }
         else if ($_GET["error"] == "passwordsdontmatch"){
           echo "<p class='errorlog'>  Password doesn't match! </p>";
         }
         else if ($_GET["error"] == "passwordtoshort"){
           echo "<p class='errorlog'>  Password need to be at least of 5 character! </p>";
         }
         else if ($_GET["error"] == "usernametaken"){
           echo "<p class='errorlog'>  Username or email taken! </p>";
         }
         else if ($_GET["error"] == "stmlfailed"){
           echo "<p class='errorlog'>  Something went wrong , try again!</p>";
         }
         else if ($_GET["error"] == "none"){
           echo "<p class='corlog'>  You have signed up !</p>";
           header( "refresh:1;url=index.php" );
         }
    }
    ?>
        <p id= "Go-to-Log">
           If you have an account go to
           <a href="login.php">Log In</a>
        </p>
      </div>
  </div>
</body>
</html>
