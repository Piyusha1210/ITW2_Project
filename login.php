<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Login Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="home_style.css">
    <link rel="icon" href="Resources/index/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    
    <style>
       body {
          padding-bottom: 40px;
          margin:0px;
          background-color: #f8f9fa;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
         
         }
         
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         button
         {
            size: 300px;
         }
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            
            border-radius: 10px;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
         
            border-radius: 10px;
         }
         #but
         {
            size: 100px;
         }
         .flex-container {
            display: flex;
            flex-flow: row wrap;
            justify-content: flex-start;
        }

        .flex-child {
            /*background-color:#f8f9fa;*/
            padding-left: 30px;
            width: 400px;
            border-radius: 20px;
            border: 2px solid white;
           background-color: white;
           margin-left:450px;
           margin-top:40px;
           box-shadow: 0px 2px 6px 1px rgb(148, 147, 147);
        }
      </style>
      </head>
      <body >
      <section class="header">
         <nav>
            <a href="index.html"><img src="Resources/index/logo.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                  <i class="fa fa-times" onclick="hideMenu()"></i>
                  <ul>
                     <li><a href="index.html">HOME</a></li>
                     <li><a href="about.html">ABOUT</a></li>
                     <li><a href="academics.html">ACADEMICS</a></li>
                     <li><a href="clubs.html">CLUBS</a></li>
                     <li><a href="course.html">COURSES</a></li>
                     <li><a href="contact.html">CONTACT</a></li>
                     <li><a href="login.php">LOGIN</a></li>
                  </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
         </nav>
         <div class="text-box">
            <h1>Login</h1>
            <p>Indian Institute of Information technology, Nagpur</p>
            <a href="" class="hero-btn">Visit us to know more</a>
         </div>
      </section>
      

      <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0px";
         }
        function hideMenu() {
            navLinks.style.right = "-200px";
         }
    </script>
     <div class="flex-container">    
   <div class="flex-child">         
   <h2 style="margin-top: 40px;margin-left:110px;">
                                Login </h2>
      <div class = "container form-signin">   
         <?php
            $msg = '';       
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
               if ($_POST['username'] == 'College' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'College';
                //  echo '<b style="color:green;font-size:larger">You have entered valid user name and password</b>';
      
               echo '<script type="text/javascript"> 
                alert("Your account has been created successfully... Redirecting to Our Home Page.");
                window.location = "index.html";</script>';
               }else {
                  $msg = '<b style="color:red;font-size:larger">Wrong username or password</b>';
               }
            }
         ?>
        </div> <!-- /container -->
      
        <div class = "container"> 
           <form  role = "form" 
              action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
              ?>" method = "post">
              <h4 ><?php echo $msg; ?></h4><br>
              <h6>Enter Username</h6>
              <input type = "text" class = "form-control"  style="border-radius:10px;width:310px;"
                 name = "username" placeholder = "username" 
                 required autofocus><br>
                 <h6 >Enter password</h6>
              <input type = "password" class = "form-control" style="width:310px;"
                 name = "password" placeholder = "password" required>
               <br>
               <p>By signing you accept our Terms of Use</p>
          </div>
         <div style="margin-left:15px;">  <button type="submit"  class = "btn btn-lg btn-primary"  style=" font-size: medium; border-radius: 8px;height:30px;width: 310px;text-align:center;color:white;background-color:blue;padding-bottom:30px;" 
            name="login" ><a href="form.html" style="text-decoration:none;color:white;">Login</a></button>
         </div>  
       </form><br>
         <h6 style="margin-left:15px;"> Don't have an account?<a href="signup.html" style="text-decoration:none;">Sign up here</a>
         </h6>
  </div>
         </div>
 </body>
  </html>