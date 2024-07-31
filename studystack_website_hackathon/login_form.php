<?php

@include 'config.php';
require "db_conn.php";

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){
         $_SESSION['user-id'] = $row['id'];
         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin'] = $row['user_type'];
         header('location:'.ROOT_URL.'/admin/index.php');
         die();

      }elseif($row['user_type'] == 'user'){
         $_SESSION['user-id'] = $row['id'];
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user'] = $row['user_type'];
         header('location:'.ROOT_URL.'/admin/user.php');
         die();

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff login | StudyStack</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="icon" href="assets/img/title_logo.png" type="image/x-icon" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">

</head>

<body>

    <div class="form-container">

        <form action="" method="post">
            <h3>login</h3>
            <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
            <input class="cred" type="email" name="email" required placeholder="enter your email">
            <input class="cred" type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>facing trouble? <a href="https://arsenic-project.pages.dev/#contact-us">Contact us!</a></p>
        </form>

    </div>

</body>

</html>