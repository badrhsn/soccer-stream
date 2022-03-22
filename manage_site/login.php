<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/add_match.css">

</head>
<body>

 <section class="container">
   <div class="content col-lg-6 col-md-7 col-sm-10 col-xs-11">
  
      <form action="./includes/controle.php" method="post"> 

            <div class="form-group">
              <label>Username</label>
              <input type="text" placeholder="Enter Username" name="name"  class="form-control" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">  
              <label>Password</label>
              <input type="password" placeholder="Enter Password" name="pswd"  class="form-control" aria-describedby="emailHelp" required>
            </div>    
            <div class="form-group">
              <button type="submite" name="login" class="btn btn-primary">send</button>
            </div>
      </form>
</div>
</section>

</body>
</html>
