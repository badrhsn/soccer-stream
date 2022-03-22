<?php  
	require_once('../../db/dbconnect.php');
	$query = "SELECT id_match, team1_name, team2_name FROM coming_up ORDER BY id_match DESC";
	$response = @mysqli_query($db, $query);

if($response) {

	while($row = mysqli_fetch_array($response)) { ?>

	<tr>
		
		<td class="id"><?php echo $row['id_match'];?></td>
		<td class="first" ><?php echo $row['team1_name']; ?></td>
		<td class="second"><?php echo $row['team2_name']; ?></td>
		<td class="action">
			
			<a class="btn btn-primary" href="edit_match.php?id_match=<?php echo $row['id_match'];?>">EDIT</a>
			<a class="btn btn-danger" href="?id_match=<?php echo $row['id_match'];?>" onclick="return confirm('Are you sure you want to delete this match?');">DELETE</a>
			
		</td>
	</tr>
	<?php
	}

} else {
	echo "Couldn't issue database query<br />";
	echo mysqli_error($db);
	}
	// Close connection to the database
	mysqli_close($db);

?>