<?php
$registered=0;
$alreadyexists=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'server.php';
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="SELECT * FROM kishore63k WHERE name = '$name'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            $alreadyexists=1;
        }
        else
        {
            $sql="INSERT INTO kishore63k (name,password) VALUES('$name','$password')";
            $result=mysqli_query($con,$sql);
            if($result)
            {
                $registered=1;
            }else
            {
                die(mysqli_error($con));
            }
        }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="logo.png" type="image/icon type">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   <style>
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(to right, #74ebd5, #9face6);
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .signin-container {
      background-color:transparent;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(255, 0, 0, 0.2);
      width: 400px;
      text-align: center;
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
      color: #dad6d6;
    }

    .signup-link {
      color: #6c5ce7;
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
    .text{
      color:crimson;
      text: size adjust 2px;;
    }
    .succ{
      color: green;
    }
  </style>
  <title>Sign Up-Page</title>
</head>
<body>
  <video id="background-video" autoplay muted loop>
    <source src="bg 567.mp4" type="video/mp4">
  </video>
<div class="signin-container">
<?php
if ($alreadyexists) {
    echo '
        <div class="text">
            <strong>Warning:</strong> User already exists.
        </div>';
}
if ($registered) {
    echo '
        <div class="succ">
            <strong>Congratulations:<strong> You are successfully registered.
        </div>';
}
?>
  <h2>Sign Up</h2>
  <form action="signup.php" method="post" id="Form2" name="form2" onsubmit="return validationForm()">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <button type="submit">Sign Up</button>
    </div>
  </form>
  <p class="footer-text">You have already account?<a href="signin.php" class="signup-link">Sign In</a></p>
</div>
</body>
</html>
