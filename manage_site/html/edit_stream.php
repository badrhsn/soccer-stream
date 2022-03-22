<?php

require_once('../../db/dbconnect.php');
  
$qry="SELECT * FROM coming_up";
$result=mysqli_query($db,$qry);

if(isset($_POST['submit'])){
  	$stream = $_POST['stream'];
  
  		$qry = "UPDATE coming_up SET stream = '$stream' WHERE id_match = '".$_GET['id_match']."'";
  		$response = mysqli_query($db,$qry);
  	
}

if(isset($_GET['id_match']))
  {
    $viv_qry="SELECT stream FROM coming_up WHERE id_match='".$_GET['id_match']."'";
    $viv_res=mysqli_query($db,$viv_qry);
    $viv_row=mysqli_fetch_assoc($viv_res);
  } else echo "erroro occurred";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Stream</title>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/add_match.css">
</head>
<body>

	<section class="container">
        <div class="content col-lg-6 col-md-7 col-sm-10 col-xs-11">
            <form method="POST" action="">
             	
            <textarea name="stream" class="form-control" ><?php echo $viv_row['stream']; ?></textarea>
            
            <div style="margin-top: 10px; display: flex;justify-content: space-between;"> 
            <button name="submit" type="submit" class="btn btn-primary" style="margin-top: 10px;"
            >Send</button>
            <a href="manage_site.php?action=add_stream" class="go_back">Go back</a>
            </div>
            
            </form>
        </div>
  </section>

</body>
</html>