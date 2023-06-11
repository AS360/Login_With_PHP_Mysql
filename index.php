<?php
   // Database connection!
   include 'dbconn.php';

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = $_POST['email'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT id FROM user WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($dbconn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: home.php");
      }else {
        echo '<h5>';
        echo 'Invalid Credentials, Please Fill Details Correctly';
        echo '</h5>';
      }
   }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .bttn {
      font-size: 20px;
      width: 100%;
    }
    .btm_link {
      display: flex;
      justify-content: center;
    }
    .page {
      border: 2px solid #6237ff;
      border-radius: 10px;
      width: 50%;
      padding: 10px;
      box-shadow: 5px 5px #b6b9ff;
    }
    h2 {
      text-align: center;
    }
    h5 {
            padding-top: 10px;
            text-align: center;
            color: red;
            animation: animatezoom 0.6s
    }
    @keyframes animatezoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
    }
  </style>
</head>

<body>

  <div class="container page mt-3">
    <h2>Login Form</h2>
    <form action="" autocomplete="off" method="POST">
      <div class="mb-3 mt-3">
        <label for="email">Username</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
      <button type="submit" class="bttn btn btn-primary px-3">Login</button>
      <div class="btm_link">
        <p class="pt-2">Don't have an account?<a href="./register.php">Register</a></p>
      </div>
    </form>
  </div>

</body>

</html>
