<?php
session_start();
if (isset($_SESSION['active'])){


require_once('../../db/dbconnect.php');
  
  if(isset($_POST['submit'])){
    if(isset($_POST['available'])) {
      $_POST['available'] = "Available On SPORTIG";
    } else {
      $_POST['available'] = "";
    }

      $first_team = $_POST['first_team'];
      $second_team = $_POST['second_team'];
      $first_team_img = $_POST['first_team_img'];
      $second_team_img = $_POST['second_team_img'];
      $date_match = $_POST['date_match'];
      $time_match = $_POST['time_match'];
      $league = $_POST['league'];
      $available = $_POST['available'];
      if (!empty($first_team) && !empty($second_team) && !empty($date_match) && !empty($time_match)
      && !empty($first_team_img) && !empty($second_team_img))
      {

        $query = "INSERT INTO coming_up (id_match, team1_name, team2_name,
          team1_photo, team2_photo, date_match, time_match, league, available) VALUES (NULL, ?, ?,
          ?, ?, ?, ?, ?, ?)";

          $stmt = mysqli_prepare($db, $query);

          mysqli_stmt_bind_param($stmt, "ssssssss", $first_team, $second_team, $first_team_img, $second_team_img, $date_match, $time_match, $league, $available);

          mysqli_stmt_execute($stmt);

          $affected_rows = mysqli_stmt_affected_rows($stmt);

          if($affected_rows == 1){

              echo 'match added';

              mysqli_stmt_close($stmt);

              mysqli_close($db);

          } else {

              echo 'Error Occurred<br />';

              echo mysqli_error($db);

              mysqli_stmt_close($stmt);

              mysqli_close($db);

          }
    } else echo "you are missing somthing dumbass!";
} 


?>







<!DOCTYPE html>
<html>
<head>
  <title>Add Match</title>
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
            <form method="POST" action=<?php echo "'".$_SERVER['PHP_SELF']."'";?>>
              
              <div class="form-group " style="display: flex; justify-content: space-between;">
                <div><label >first team</label>
                <input name="first_team" type="text" class="form-control" aria-describedby="emailHelp"></div>
                <div><label >image</label>
                <input name="first_team_img" type="text" class="form-control" aria-describedby="emailHelp"></div>
              </div>

              <div class="form-group " style="display: flex; justify-content: space-between;">
                <div><label >second team</label>
                <input name="second_team" type="text" class="form-control" aria-describedby="emailHelp"></div>
                <div><label >image</label>
                <input name="second_team_img" type="text" class="form-control" aria-describedby="emailHelp"></div>
              </div>

              <div class="form-group">
                <label >Date</label>
                <input name="date_match" type="text" class="form-control" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label >Time</label>
                <input name="time_match" type="text" class="form-control" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">League</label>
                <select name="league" class="form-control" id="exampleFormControlSelect1">
                  <option>Champions-league</option>
                  <option>Europa-league</option>
                  <option>Premier-League</option>
                  <option>La-liga-Santander</option>
                  <option>bundesligua</option>
                  <option>Ligue-1</option>
                  <option>calcio</option>
                  <option>NBA</option>
                  <option>others</option>
                </select>
              </div>
                
                <div class="form-check">
                <label class="form-check-label" for="exampleCheck1">Availibility</label>
                <input name="available" type="checkbox" class="form-check-input" id="exampleCheck1">
              </div>
              <div style="display: flex;justify-content: space-between;">
                <button name="submit" type="submit" class="btn btn-primary" style="margin-top: 10px;">Send</button>
                <a href="manage_site.php" class="go_back">Go back</a>
              </div>
            </form>
        </div>
  </section>

</body>
</html>
<?php
}
else
  header('location: ../login.php');
?>
