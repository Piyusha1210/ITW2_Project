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
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            color:purple;
            margin:0px;
            background-color:#ecd0cf;
            background-image: url("login.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
         
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         #in
         {
            border-color: deeppink;
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
            border-color:deeppink;
            border-radius: 10px;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:deeppink;
            border-radius: 10px;
         }
         #but
         {
            size: 100px;
         }
         h1{
            text-align: center;
            color:purple;
         }
      </style>
      </head>
      <body>
                
      <h1>Enter Username and Password</h1> 
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
                  
                  echo '<b style="color:green;font-size:larger">You have entered valid user name and password</b>';
               }else {
                  $msg = '<b style="color:red;font-size:larger">Wrong username or password</b>';
               }
            }
         ?>
        </div> <!-- /container -->
      
        <div class = "container">
        
           <form class = "form-signin" role = "form" 
              action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
              ?>" method = "post">
              <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
              <input type = "text" class = "form-control" id="in" style="border-radius:10px;border-color:deeppink;"
                 name = "username" placeholder = "username" 
                 required autofocus></br></br>
              <input type = "password" class = "form-control"
                 name = "password" placeholder = "password" required>
               <br>
              <button type="submit" class = "btn btn-lg btn-primary"  style="padding: 8px;font-size: medium; border-radius: 8px;border-color: deeppink;" 
                 name = "login">Login</button>
             <br><br><br>
            
           </form>
           <br><br>
           <div><b style="color: purple;font-size:x-large;"> Click here to clean </b><a href = "logout.php" tite = "Logout" style="text-decoration: none;color:red;font-size: larger;">Session.</a>
           </div>          
           <br><br><br>
        </div> 
        
     </body>
  </html>