<?php
// echo "<pre>";
// print_r($_POST);
// die();
// print_r($_FILES)

$return_val = array();

$cURL = curl_init('http://localhost/web/index.php');
curl_setopt($cURL, CURLOPT_POSTFIELDS, $return_val);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($cURL);
curl_close($cURL);

// if ($response == "OK") {
//   echo "Y"
// } else {
//   echo "N"
// }


//name validation check
$name=$_POST['name'];
if($name == ""){
  //echo "Error! In data save";
  //array_push($return_val,"name is missing");
  header("Location: http://localhost/web/index.php?retcode=1");

}else {
  echo "NAME IS :";
  print_r($_POST['name']);
}

// print_r($return_val);
// die();
echo "<br>";

//number validation check
$number=$_POST['number'];
if($number == ""){
  //echo "Error! In data save";
  array_push($return_val,"number is missing");
}else {
  echo "NUMBER IS :";
  print_r($_POST['number']);
}
echo "<br>";

//textarea validation check
$area=$_POST['t_area'];
if($area == ""){
  //echo "Error! In data save";
  array_push($return_val,"textarea is missing");
}else {
  echo "DETAILS IS :";
  print_r($_POST['t_area']);
}
echo "<br>";

//file validation check
if(isset($_FILES['filename']) ) {
    if($_FILES['filename'] == "") {
      echo "Error! In data save";
    } else {
      echo "DETAILS IS :";
      print_r($_FILES['filename']);
    }
    
}else {
    echo "Error! In data save";
}
echo "<br>";

//language validation check
if(isset($_POST['fav_language']) ) {
    if($_POST['fav_language'] == "") {
      //echo "Error! In data save";
      array_push($return_val,"fav_language is missing");
    } else {
      echo "FAVOURITE LANGUAGE IS :";
      print_r($_POST['fav_language']);
    }
    
}else {
    //echo "Error! In data save";
    array_push($return_val,"fav_language is missing");
}
echo "<br>";

//Select validation check
$select=$_POST['fruits'];
if($select == ""){
  //echo "Error! In data save";
  array_push($return_val,"fruits is missing");
}else {
  echo "FAVOURITE FRUIT IS :";
  print_r($_POST['fruits']);
}
echo "<br>";

//checkbox validation check
if(isset($_POST['checkbox']) ) {
    if($_POST['checkbox'] == "") {
      //echo "Error! In data save";
      array_push($return_val,"Checkbox is missing");
    } else {
      echo "CHECKBOX IS :";
      print_r($_POST['checkbox']);
    }
    
}else {
    //echo "Error! In data save";
    array_push($return_val,"Checkbox is missing");
}echo "<br>";
print_r($return_val);
?> 