<?php
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'server.php';
 $name=$_POST['name'];
 $password=$_POST['password'];
 $sql="SELECT * FROM kishore63k WHERE name='$name' AND
password='$password'";
 $result=mysqli_query($con,$sql);
if($result) {
 $num=mysqli_num_rows($result);
if($num>0) {
 $login=1;
session_start();
 $_SESSION['name']=$name;
header('location:index.php');
 }
else {
 $invalid=1;
 }
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="logo.png" type="image/icon type">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(to right, #74ebd5, #9face6);
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      border: #555555;
    }

    .signin-container {
      background-color: transparent;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 30px rgba(255, 0, 0, 0.2);
      width: 400px;
      text-align: center;
      border-color:firebrick;
   
      
    }

    .signin-container h2 {
      color: #ffffff;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 10px;
      color: #ffffff;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group button {
      width: 100%;
      padding: 12px;
      box-sizing: border-box;
      border: none;
      background-color: #6c5ce7;
      color: #ffffff;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .form-group button:hover {
      background-color: #4834d4;
    }

    .footer-text {
      margin-top: 20px;
      color: #ffffff;
    }

    .signup-link {
      color: #ff5151;
      text-decoration: none;
      font-weight: bold;
    }

    .signup-link:hover {
      text-decoration: underline;
    }
    #background-video {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: -1;
    }
    label{
      color: #ffffff;
    }
    p{
      color: #ffffff;
    }
    .text{
      color:darkgreen;

    }
    .alert{
      color:darkred;
    }
  </style>
  <title>Sign In-Page</title>
</head>
<body>
  <video id="background-video" autoplay muted loop>
    <source src="bg 567.mp4" type="video/mp4">
  </video>
  
<div class="signin-container">
<?php
if ($login) {
    echo '
        <div class="text">
            <strong>Congratulations:</strong> You are successfully login.
        </div>';
}

if ($invalid) {
    echo '
        <div class="alert">
            <strong>Warning:</strong> User not exists.
    </div>';
}
?>
  <h2>Sign In</h2>
  <form action="signin.php" method="post" id= "lodinForm" name= "form2" onSubmit="return validateForm()">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <button type="submit">Sign In</button>
    </div>
  </form>
  <p class="footer-text">Don't have an account?<a href="signup.php" class="signup-link">Sign Up</a></p>
</div>

</body>
</html>
