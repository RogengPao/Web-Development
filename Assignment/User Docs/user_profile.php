<?php
include '../Routing/route.php';
?>

<?php
$query= "SELECT * FROM `customer personal information` WHERE `Cust_ID` = '$_SESSION[user_id]'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon_io\favicon-16x16.png">
    <script src="https://kit.fontawesome.com/17a5980fd9.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script>
    $('.navbar-toggler').click(() => {
        $('.myInput').attr("disabled", "false");
    })
    </script>
</head>
<body>
    <section id="nav-bar-admin">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="index.php"><img class="nav-company-logo" src="illustration\companylogo.png" alt="company's logo"><b>CareHealing's Dashboard</b></a>
                </div>
            </div>
        </nav>  
    </section>

    <div class="container-fluid2">
        <form action="#" method="post">
            <div class="card">
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item header-personal">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item-1">Personal Information</div> 
                            </div>
                            <div class="col-lg-6 edit-icon">
                                <button type="submit" name="enable-editing" class="btn btn-dark"><i class="edit-icon fa-solid fa-pen-to-square"></i></button>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="card-center">
                    <div class="row mb-3" >
                        <div class="form-group col-sm-6" style="padding-right:25px" >
                            <label for="first_name" class="form-label mb-0">First Name</label>
                            <?php 
                            if (isset($_POST["enable-editing"])) {
                                ?>  <input class="firstname myInput" type="text" name="firstname" id="firstname" placeholder="First name" value="<?php echo $row['First_Name']?>" >
                            <?php } else {
                                ?>  <input class="firstname myInput" type="text" name="firstname" id="firstname" placeholder="First name" value="<?php echo $row['First_Name']?>" disabled>
                            <?php }
                            ?>
                            
                        </div>
                        <div class="form-group col-sm-6" style="padding-left:25px">
                            <label for="first_name" class="form-label mb-0">Last Name</label>
                            <?php 
                                if (isset($_POST["enable-editing"])) {
                                ?>  <input class="firstname myInput" type="text" name="lastname" id="lastname" placeholder="Last name" value="<?php echo $row['Last_Name']?>">
                            <?php } else {
                                ?>  <input class="firstname myInput" type="text" name="lastname" id="lastname" placeholder="Last name" value="<?php echo $row['Last_Name']?>" disabled>
                            <?php }
                            ?>
                            
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label mb-0">Date of Birth</label>
                        <?php 
                            if (isset($_POST["enable-editing"])) {
                                ?>  <input type="date" class="form-control address_style myInput" name="date_of_birth" placeholder="dateofbirth" value="<?php echo $row['Date_of_Birth']?>">
                            <?php } else {
                                ?>  <input type="date" class="form-control address_style myInput" name="date_of_birth" placeholder="dateofbirth" value="<?php echo $row['Date_of_Birth']?>" disabled>
                            <?php }
                        ?> 
                    </div>
                    <div style="margin-bottom: 40px">
                        <label for="email" class="form-label mb-0">Email</label>
                        <?php 
                            if (isset($_POST["enable-editing"])) {
                                ?> <input type="email" class="form-control address_style myInput" name="email" placeholder="name@example.com" value="<?php echo $row['Email']?>">
                            <?php } else {
                                ?> <input type="email" class="form-control address_style myInput" name="email" placeholder="name@example.com" value="<?php echo $row['Email']?>" disabled>
                            <?php }
                        ?> 
                    </div>
                </div>
                <div class="card-center">
                    <div class="mb-3">
                        <label for="inputAddress" class="form-label mb-0">Address</label>
                        <?php 
                            if (isset($_POST["enable-editing"])) {
                                ?> <input type="text" class="form-control address_style myInput" name="address" placeholder="Street/ Building Name" value="<?php echo $row['Address']?>">
                            <?php } else {
                                ?> <input type="text" class="form-control address_style myInput" name="address" placeholder="Street/ Building Name" value="<?php echo $row['Address']?>" disabled>
                            <?php }
                        ?> 
                    </div>
                    <div class="mb-3 row">
                        <div class="form-group col-sm-6" style="padding-right:25px">
                            <label for="inputAddress2" class="form-label mb-0">Address 2</label>
                            <?php 
                            if (isset($_POST["enable-editing"])) {
                                ?> <input type="text" class="form-control address_style myInput" name="address2" placeholder="Unit/ Floor" value="<?php echo $row['Address 2']?>">
                            <?php } else {
                                ?> <input type="text" class="form-control address_style myInput" name="address2" placeholder="Unit/ Floor" value="<?php echo $row['Address 2']?>" disabled>
                            <?php }
                            ?> 
                           
                        </div>
                        <div class="form-group col-sm-6" style="padding-left:25px">
                            <label for="inputCity" class="form-label mb-0">City</label>
                            <?php 
                            if (isset($_POST["enable-editing"])) {
                                ?> <input type="text" class="form-control address_style myInput" name="city" value="<?php echo $row['City']?>">
                            <?php } else {
                                ?> <input type="text" class="form-control address_style myInput" name="city" value="<?php echo $row['City']?>" disabled>
                            <?php }
                            ?> 
                        </div> 
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-sm-6" style="padding-right:25px">
                            <label for="inputState" class="form-label mb-0">State</label>
                            <?php 
                            if (isset($_POST["enable-editing"])) {
                                ?> <select name="state" class="form-select address_style myInput" aria-label="Default select example">
                            <?php } else {
                                ?> <select name="state" class="form-select address_style myInput" aria-label="Default select example" disabled>
                            <?php }
                            ?> 
                                <option value="<?php echo $row['State']?>" selected='selected'><?php echo $row['State']?></option>
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
                        <div class="form-group col-sm-6" style="padding-left:25px">
                            <label for="inputZip" class="form-label mb-0">Postal Code</label>
                            <?php 
                            if (isset($_POST["enable-editing"])) {
                                ?> <input type="text" class="form-control address_style myInput" name="postal_code" value="<?php echo $row['Postal_Code']?>">
                            <?php } else {
                                ?> <input type="text" class="form-control address_style myInput" name="postal_code" value="<?php echo $row['Postal_Code']?>" disabled>
                            <?php }
                            ?>           
                        </div>  
                    </div> 
                    <div class="form-label" style="margin-bottom: 40px;">
                        <label for="floatingInput">Phone number</label>
                        <?php 
                        if (isset($_POST["enable-editing"])) {
                            ?> <input type='tel' class='form-control address_style myInput' name='phone_number' placeholder='Phone number' value='<?php echo $row['Phone_Number']?>'>
                        <?php } else {
                            ?> <input type='tel' class='form-control address_style myInput' name='phone_number' placeholder='Phone number' value='<?php echo $row['Phone_Number']?>' disabled>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="button_container mt-3 mb-4">
                    <?php 
                    if (isset($_POST["enable-editing"])) {
                        echo "<input class='button_style_2 myInput' type='submit' name='update' value='Update'>";
                    } else {
                        echo "<input class='button_style_2 myInput' type='submit' name='update' value='Update' disabled>";
                    }
                    ?>
                </div>
            </div> 
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>





<style>
    body {
        background-color: whitesmoke;
    }

    .card {
        margin: 0;
    }

    .header-personal {
        padding: 15px 30px;
    }

    .container-fluid2 {
        padding: 5% 23%;
        border-radius: 15px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);
    }

    #nav-bar-admin {
        z-index: 2;
        position: fixed;
        width: 100%;
        border-bottom: 3px solid black;
    }

    .navbar {
        padding: 0.25% 2.5%
    }

    .navbar-brand {
        color: #375bb1;
        font-size: 1.3rem;
    }

    .nav-company-logo {
    height: 55px;
    width: auto;
    }
    
    .edit-icon {
        text-align: right;
        color: white;
    }
</style>

