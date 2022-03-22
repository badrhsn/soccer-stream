<?php
session_start();
if (isset($_SESSION['active'])) {

  include("../../db/dbconnect.php");


if($_SERVER['REQUEST_METHOD']=='POST'){

$id = $_POST['id'];
$title= $_POST['titlegoal'];
$sour = $_POST['src'];

$msg='';

    if (strlen($id)!== 0 && strlen($title)!== 0 && strlen($sour)!==0)
      {

      $sql = "INSERT INTO `goals`(`id_match`, `title`, `source`) VALUES ('$id', '$title', '$sour')";
       mysqli_query($db,$sql);

      }else 
      {$msg = '<center></center>';
    
}
    
  
}
mysqli_close($db);
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD GOLS</title>
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
      <div class="form-group">
        <label>id d match li tssala :</label>
        <input name="id" type="number" class="form-control" id="exampleInputEmail1" placeholder="id d match li tssala">
      </div>
      <div class="form-group">
        <label>goal title :</label>
        <input name="titlegoal" type="text" class="form-control" id="exampleInputEmail1" placeholder="goal title">
      </div>
       <div class="form-group">
        <label>source :</label>
        <input name="src" type="text" class="form-control" id="exampleInputEmail1" placeholder="source">
      </div>
       <br>
      <button name ="add" type="submit" class="btn btn-primary">Add Goal</button>
      <?php if($msg!=='') echo "<div style='color:red;font-size:25px;'>".$msg."</div>"; ?>
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