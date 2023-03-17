<?php
include ("../Routing/route.php");
$return = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "SELECT * FROM `customer personal information`
	WHERE `CUST_ID` LIKE '%$search%' OR `First_Name` LIKE '%$search%' 
	OR `Email` LIKE '%$search%' 
	OR `Phone_Number` LIKE '%$search%' OR `Last_Name`LIKE '%$search%'
	";}
else
{
	$query = "SELECT * FROM `customer personal information`";
}
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0)
{
	$return .='
	<div class="table-responsive">
	<table class="table table bordered">
	<tr>
		<th>Patient ID</th>
		<th>Patient Name</th>
		<th>Address</th>
		<th>City</th>
		<th>State</th>
		<th>Postal Code</th>
		<th>Date of Birth</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone Number</th>
		<th>Action</th>
	</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$cusId =  $row['Cust_ID'];
		$return .= '
		<tr>
		<td>'.$row['Cust_ID'].'</td>
		<td>'.$row['First_Name'].' '.$row['Last_Name'].'</td>
		<td>'.$row['Address'].'  '. $row['Address 2'].'</td>
		<td>'.$row['City'].'</td>
		<td>'.$row['State'].'</td>
		<td>'.$row['Postal_Code'].'</td>
		<td>'.$row['Date_of_Birth'].'</td>
		<td>'.$row['Email'].'</td>
		<td>'.$row['Password'].'</td>
		<td>'.$row['Phone_Number'].'</td>';
		
		$return .= '<td>
			<div style="text-align: center; display:inline-block;">
				<button class="btn btn-dark btn-sm" style="margin-bottom:15px;" type="submit" name="delete" value="';
		$return .= $cusId;
		$return .= '">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
						<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
					</svg>
				</button>
				<button class="btn btn-dark btn-sm" type="submit" name="edit" value="';
		$return .= $row['Cust_ID'];
		$return .= '"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
						<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
					</svg>
				</button>
			</div>
        </td>
		</tr>';
	}
	echo $return;
	}
else
{
	echo 'No results containing all your search terms were found.';
}
?>