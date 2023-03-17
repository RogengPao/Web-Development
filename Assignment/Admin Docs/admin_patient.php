<?php
include ("../Routing/route.php");
?>

<?php
if(isset($_POST['edit'])){
    global $connection;
    $cust_id = $_POST['edit'];
    $query= "SELECT * FROM `customer personal information` WHERE `Cust_ID` = '$cust_id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
?>

<div class="modal" style="display:block;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalLabel">Details</h5>
      </div>
      <div class="modal-body">
      <form action="#" method="post">
            <div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Patient Detail</li>
                </ul>
                <div class="card-center">
                    <div class="row mb-3" >
                        <div class="form-group col-sm-6" style="padding-right:25px" >
                            <label for="first_name" class="form-label mb-0">First Name</label>
                            <input class="firstname" type="text" name="firstname" id="firstname" placeholder="First name" value="<?php echo $row['First_Name']?>">
                        </div>
                        <div class="form-group col-sm-6" style="padding-left:25px">
                            <label for="first_name" class="form-label mb-0">Last Name</label>
                            <input class="firstname" type="text" name="lastname" id="lastname" placeholder="Last name" value="<?php echo $row['Last_Name']?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label mb-0">Date of Birth</label>
                        <input type="date" class="form-control address_style" name="date_of_birth" placeholder="dateofbirth" value="<?php echo $row['Date_of_Birth']?>">
                    </div>
                    <div style="margin-bottom: 40px">
                        <label for="email" class="form-label mb-0">Email</label>
                        <input type="email" class="form-control address_style" name="email" placeholder="name@example.com" value="<?php echo $row['Email']?>">
                    </div>
                </div>
                <div class="card-center">
                    <div class="mb-3">
                        <label for="inputAddress" class="form-label mb-0">Address</label>
                        <input type="text" class="form-control address_style" name="address" placeholder="Street/ Building Name" value="<?php echo $row['Address']?>">
                    </div>
                    <div class="mb-3 row">
                        <div class="form-group col-sm-6" style="padding-right:25px">
                            <label for="inputAddress2" class="form-label mb-0">Address 2</label>
                            <input type="text" class="form-control address_style" name="address2" placeholder="Unit/ Floor" value="<?php echo $row['Address 2']?>">
                        </div>
                        <div class="form-group col-sm-6" style="padding-left:25px">
                            <label for="inputCity" class="form-label mb-0">City</label>
                            <input type="text" class="form-control address_style" name="city" value="<?php echo $row['City']?>">
                        </div> 
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-sm-6" style="padding-right:25px">
                            <label for="inputState" class="form-label mb-0">State</label>
                            <select name="state" class="form-select address_style" aria-label="Default select example" >
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
                            <input type="text" class="form-control address_style" name="postal_code" value="<?php echo $row['Postal_Code']?>">
                        </div>  
                    </div> 
                    <div class="form-label" style="margin-bottom: 40px;">
                        <label for="floatingInput">Phone number</label>
                        <input type="tel" class="form-control address_style" name="phone_number" placeholder="Phone number" value="<?php echo $row['Phone_Number']?>">
                    </div>
                </div>
                <div class="button_container mt-3 mb-4">
                    <button class="btn btn-dark" type="submit" name="update2" value="<?php echo $row['Cust_ID']; ?>">
                    Update
                    </button>
                </div>
            </div> 
        </form>
      </div>
    </div>
  </div>
</div>    
    
<?php
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareHealing's Admin</title>
    <link rel="shortcut icon" href="favicon_io\favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
	$(document).ready(function(){
		load_data();
		function load_data(query)
		{
			$.ajax({
			url:"patient-live-search.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
			});
		}
        
		$('#search').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
		});
	});
	</script>
    
</head>
<body>
    <div class="title">
        <div class="topbar">
            <h2 class="topbar_title">Medical Appointment Management System</h2>
        </div>
    </div>

    <div class="row">
        <div class="side-bar-appointment col-lg-2 position-fixed">
            <div class="d-flex flex-column p-3 text-bg-dark content " style="width: 280px;">
                <div class="fixed">
                    <div class="align-items-center mb-3 mb-md-0 text-white text-decoration-none header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital me-2 mb-1" viewBox="0 0 16 16">
                            <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                            <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                        </svg>
                        <span class="fs-4">Admin</span>
                    </div>
                    <hr>
                    <div>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li>
                                <a href="admin_appointment.php" class="nav-link text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-event me-2 mb-1" viewBox="0 0 16 16">
                                    <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                                </svg>
                                Appointment
                                </a>
                            </li>
                            <li>
                                <a href="admin_patient.php" class="nav-link text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle me-2 mb-1" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                Patient
                                </a>
                            </li>
                            <li>
                                <a href="admin_profile.php" class="nav-link text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace mb-1 me-2" viewBox="0 0 16 16">
                                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                        <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                                    </svg>
                                Profile
                                </a>
                            </li>
                            <li style="position:fixed;bottom: 10px;">
                                <a href="admin_login.php" class="nav-link text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right me-2 mb-1" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <form class="col-lg-10 form-patient" action="#" method="post">
            <div style=" height:100%;" >
                <div style="width: 100%;">
                    <div class="content">
                        <br>
                        <h1 class="mb-4">Patient</h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="m-0 font-weight-bold text-primary">Patient List</h6>
                                    </div>
                                </div>
                            </div>
                                <div class="card-body">
                                    <input type="text" name="search" id="search" placeholder="Search" class="form-control" aria-describedby="basic-addon1"> 
                                </div>     
                            <div id="result"></div>
                        </div>
                    </div>   
                </div>
            </div>
        </form>
    </div>
</body>

<style>
    body {
        overflow-x: hidden;
    }

    .form-control {
        width: 100%;
        display: inline-block;
    }
    .title {
        position: fixed;
        width: 100%;
        z-index: 2;
    }

    .row {
        padding-top: 3.5%;
    }
    .side-bar-rogeng, .content {
        height: 100vh;
    }

    .form-patient {
        width: 75%;
        margin-top: 40px;
        margin-left: 320px;
    }
</style>
</html>