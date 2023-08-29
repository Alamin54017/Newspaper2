<?php
 session_start();
//Database Configuration File
include('../demo.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
     $uname=$_POST['username'];
    $password=$_POST['password'];
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($con,"SELECT AdminUserName,AdminEmailId,AdminPassword FROM tbladmin WHERE (AdminUserName='$uname' || AdminEmailId='$uname')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{
$hashpassword=$num['AdminPassword']; // Hashed password fething from database
//verifying Password
if (password_verify($password, $hashpassword)) {
$_SESSION['login']=$_POST['username'];
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
  } else {
echo "<script>alert('Wrong Password');</script>";
 
  }
}
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Admin Login</title>

    

    <!-- Bootstrap core CSS -->
    <?php include '../link.php'; ?>

    <!-- Favicons -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../CSS/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
      <main class="form-signin shadow" style="background:white">
          <form method="post">
      <img class="mb-4" src="../logo.jpg" alt="" width="110" height="80">
    <h1 class="h3 mb-3 fw-normal">Admin Login</h1>

    <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-warning" type="submit" name="login">Sign in</button>
    
    <p class="mt-5 mb-3 text-muted">&copy;Copyright 2021</p>
  </form>
</main>


    
  </body>
</html>