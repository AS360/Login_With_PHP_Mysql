onclick = getElementById("myButton1").reset();

function validateForm() {
  var name = document.getElementById("name").value;
  if (name === "" || name === null) {
    alert("Enter Your Name");
    document.getElementById("name").focus();
    return false;
  }

  var num_val = document.getElementById("i_nb").value;
  if (num_val.toString().length != 10) {
    alert("Not a valid Phone Number. Please enter 10 digit number");
    document.getElementById("i_nb").focus();
    return false;
  }

  var textarea = document.getElementById("t_area").value;
  if (textarea.toString().length <= 10 || textarea.toString().length >= 20) {
    alert("Write between 10 to 20 character");
    document.getElementById("t_area").focus();
    return false;
  }

  var x = document.getElementById("f_name").value;
  var cunt = document.getElementById("f_name").count;
  var sizeEle = document.getElementById("f_name").size; // byte
  var ext = x.substring(x.lastIndexOf(".") + 1);

  // alert(cunt);
  // return false;

  if (x === "" || x === null) {
    alert("Choose a PDF file");
    document.getElementById("f_name").focus();
    return false;
  }

  if (ext != "pdf") {
    alert("Upload PDF file only");
    document.getElementById("f_name").focus();
    return false;
  }

  if (sizeEle > 2048) {
    alert("Upload file bigger than 2 KB");
    document.getElementById("f_name").focus();
    return false;
  }

  var getSelectedValue = document.querySelector(
    'input[name="fav_language"]:checked'
  );
  if (getSelectedValue === null) {
    alert("Select your favourite language");
    document.getElementById("hello").focus();
    return false;
  }

  var fru = document.getElementById("fruits").value;
  if (fru == "") {
    alert("Please select an option!");
    document.getElementById("fruits").focus();
    return false;
  }

  var checkbox = document.getElementById("checkbox").checked;
  if (checkbox == false) {
    alert("You must agree to the terms and condition.");
    document.getElementById("checkbox").focus();
    return false;
  }
}
