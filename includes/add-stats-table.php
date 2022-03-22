<?php  
	require_once('../../db/dbconnect.php');
	$query = "SELECT id_news,team1_name,team2_name FROM statistic JOIN coming_up ON id_news=id_match ORDER BY cast( id_news as unsigned) DESC";
	$response = @mysqli_query($db, $query);

if($response) {

	while($row = mysqli_fetch_array($response)) { ?>

	<tr>
		
		<td class="id"><?php echo $row['id_news'];?></td>
		<td class="first" ><?php echo $row['team1_name']; ?></td>
		<td class="second"><?php echo $row['team2_name']; ?></td>
		<td class="action">
			
			<a class="btn btn-primary" href="edit_stats.php?id_news=<?php echo $row['id_news'];?>">EDIT</a>
			<a class="btn btn-danger" href="?id_news=<?php echo $row['id_news'];?>" onclick="return confirm('Are you sure you want to delete this match?');">DELETE</a>
			
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