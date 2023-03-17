<?php
include ('../Routing/route.php');
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
        <div class="register_page ">
            <div class="register_container">
                <div style="padding-top :30px;">
                    <h1 style="font-weight: bold">Create Your Account</h1>
                    <div>You already have an Account?
                        <a href="login.php">Sign in now.</a>
                    </div>
                </div>
                <div class="account_info">
                    <div class="container_center">
                        <div class="form_table">
                            <div class="form_cell">
                                <div class="fname">
                                    <input class="firstname" type="text" name="firstname" id="firstname" placeholder="First name" required>
                                </div>
                                <div class="lname">
                                    <input class="firstname" type="text" name="lastname" id="lastname" placeholder="Last name" required>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 1em; text-align: left;">
                            <div>
                                <div class="mb-3">
                                    <label for="inputAddress" class="form-label mb-0">Address</label>
                                    <input type="text" class="form-control address_style" name="address" placeholder="Street/ Building Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputAddress2" class="form-label mb-0">Address 2</label>
                                    <input type="text" class="form-control address_style" name="address2" placeholder="Unit/ Floor" required>
                                </div>
                                <div class="mb-3 w-100">
                                    <label for="inputCity" class="form-label mb-0">City</label>
                                    <input type="text" class="form-control address_style" name="city" required>
                                </div>
                                <div class="mb-3 row">
                                    <div class="form-group col-sm-8">
                                        <label for="inputState" class="form-label mb-0">State</label>
                                        <select name="state" class="form-select address_style" aria-label="Default select example" required>
                                            <option disabled selected>Select a State</option>
                                            <option value="Johor">Johor</option>
                                            <option value="Kedah">Kedah</option>
                                            <option value="Kelantan">Kelantan</option>
                                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                                            <option value="Labuan">Labuan</option>
                                            <option value="Melaka">Melaka</option>
                                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                                            <option value="Pahang">Pahang</option>
                                            <option value="Penang">Penang</option>
                                            <option value="Perak">Perak</option>
                                            <option value="Perlis">Perlis</option>
                                            <option value="Putrajaya">Putrajaya</option>
                                            <option value="Sabah">Sabah</option>
                                            <option value="Sarawak">Sarawak</option>
                                            <option value="Selangor">Selangor</option>
                                            <option value="Terengganu">Terengganu</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                
                                        <label for="inputZip" class="form-label mb-0">Postal Code</label>
                                        <input type="text" class="form-control address_style" name="postal_code" required>
                            
                                    </div>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="date" class="form-control" name="date_of_birth" placeholder="dateofbirth" required>
                                    <label for="floatingInput">Date of Birth</label>
                                </div>                           
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="register_container pt-0">
                <div class="account_info pt-0">
                    <div class="container_center pt-3">
                        <div class="form-floating mt-3">
                            <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                            <label for="floatingInput">name@example.com</label>
                        </div>
                        <div class="mb-3 message">This will be your username</div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="confrim_password" placeholder="confirmpassword" required>
                            <label for="floatingPassword">Confirm Password</label>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="register_container pt-0">
                <div class="account_info">
                    <div class="container_center">
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" name="phone_number" placeholder="Phone number" required>
                        <label for="floatingInput">Phone number</label>
                    </div>
                    </div>
                </div>
            </div>
            <div class="button_container mt-3">
                <div>
                    <input class="button_style_2" type="submit" name="Register" required>
                </div>
            </div>
        </div>
    </form>
</body>
</html>