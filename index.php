<?php
if(isset($_GET['retcode'])) {

    if($_GET['retcode'] == 1) {
       echo "<script>";
       echo  "alert('please entre your name')";
       echo "</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 5px;
}

.icon {
  padding: 10px;
  background: royalblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid yellow;
}

/* Set a style for the submit button */
.btn {
  background-color: green;
  color: white;
  padding: 10px 10px;
  cursor: pointer;
  border: none;
  width: 100%;
  opacity: 1;
}

.bttn {
  background-color: yellowgreen;
  color: white;
  padding: 10px 10px;
  cursor: pointer;
  border: none;
  width: 100%;
  opacity: 1;
}

.btn:hover {
  opacity: 1;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;  
  }
}

</style>
</head>
<body>

<div class="w3-animate-top">
  <form name="myForm" action="indexaction.php" style="max-width:500px;margin:auto" enctype="multipart/form-data" onsubmit="return validateForm()" method="POST">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input type="text" class="input-field" placeholder="Enter Name" id="name" name="name">
  </div>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input type="number" class="input-field" placeholder="Enter Number" id="i_nb" name="number">
  </div>
  
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <textarea type="text" class="input-field" placeholder="Write Something..." id="t_area" name="t_area"></textarea>
  </div>

  <div class="input-container">
    <i class="fa fa-file icon"></i>
    <input type="file" class="input-field" placeholder="Enter Name" id="f_name" name="filename" multiple>
  </div>

  <div class="input-container" id="hello">
    <i class="fa fa-code icon"></i>&nbsp; &nbsp;
      <label for="html">HTML<input type="radio" id="html" name="fav_language" value="HTML"></label>
      <label for="css">CSS<input type="radio" id="css" name="fav_language" value="CSS"></label>
      <label for="javascript">JS<input type="radio" id="javascript" name="fav_language" value="JavaScript">
      </label>
  </div>

  <div class="input-container">
    <i class="fa fa-star-o icon"></i>
    <select class="input-field" id="fruits" name="fruits">
      <option value="">Select</option>
      <option value="apple" name="apple">Apple</option>
      <option value="mango" name="mango">Mango</option>
      <option value="orange" name="orange">Orange</option>
    </select>
  </div>

  <input type="checkbox" id="checkbox" name="checkbox" value="check" />You argeed to <a href="">Terms and Condition</a>
  <br><br>
  <button type="submit" class="btn" id="myButton">SUBMIT</button><br><br>
  <button type="reset" class="bttn" id="myButton1">RESET</button>
  </form>
</div>

<script type="text/javascript">
   onclick="getElementById("myButton1").reset()";   
</script>
<scripr src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></scripr>
<script type="text/javascript">
  function validateForm() {

    var name = document.getElementById('name').value;
    if(name === "" || name === null){
       alert("Enter Your Name");
       document.getElementById('name').focus();
        return false;
    }

    var num_val = document.getElementById('i_nb').value;
    if(num_val.toString().length != 10){
       alert("Not a valid Phone Number. Please enter 10 digit number");
       document.getElementById('i_nb').focus();
        return false;
    }

    var textarea = document.getElementById('t_area').value;
    if(textarea.toString().length <= 10 || textarea.toString().length >= 20){
       alert("Write between 10 to 20 character");
       document.getElementById('t_area').focus();
        return false;
    }  


  var x = document.getElementById('f_name').value;
  var cunt = document.getElementById('f_name').count
  var sizeEle = document.getElementById('f_name').size; // byte
  var ext = x.substring(x.lastIndexOf('.') + 1);

// alert(cunt);
// return false;

  if (x === "" || x === null) {
    alert("Choose a PDF file");
    document.getElementById('f_name').focus();
    return false;
  }

  if(ext != "pdf"){
    alert("Upload PDF file only");
    document.getElementById('f_name').focus();
    return false;
  }

  if(sizeEle > 2048 ){
    alert("Upload file bigger than 2 KB");
    document.getElementById('f_name').focus();
    return false;
  }

  var getSelectedValue = document.querySelector('input[name="fav_language"]:checked');
    if(getSelectedValue === null){
      alert("Select your favourite language");
      document.getElementById('hello').focus();
      return false;
    }

  var fru = document.getElementById("fruits").value;
        if (fru == "") {
            alert("Please select an option!");
            document.getElementById('fruits').focus();
            return false;
        }

  var checkbox = document.getElementById('checkbox').checked;
    if (checkbox == false) {
      alert("You must agree to the terms and condition.");
      document.getElementById('checkbox').focus();
      return false;
    }
}
</script>

</body>
</html>
