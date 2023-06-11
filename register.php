<?php
if(isset($_GET['retcode'])) {

    if($_GET['retcode'] === "fn") {
        echo '<h5>';
        echo 'Please Enter Your First Name';
        echo '</h5>';
    }
    if($_GET['retcode'] === 'ln') {
        echo '<h5>';
        echo 'Please Enter Your Last Name';
        echo '</h5>';
     }
     if($_GET['retcode'] === 'em') {
        echo '<h5>';
        echo 'Please Enter Your Email Address';
        echo '</h5>';
     }
     if($_GET['retcode'] === 'ph') {
        echo '<h5>';
        echo 'Please Enter Your Phone Number';
        echo '</h5>';
     }
     if($_GET['retcode'] === 'pw') {
        echo '<h5>';
        echo 'Please Enter Your Password';
        echo '</h5>';
     }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <!-- <script>
        $().ready(function () {
            $("#signupForm").validate({
                rules: {
                    fname: "required",
                    lname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        minlength: 10
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },

                },
                // in 'messages' user have to specify message as per rules
                messages: {
                    fname: " Please enter your firstname",
                    lname: " Please enter your lastname",
                    email: {
                        required: " Please enter a email",
                    },
                    phone: {
                        required: " Please enter a phone",
                    },
                    password: {
                        required: " Please enter a password",
                        minlength: " Your password must be consist of at least 6 characters"
                    },
                }
            });
        });

    </script> -->
    <style>
        .bttn {
            font-size: 20px;
            width: 100%;
        }
        .btm_link {
            display: flex;
            justify-content: center;
        }
        .fgt_psw {
            display: flex;
            justify-content: flex-end;
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
        <h2>Register Form</h2>
        <form action="action.php" id="signupForm" autocomplete="off" name="registration" enctype="multipart/form-data" method="POST">
            <div class="mb-3 mt-3">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
            </div>
            <div class="mb-3">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
            </div>
            <div class="mb-3">
                <label for="phone">Phone</label>
                <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="bttn btn btn-primary px-3">Register</button>
            <div class="btm_link">
                <p class="pt-2">Already have an account?<a href="./index.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
