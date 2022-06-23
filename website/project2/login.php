<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="bg-img">   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Login</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <div class="field space">
      <span class="fa fa-user"></span>
      <input type="email" name="email" placeholder="Enter your email" class="box" required>
      </div>
      <div class="field space">
      <span class="fa fa-lock"></span>
      <input type="password" name="password" placeholder="Enter your password" class="box" required>
      </div>
      <input type="submit" name="submit" value="Login" class="btn">
      <p>New to this site? <a href="register.php">Sign up now</a></p>
   </form>

</div>

</body>
</html>