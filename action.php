<?php

// Database connection!
include 'dbconn.php';

function checkInputData($data, $flag){
  if ($data == "" || $data === null)
  {
    header("Location: register.php?retcode=".$flag);
    exit();
  }
}

if(isset($_POST)) {
   
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

checkInputData($firstname, "fn");
checkInputData($lastname, "ln");
checkInputData($email, "em");
checkInputData($phone, "ph");
checkInputData($password, "pw");

// Database Insert Quary
$sql = "INSERT INTO user (fname,lname,email,phone,password)
VALUES ('$firstname','$lastname','$email','$phone','$password')";


if (mysqli_query($dbconn, $sql)) { 
  echo 'Register Successfully';
  header("Location: index.php");
 }
 else {
  echo 'Not Register Successfully';
  header("Location: register.php");
 }
}
?>
