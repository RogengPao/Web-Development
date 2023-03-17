<?php
include ("../Routing/route.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="favicon_io\favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="post">
        <div class="login">
            <div class="container">
                <div style="height: auto;">
                    <div class="icon">
                        <img class="logo" src="https://cdn-icons-png.flaticon.com/512/4441/4441629.png" alt="">
                        <div class="signin">
                            Sign In with Email
                        </div>
                    </div>
                </div>
                <div class="signin_column">
                    <div class="signin_form">
                        <div class="signin_container">
                            <div class="form_table">
                                <div class="username">
                                    <div class="form_cell">
                                        <input class="username_form" type="text" name="username" id="username" placeholder="Email">
                                    </div>
                                </div>
                                <div class="password">
                                    <div class="form_cell">
                                        <input class="username_form" type="password" name="password" id="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="register">
                    <span>Do not have an account?</span>
                    <a href="register.php">Create your account now.</a>
                </div>
                <div class="button_container">
                    <div>
                        <input class="button_style" type="submit" name="Signin">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>