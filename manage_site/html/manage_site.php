<?php 
session_start();

if (isset($_SESSION['chek'])&& (time() - $_SESSION['active'] < 300 )) {

	$_SESSION['active'] = time(); 

	require_once('../../db/dbconnect.php');
	$query = "SELECT * FROM coming_up";
	$response = @mysqli_query($db, $query);


if(isset($_GET['id_match']))
{

	$qry = "DELETE FROM coming_up
			WHERE id_match = '".$_GET['id_match']."'";

	$response = mysqli_query($db,$qry);

}
if(isset($_GET['id_news']))
{
	$qry = "DELETE FROM statistic
			WHERE cast(id_news as unsigned) = '".$_GET['id_news']."'";

	$response = mysqli_query($db,$qry);
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
			if(isset($_GET['action'])) {
				if($_GET['action'] === 'add_stream') {
						echo "ADD STREAM";
					} elseif($_GET['action'] === 'add_match') {
						echo "ADD MATCH";
					} elseif ($_GET['action'] === 'add_stats') {
						echo "ADD STATISTICS";
					} elseif ($_GET['action'] === 'contacted_us') {
						echo "CONTACTED US";
					} else {
						echo "ADD MATCH";
					}
				} else echo "ADD MATCH";
		?>
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/manage_site.css">
</head>
<body>

	<section class="attached">
		<div class="logo">
			<a href="../../index.php"><h2>SPORTIGNITE</h2></a>
		</div>

		<div>
			<ul class="categories" >
					<li class="category">
						<a href="?action=add_stream"><h1>ADD STREAM</h1></a>
					</li>
					<li class="category">
						<a href="?action=add_match"><h1>ADD MATCH</h1></a>
					</li>
					<li class="category">
						<a href="?action=add_stats"><h1>ADD STATISTIQUE</h1></a>
					</li>
					<li class="category">
						<a href="?action=add_goals"><h1>ADD GOALS</h1></a>
					</li>
				</ul>
		</div>
	</section>

	<section class="matches">
		<div class="head">
			
			<?php 
			if(isset($_GET['action'])) { 
			 	$action =$_GET['action'];
			 	}
			else
			 	$action="add_match";
			?>
			
			<?php 
			if(isset($_GET['action'])) {
				if($_GET['action'] === 'add_match') { ?>
					<h3 style="font-size: 30px;font-weight: 700;">ADD MATCH</h3>
					<a href="<?php echo "$action.php" ;?>" class="add-match">ADD MATCH</a>
				<?php
				} elseif ($_GET['action'] === 'add_stats') { ?>
					<h3 style="font-size: 30px;font-weight: 700;">ADD STATISTICS</h3>
					<a href="<?php echo "$action.php" ;?>" class="add-match">ADD STATISTICS</a>
				<?php
				} elseif ($_GET['action'] === 'add_stream') { ?>
					<h3 style="font-size: 30px;font-weight: 700; margin: 20px auto;">ADD STREAM</h3>
				<?php
				} elseif ($_GET['action'] === 'add_goals') { ?>
					<h3 style="font-size: 30px;font-weight: 700;">ADD GOALS</h3>
					<a href="<?php echo "$action.php" ;?>" class="add-match">ADD GOALS</a>
				<?php
				} else { ?>
					<h3 style="font-size: 30px;font-weight: 700;">ADD MATCH</h3>
					<a href="<?php echo "$action.php" ;?>" class="add-match">ADD MATCH
				<?php
				} 
				} else { ?>
					<h3 style="font-size: 30px;font-weight: 700;">ADD MATCH</h3>
					<a href="<?php echo "$action.php" ;?>" class="add-match">ADD MATCH
				<?php
				}
				?>
			</a>
			
		</div>
		<div class="matches-table">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<td class="id">Id</td>
					<td class="first">First team name</td>
					<td class="second">Second team name</td>
					<td class="action">Action</td>
				</thead>


				
				<?php 
				if(isset($_GET['action'])) {
					if($_GET['action'] === 'add_stream') {
						include '../../includes/add-stream-table.php';
					} elseif($_GET['action'] === 'add_match') {
						include '../../includes/add-matche-table.php';
					} elseif ($_GET['action'] === 'add_stats') {
						include '../../includes/add-stats-table.php';
					} elseif ($_GET['action'] === 'contacted_us') {
						
					} else {
						include '../../includes/add-matche-table.php';
					}
				} else include '../../includes/add-matche-table.php';
				?>
				
					
			</table>
		</div>
	</section>

</body>
</html>
<?php
}
elseif (isset($_SESSION['chek']) && (time() - $_SESSION['active'] > 300 )) {
	session_unset();
	session_destroy();
	header('location: ../login.php');
}
else 
	header('location: ../login.php');
?>