<?php
function mysqlexec($sql){
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="ethan"; // Database name

// Connect to server and select databse.
	$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

	mysqli_select_db($conn,"$db_name")or die("cannot select DB");

	if($result = mysqli_query($conn, $sql)){
		return $result;
	}
	else{
		echo mysqli_error($conn);
	}

$sql = "INSERT 
			INTO
			   volunteer
			   (id, email, age, sex, district, state, country, maritalstatus, education,  firstname, physical_status,languages , blood_group,  youroccupation,experiance, hrs, days, aboutme, profilecreationdate  ) 
				VALUES
				   ('$id','$email', '$age', '$sex', '$district', '$state', '$country', '$maritalstatus',  '$education', '$fname', 
				   '$physicalstatus',  '$languages', '$bloodgroup','$youroccupation', '$experiance', '$hrs', '$days', '$aboutme', CURDATE())";

	if (mysqli_query($conn,$sql)) {
		// echo "Successfully Registered";
	  //echo "<a href=\"create_profile.php\">";
	 // echo "Login to your account";
	  //echo "</a>";
	  echo "<script> window.location=\"create_profile.php?id=$id\"</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>