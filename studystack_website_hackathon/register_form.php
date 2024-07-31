<?php
require "db_conn.php";

@include 'config.php';

session_start();

if(!isset($_SESSION['user-id'])){
    header('location:' . ROOT_URL .'/login_form.php');
    die();
 }
 if(isset($_SESSION['user'])){
    header('location:' . ROOT_URL .'/login_form.php');
    die();
 }
 

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);
$cpass = md5($_POST['cpassword']);
$user_type = $_POST['user_type'];

$select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

$error[] = 'user already exist!';

}else{

if($pass != $cpass){
$error[] = 'password not matched!';
}else{
$insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
mysqli_query($conn, $insert);
$_SESSION['sign-up-success'] = "Registration Successful. Please log in!";
header('location: ' . ROOT_URL.'/login_form.php');
die();
}
}

};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Registration</title>
    <link rel="icon" href="assets/img/title_logo.png" type="image/x-icon" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">

</head>

<body>

    <div class="form-container">

        <form action="" method="post">
            <h3>Register User</h3>
            <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
            <input class="cred" type="text" name="name" required placeholder="enter first name">
            <input class="cred" type="email" name="email" required placeholder="enter email">
            <input class="cred" type="password" name="password" required placeholder="enter password">
            <input class="cred" type="password" name="cpassword" required placeholder="confirm password">
            <select name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="Create Account" class="form-btn">
            <p>already have an account? <a href="login_form.php">login now</a></p>
        </form>

    </div>

</body>

</html>