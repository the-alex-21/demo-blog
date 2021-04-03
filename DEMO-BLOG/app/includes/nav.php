<?php
session_start();//for given the value tu $_SESSION["userid"]
?>
<!DOCTYPE html>
 <html>
  <head>
    <script src="static/js/JsFunctions.js"></script>
     <title>The programmer blog</title>
     <link rel = "icon" href = "static/image/logo.png" type = "image/x-icon">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="static/css/style.css">
 </head>
 <body>
      <nav class="topnav">
          <td><a href="index.php" id ="logo" ><img src= "static/image/logo.png" ></a></td>
          <td><a href="#" id="About" >About</a></td>
          <td><button href="#contact" onclick="scrollWin()" id="Blogs" >Blogs</button></td>
          <?php
          if (isset($_SESSION["userid"])){//ifn there the value $_SESSION["userid"]
            // present in function-inc.php it mean that we are log in .
            echo "<style>
            #Blogs {margin-right:5px;}
            #LogIn{
              position:relative; margin-left:0px
            }
            @media only screen and (min-width:768px) {
              #Blogs {margin-right:0px;}
              #LogIn{
                margin-left:10px
            }
            topnav #About ,#Blogs ,#LogIn ,#Singup ,#myBtn { margin-left:50px;
              position : relative !important;
                }

            }
            </style>";
            echo "<a href='users/Logout-process.php' id='LogIn'>Loguot</a>";
          }
          else{ // if the user isn't log in
              echo "<td><a href='signup.php' id='Singup' >Sing up </a></td>";
              echo "<td><a href='login.php' id='LogIn' >Log In</a></td>";
          }
           ?>
          <!--Admin Section-->
          <?php if (isset($_SESSION['userid']) && $_SESSION['user_type'] === 'admin' ) {
                echo "<style>
                topnav #About ,#Blogs ,#LogIn ,#Singup ,#myBtn { margin-left:15px;
                  position : relative !important;
                    }
                </style>";
                 echo "<a href='admin/posts/View-Posts.php' id='Singup'>ADMIN</a>";}?>
          <!-- The search button -->
          <!-- Trigger/Open The Modal -->
          <input type="image" id="myBtn" alt="Login"  src="static/image/Search.png" >
          <!-- The Modal -->
          <div id="myModal" class="modal">
          <!-- Modal content -->
            <div class="modal-content" >
              <span class="close">&times;</span>
              <center>
                <form method="post" action="search.php"   name="myForm" onsubmit="return validateForm()">
                  <label>Search : </label>
                  <br>
                    <input type="text" name="Search" id="search-input">
                  <input type="submit" name="searchbutton" value="submit" style="display:none">
                </form>
            </center>
            </div>
         </div>
      </nav>
      <script src="static/js/JsFunctions.js"></script>
