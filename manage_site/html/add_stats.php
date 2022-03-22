<?php
session_start();
if (isset($_SESSION['active'])) {
  require_once("../../db/dbconnect.php");
  $msg = "";

if($_SERVER['REQUEST_METHOD']=='POST'){

    $image = $_POST['imageNews'];
    $result = $_POST['result']; 
    $idmatch = $_POST['id_match'];
    $pos1 = $_POST['position1'];
    $pos2 = $_POST['position2'];
    $tshots1 = $_POST['totalShot1'];
    $tshots2 = $_POST['totalShot2'];
    $shotsT1 = $_POST['shotstarget1'];
    $shotsT2 = $_POST['shotstarget2'];
    $corners1 = $_POST['corners1'];
    $corners2 = $_POST['corners2'];
    $offside1 = $_POST['offside1'];
    $offside2 = $_POST['offside2'];
    $fouls1 = $_POST['fouls1'];
    $fouls2 = $_POST['fouls2'];
    $yellowCard1 = $_POST['yellowcard1'];
    $yellowCard2 = $_POST['yellowcard2'];
    $redCard1 = $_POST['redcard1'];
    $redCard2 = $_POST['redcard2'];

    $msg='';

    if (strlen($result) != 0 && strlen($pos1) != 0 && strlen($pos2) != 0 && strlen($tshots1) != 0 
    	&& strlen($tshots2) != 0 && strlen($shotsT1) != 0 && strlen($shotsT2) != 0 && strlen($corners1) != 0 
    	&& strlen($corners2) != 0  && strlen($offside1) != 0 && strlen($offside2) != 0 && strlen($fouls1) != 0
    	&& strlen($fouls2) != 0 && strlen($yellowCard1) != 0 && strlen($yellowCard2) != 0 
    	&& strlen($redCard1) != 0 && strlen($redCard2) != 0 )
      {

      $sql = "INSERT INTO statistic (id_news, result, news_image, pos1, pos2, total_shot1, total_shot2, shots_target1, shots_target2, corners1, corners2, offsides1, offsides2, fouls1, fouls2, yellow_cards1, yellow_cards2, red_cards1, red_cards2) VALUES ('$idmatch','$result','$image','$pos1','$pos2','$tshots1','$tshots2','$shotsT1','$shotsT2','$corners1','$corners2','$offside1','$offside2','$fouls1','$fouls2','$yellowCard1','$yellowCard2','$redCard1','$redCard2')";
      mysqli_query($db, $sql);

      $sql2 = "UPDATE coming_up SET status = '' WHERE id_match = '".$idmatch."'";
      mysqli_query($db, $sql2);

      }else $msg = '<center>something missing!</center>';
    

    
  
}
mysqli_close($db);
?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/add_match.css">
</head>
<body>

  <section class="container">
      <div class="content col-lg-6 col-md-7 col-sm-10 col-xs-11">
    <form method="POST" action=<?php echo "'".$_SERVER['PHP_SELF']."'";?>>
      <div class="form-group" style="display: flex;flex-direction: column;align-items: center;">
        <label class="form-control-label"> ID d match li tssala :</label>
        <input class="form-control" name="id_match" type="number" >
      </div>
      <div class="form-group" style="display: flex;flex-direction: column;align-items: center;">
        <label class="form-control-label"> Result </label>
        <input class="form-control" name="result" type="text"   placeholder="result">
      </div>
      <div class="form-group" style="display: flex;flex-direction: column;align-items: center;">
        <label class="form-control-label"> image news :</label>
        <input class="form-control" name="imageNews" type="text"   placeholder="image">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        <input class="form-control" name="position1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Position </label>
        <input class="form-control" name="position2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input class="form-control" name="totalShot1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Total Shots </label>
        <input class="form-control" name="totalShot2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input class="form-control" name="shotstarget1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Shots Target </label>
        <input class="form-control" name="shotstarget2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input class="form-control" name="corners1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Corners </label>
        <input class="form-control" name="corners2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input class="form-control" name="offside1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Offsides </label>
        <input class="form-control" name="offside2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input class="form-control" name="fouls1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Fouls </label>
        <input class="form-control" name="fouls2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input class="form-control" name="yellowcard1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Yellow Cards </label>
        <input class="form-control" name="yellowcard2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        <input class="form-control" name="redcard1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label">Red Cards </label>
        <input class="form-control" name="redcard2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div style="display: flex;justify-content: space-between;">
        <button type="submit" class="btn btn-primary" style="cursor: pointer;">Submit</button>
        <a href="manage_site.php" class="go_back">Go back</a>
      </div>
      <?php if($msg!=='') echo "<div style='color:#fff;font-size:25px;'>".$msg."</div>"; ?>
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