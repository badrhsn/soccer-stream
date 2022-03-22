<?php 
 
    require_once('../../db/dbconnect.php');
    
  $qry="SELECT * FROM coming_up";
  $result=mysqli_query($db,$qry);

  if(isset($_POST['submit']) and isset($_GET['id_match']))
  {
    if(isset($_POST['available'])) {
      $_POST['available'] = "Available On SPORTIG";
    }

  $first_team = $_POST['first_team'];
  $second_team = $_POST['second_team'];
  $first_team_img = $_POST['first_team_img'];
  $second_team_img = $_POST['second_team_img'];
  $date_match = $_POST['date_match'];
  $time_match = $_POST['time_match'];
  $league = $_POST['league'];
  $available = $_POST['available'];

    $querry ="UPDATE coming_up SET 
                  team1_name = '$first_team',
                  team2_name = '$second_team',
                  team1_photo = '$first_team_img',
                  team2_photo = '$second_team_img',
                  date_match = '$date_match',
                  time_match = '$time_match',
                  league = '$league',
                  available = '$available'
              WHERE id_match = '".$_GET['id_match']."'";

    $response = mysqli_query($db,$querry);
    
  }
  
  if(isset($_GET['id_match']))
  {
    $viv_qry="SELECT * FROM  coming_up WHERE id_match='".$_GET['id_match']."'";
    $viv_res=mysqli_query($db,$viv_qry);
    $viv_row=mysqli_fetch_assoc($viv_res);
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
            <form method="POST" action="">
              <div class="form-group">
                <label >Id</label>
                <input name="id" type="text" class="form-control"  
                value="<?php echo $_GET['id_match']; ?>">
              </div>

              <div class="form-group " style="display: flex; justify-content: space-between;">
                <div><label >first team</label>
                <input name="first_team" type="text" class="form-control" 
                value="<?php echo $viv_row['team1_name'];?>"></div>
                <div><label >image</label>
                <input name="first_team_img" type="text" class="form-control" 
                value="<?php echo $viv_row['team1_photo'];?>"></div>
              </div>

              <div class="form-group " style="display: flex; justify-content: space-between;">
                <div><label >second team</label>
                <input name="second_team" type="text" class="form-control" 
                value="<?php echo $viv_row['team2_name'];?>"></div>
                <div><label >image</label>
                <input name="second_team_img" type="text" class="form-control" 
                value="<?php echo $viv_row['team2_photo'];?>"></div>
              </div>

              <div class="form-group">
                <label >Date</label>
                <input name="date_match" type="text" class="form-control" 
                value="<?php echo $viv_row['date_match'];?>">
              </div>
              <div class="form-group">
                <label >Time</label>
                <input name="time_match" type="text" class="form-control" 
                value="<?php echo $viv_row['time_match'];?>">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">League</label>
                <select name="league" class="form-control" id="exampleFormControlSelect1">
                  <option <?php if($viv_row['league'] === "Champions-League") 
                  echo "selected"?> >Champions-league</option>
                  <option <?php if($viv_row['league'] === "Europa-League") 
                  echo "selected"?> >Europa-league</option>
                  <option <?php if($viv_row['league'] === "Premier-League") 
                  echo "selected"?> >Premier-League</option>
                  <option <?php if($viv_row['league'] === "La-Liga-Santander") 
                  echo "selected"?> >La-liga-Santander </option>
                  <option <?php if($viv_row['league'] === "bundesligua") 
                  echo "selected"?> >bundesligua</option>
                  <option <?php if($viv_row['league'] === "Ligue-1") 
                  echo "selected"?> >Ligue-1</option>
                  <option <?php if($viv_row['league'] === "calcio") 
                  echo "selected"?> >calcio</option>
                  <option <?php if($viv_row['league'] === "nba") 
                  echo "selected"?> >NBA</option>
                  <option <?php if($viv_row['league'] === "others") 
                  echo "selected"?> >others</option>
                </select>
              </div>
                

              <div class="form-check">
                  <label class="form-check-label" for="exampleCheck1">Availibility</label>
                  <input name="available" type="checkbox" class="form-check-input" id="exampleCheck1"  
                  <?php 
                    if ($viv_row['available'] === "Available On SPORTIG") {
                      echo "checked=\"true\"";
                    }
                    else echo "";
                  ?>
                  >
              </div>
            <div style="display: flex;justify-content: space-between;">
              <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 10px;">Save</button>
              <a href="manage_site.php" class="go_back">Go back</a>
            </div>
            </form>
        </div>
  </section>

</body>
</html>