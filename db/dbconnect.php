<?php

DEFINE ('DB_USER', 'badr');
DEFINE ('DB_PASSWORD', 'staythe1AZ');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'website');

$db = @mysqli_connect( DB_HOST ,DB_USER, DB_PASSWORD, DB_NAME)
OR die('could not connect to the sql ' . mysqli_connect_error());

 ?>
