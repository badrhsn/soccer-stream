<?php  
	require_once('../../db/dbconnect.php');
	$query = "SELECT id_match, team1_name, team2_name, stream FROM coming_up ORDER BY id_match DESC";
	$response = @mysqli_query($db, $query);

if($response) {

	while($row = mysqli_fetch_array($response)) { ?>

	<tr>
		
		<td class="id"><?php echo $row['id_match'];?></td>
		<td class="first" ><?php echo $row['team1_name']; ?></td>
		<td class="second"><?php echo $row['team2_name']; ?></td>
		<td class="action">
			<?php if ($row['stream'] === '') { ?>
			  <a class="btn btn-primary" href="add_stream.php?id_match=<?php echo $row['id_match'];?>">ADD</a>
			<?php } else { ?>
			  <a class="btn btn-primary" href="edit_stream.php?id_match=<?php echo $row['id_match'];?>">EDIT</a>
			<?php } ?>
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