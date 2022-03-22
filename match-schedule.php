<?php
	include './db/dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Matches Schedule - SPORTIGNITE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/match-schedule.css">

</head>
<body>

	<?php include './includes/header.php' ?>
	<center>
	<div class="ads">
     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- large ads -->
                <ins class="adsbygoogle hors-ad"
                     style=""
                     data-ad-client="ca-pub-4731714652432777"
                     data-ad-slot="1286633303"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>   
    </div>
    </center>

    <section class="container">
        <?php $sql3= "SELECT * FROM `coming_up` where status = 'encours' 
        GROUP BY date_match order by id_match asc";
                $result3 = mysqli_query($db,$sql3);
                while($row3=mysqli_fetch_array($result3)) {
                ?>
        <div class="fixture-holder">       
        <div class="fixtures-match-date">
            <h4><?php echo $row3['date_match']; ?></h4>
        </div>

        <?php $sql= "SELECT * FROM `coming_up` where status = 'encours' and 
        date_match = '".$row3['date_match']."' GROUP BY league order by id_match asc";
                $result = mysqli_query($db,$sql);
                while($row=mysqli_fetch_array($result)) {
                ?>
        
        <div class="fixtures-match-date2">
            <h4><?php echo $row['league']; ?></h4>
        </div>

        <?php $sql2 = "SELECT * FROM (SELECT * FROM `coming_up` where status = 'encours' 
        and league = '". $row['league'] ."' and date_match = '".$row3['date_match']."'order by id_match asc) as c";
            $result2 = mysqli_query($db,$sql2);
                while($row2=mysqli_fetch_array($result2)) {
                ?>

        <div class="match-content">
            <a href="sports.php?id=<?php echo $row2['id_match'];?>" class="comming-up-match">
                <div class="comming-up-team cmn1">
                    <div style="text-align: center; margin-bottom: 10px;">
                        <img src="<?php echo $row2['team1_photo']; ?>" class="comming-up-team-pic">
                    </div>

                    <div>
                        <p><?php echo $row2['team1_name'];?></p>
                    </div>
                </div>

                <div id="comming-up-info" 
                style="display: flex;justify-content: center;flex-direction: column;">  
                    <div id="time">
                        <p><?php echo $row2['time_match']; ?> <font size="1"> GMT </font></p>
                    </div>                    
                    
                </div>

                <div class="comming-up-team cmn2">
                    
                    <div style="text-align: center; margin-bottom: 10px;">
                        <img src="<?php echo $row2['team2_photo']; ?>" class="comming-up-team-pic">
                    </div>  

                    <div>
                        <p><?php echo $row2['team2_name'] ; ?></p>
                    </div>   
     
                </div>
            </a>
        </div>
        <?php
        }
        ?>

        <?php
        }
        ?>
            </div>
        <?php
        }
        ?>
    </section>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>