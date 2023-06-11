<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    $myusername = mysqli_real_escape_string($dbconn,$_POST['email']);
    $mypassword = mysqli_real_escape_string($dbconn,$_POST['password']);
}

if(isset($_SESSION['myusername'])){
    echo "<h1>welcome ".$_SESSION['myusername']."<h1>";
    echo "<a href='pwdcng.php'>Change Password</a><br/>";
    echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}
else
{
    if($_POST['myusername']==$myusername && $_POST['mypassword']==$mypassword){
        $_SESSION['myusername']=$myusername;
        echo "<script>location.href='home.php'</script>";
    }
    else{
        echo "<script>alert('username or password incorrect')</script>";
        echo "<script>location.href='index.php'</script>";
    }
}
?>