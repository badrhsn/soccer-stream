<?php
	require("../db/dbconnect.php");	//Require the database connection
	
	//First we have to start the session only if it has not been started
	
		session_start();
	
	
	
	$session_id = session_id();	//We assign the session id to the variable $session_id
	
	$time = time(); 	//We assign the current time to the variable $time
	
	$time_limit = $time-20;	//We give the session only 10 minutes if it exists
	
	/**
	*We need to check the session_id is already stored or not
	*/
	$num = mysqli_num_rows(mysqli_query($db,"SELECT * FROM online_visitors WHERE session_id='$session_id' LIMIT 1"));
	
	//if it doesn't exist, then we'll store it
	//And if does exist, we will update the session's time in the DB
	if($num == 0){
		$sql = "INSERT INTO online_visitors VALUES('$session_id','$time')";
		$query = mysqli_query($db,$sql) or die("Error<br />".mysqli_error());
	}else{
		if (session_id()) {
		
		$sql = "UPDATE online_visitors SET `time`='$time' WHERE session_id='$session_id'";
		$query = mysqli_query($db,$sql) or die("Error<br />".mysqli_error());
	}}
	
	//Now the following code is to get the count of visitors currently online
	$noov = mysqli_num_rows(mysqli_query($db,"SELECT * FROM online_visitors"));  //noov = number of online visitors
	
	echo 'Visitors currently online: ',$noov;
	
	//Now, check if the session was stored for more than 10 minutes and delete it if it is.
	$delete_session = mysqli_query($db,"DELETE FROM online_visitors WHERE time<'$time_limit'");
	
	//close the connection
	mysqli_close();
	?>