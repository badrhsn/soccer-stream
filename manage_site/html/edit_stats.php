 <?php

  require_once('../../db/dbconnect.php');

  $msg ='';
    
  $qry="SELECT * FROM statistic";
  $result=mysqli_query($db,$qry);

  if(isset($_POST['submit']) and isset($_GET['id_news']))
  {
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


    $querry ="UPDATE statistic SET 
                  result = '$result',
                  news_image = '$image',
                  pos1 = '$pos1',
                  pos2 = '$pos2',
                  total_shot1 = '$tshots1',
                  total_shot2 = '$tshots2',
                  shots_target1 = '$shotsT1',
                  shots_target2 = '$shotsT2',
                  corners1 = '$corners1',
                  corners2 = '$corners2',
                  offsides1 = '$offside1',
                  offsides2 = '$offside2' ,
                  fouls1 = '$fouls1',
                  fouls2 = '$fouls2',
                  yellow_cards1 = '$yellowCard1',
                  yellow_cards2 = '$yellowCard2',
                  red_cards1 = '$redCard1',
                  red_cards2 = '$redCard2'

              WHERE id_news = '".$_GET['id_news']."'";

    $response = mysqli_query($db,$querry);
    
  }
  
  if(isset($_GET['id_news']))
  {
    $viv_qry="SELECT * FROM coming_up, statistic WHERE id_news =".$_GET['id_news'];
    $viv_res=mysqli_query($db,$viv_qry);
    $viv_row=mysqli_fetch_assoc($viv_res);
  }



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
    <form method="POST" action="">
      <div class="form-group" style="display: flex;flex-direction: column;align-items: center;">
        <label class="form-control-label"> ID d match li tssala :</label>
        <input value="<?php echo $viv_row['id_news']; ?>" class="form-control" name="id_match" type="number" >
      </div>
      <div class="form-group" style="display: flex;flex-direction: column;align-items: center;">
        <label class="form-control-label"> Result </label>
        <input value="<?php echo $viv_row['result']; ?>" class="form-control" name="result" type="text"   placeholder="result">
      </div>
      <div class="form-group" style="display: flex;flex-direction: column;align-items: center;">
        <label class="form-control-label"> image news :</label>
        <input value="<?php echo $viv_row['news_image']; ?>" class="form-control" name="imageNews" type="text"   placeholder="image">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        <input value="<?php echo $viv_row['pos1']; ?>" class="form-control" name="position1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Position </label>
        <input value="<?php echo $viv_row['pos2']; ?>" class="form-control" name="position2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input value="<?php echo $viv_row['total_shot1']; ?>" class="form-control" name="totalShot1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Total Shots </label>
        <input value="<?php echo $viv_row['total_shot2']; ?>" class="form-control" name="totalShot2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input value="<?php echo $viv_row['shots_target1']; ?>" class="form-control" name="shotstarget1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Shots Target </label>
        <input value="<?php echo $viv_row['shots_target2']; ?>" class="form-control" name="shotstarget2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input value="<?php echo $viv_row['corners1']; ?>" class="form-control" name="corners1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Corners </label>
        <input value="<?php echo $viv_row['corners2']; ?>" class="form-control" name="corners2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input value="<?php echo $viv_row['offsides1']; ?>" class="form-control" name="offside1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Offsides </label>
        <input value="<?php echo $viv_row['offsides2']; ?>" class="form-control" name="offside2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input value="<?php echo $viv_row['fouls1']; ?>" class="form-control" name="fouls1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Fouls </label>
        <input value="<?php echo $viv_row['fouls2']; ?>" class="form-control" name="fouls2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        
        <input value="<?php echo $viv_row['yellow_cards1']; ?>" class="form-control" name="yellowcard1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label"> Yellow Cards </label>
        <input value="<?php echo $viv_row['yellow_cards2']; ?>" class="form-control" name="yellowcard2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div class="form-group" style="display: flex;justify-content: space-between;">
        <input value="<?php echo $viv_row['red_cards1']; ?>" class="form-control" name="redcard1" type="text" style="width: 150px;"  placeholder="Team 1">
        <label class="form-control-label">Red Cards </label>
        <input value="<?php echo $viv_row['red_cards2']; ?>" class="form-control" name="redcard2" type="text" style="width: 150px;"  placeholder="Team 2">
      </div>
      <div style="display: flex;justify-content: space-between;">
        <button name="submit" type="submit" class="btn btn-primary" style="cursor: pointer;">Submit</button>
        <a href="manage_site.php" class="go_back">Go back</a>
      </div>
      <?php if($msg!=='') echo "<div style='color:#fff;font-size:25px;'>".$msg."</div>"; ?>
    </form>
    </div>
  </section>

</body>
</html>