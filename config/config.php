<?php  
	ob_start(); //this turns on output buffering, saves the php data and pass all to the browser  
	session_start();

	$timezone = date_default_timezone_set('Asia/Manila');
	//displays the date
	//echo "<span style='color:red;font-weight:bold;'>Date: </span>". date('F j, Y g:i:a  ');

	$con = mysqli_connect("u0zbt18wwjva9e0v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","eagaqxzjg9nqqnvh","i7our5sdo5lolpas","gwcr7b9wm064cms1");

	/*return an error*/
	if(mysqli_connect_errno()){
		echo "failed to connect: " . mysqli_connect_errno();
	}
?>