<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       $usernameErr = "";
       $passwordErr ="";
       $error = "";
       $iconWrong="";
       $iconWrongLogin="";
       if(empty($_POST["username"])){
           $usernameErr="Username cannot be empty!";           
           $iconWrongLogin="&#xf00d ";
       }else{
        $usernameErr="";   
        $iconWrong="";   
        $myusername = $_POST["username"];           
       }

       if(empty($_POST["password"])){
           $passwordErr="Password cannot be empty!";
           $iconWrongLogin="&#xf00d ";
       }else{
           $passwordErr ="";
           $iconWrong="";
           $mypassword = $_POST["password"];           
       }

       
      $sql = "SELECT user_id, username, password FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);      
      $count = mysqli_num_rows($result);
      
       $row = mysqli_fetch_array($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
    
       
      if($count == 1 && ($row[1]==$myusername && $row[2]==$mypassword)) {     
          $_SESSION["user_login"]=$myusername;
         header("location: dashboard.php");
      }else {
          $iconWrong="&#xf00d ";
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  
  <title>Login Page</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
   
<body class="login-img3-body">

  <div class="container">

    <form class="login-form" method="post" >
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
         <span class="fa"><?php if (!empty($error)){ echo $iconWrong. $error."</br></br>" ;}  ?></span>        
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Username" autofocus name="username">
          <span class="fa"><?php echo $iconWrongLogin. $usernameErr ?></span>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="fa"><?php echo $iconWrongLogin.  $passwordErr ?></span>
        </div>
        
         <!--<label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>-->
        <span><?php if(!empty($invalidSession)){$invalidSession;} ?></span>    
        <input class="btn btn-primary btn-lg btn-block" value="Login" type="submit"/>
        <!--<input class="btn btn-info btn-lg btn-block" type="submit"/>Signup-->
      </div>
    </form>
    <div class="text-right">
    </div>
  </div>

</body>
</html>