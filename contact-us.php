<?php
    include './db/dbconnect.php';
  if (isset($_POST['add'])) {
    $message = htmlspecialchars($_POST['msg']);
    $email = htmlspecialchars($_POST['email']);
    if(strlen($email) !== 0  && strlen ($message) !== 0  ) {
    $sql = "INSERT INTO contact_us (email,message) VALUES ('$email','$message')";
    $row = mysqli_query($db,$sql);
    }
  }


?>
<!DOCTYPE html>
<html>
<head>
  <title>CONTACT US!</title>
  <meta charset="utf-8">
<link rel="icon" type="image/png" href="https://i.imgur.com/C0bICjN.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/contact-us.css">
</head>
<body>

  <?php include './includes/header.php'; ?>

  <section class="container">
        <div class="content col-lg-7 col-md-8 col-sm-10 col-xs-11">
            <form method="post" action="contact-us.php">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Message</label>
                <textarea class="form-control" name="msg"></textarea>
              </div>
              
              <button type="submit" name="add" class="btn btn-primary">Send</button>
            </form>
        </div>
  </section>

    <script type="text/javascript" src="./js/script.js"></script>

</body>
</html>