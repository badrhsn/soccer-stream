<?php 
include_once("../includes/GAcces.php");
session_start();

if (isset($_POST['login']))
{
	if (isset($_POST['name']) && isset($_POST['pswd'])) {
		# code...
 		 if(VerifierLoginPwd($_POST['name'] , $_POST['pswd']) == true  ){	

 		 	$_SESSION['chek'] = $_POST['name'];
 		 	$_SESSION['active'] = time();
	  		header('location: ../html/manage_site.php');
	  
	  		}
	  	else {
		  
		  		header('Location: ../index.php');

		  	}		
  }
}

?>