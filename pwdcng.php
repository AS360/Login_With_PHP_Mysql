<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script>
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

    </script>
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
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container page mt-3">
        <h2>Register Form</h2>
        <form action="action.php" id="signupForm" name="registration" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
                <label for="old password">Old Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="mb-3">
                <label for="new password">New Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="mb-3">
                <label for="confirm password">Confirm Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="bttn btn btn-primary px-3">Change Password</button>
        </form>
    </div>

</body>

</html>