ikon<?php

	include './db/dbconnect.php';

	if(isset($_GET['page'])) {
	 	$page = $_GET['page'];
    	$path = "index.php?page=$page";
    
	} else $path = "index.php?page=1";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Football Statistics, News, Goals & More - Sportignite</title>
<meta name="description" content="Football Matches Statistics, Reviews, Goals & Highlights" />
<meta property="og:site_name" content="Sportignite" />
<link rel="icon" type="image/png" href="https://i.imgur.com/C0bICjN.png">
<meta property="og:locale" content="en" />
<meta property="og:title" content="Football Statistics, News, Goals & More - Sportignite" />
<meta property="og:description" content="Football Matches Statistics, Reviews, Goals & Highlights" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/pagination.css">
 

</head>
<body>

	<?php include './includes/header.php' ;?>


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
		<div class="row">
			<div class="hidden-lg hidden-md hidden-sm col-10xs comp">
				<div class="league" id="toggle">
					<a href="#">
						<h2><span class="caret"></span> COMPETITIONS <span class="caret"></span></h2>
					</a>
				</div>
			</div>
			<div class="col-lg-4 pd0 col-4-md col-10-sm">
				<ul class="leagues" >
					<li class="league">
						<a href="matches.php?league=Champions-league"><h1>CHAMPIONES LEAGUE</h1></a>
					</li>
					<li class="league">
						<a href="matches.php?league=Europa-league"><h1>EUROPA LEAGUE</h1></a>
					</li>
					<li class="league">
						<a href="matches.php?league=La-liga-Santander"><h1>LA LIGUA SANTANDER</h1></a>
					</li>
					<li class="league">
						<a href="matches.php?league=Premier-League"><h1>ENGLISH PL</h1></a>
					</li>
					<li class="league">
						<a href="matches.php?league=Ligue-1"><h1>LIGUE 1</h1></a>
					</li>
					<li class="league">
						<a href="matches.php?league=bundesligua"><h1>BUNDESLIGA</h1></a>
					</li>
					<li class="league">
						<a href="matches.php?league=calcio"><h1>CALCIO</h1></a>
					</li>
					<li class="league">
						<a href="matches.php?league=others"><h1>OTHERS</h1></a>
					</li>
				</ul>

				<div class="second-add hidden-md hidden-sm hidden-xs">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- 336x280ads -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:300px;height:600px"
					     data-ad-client="ca-pub-4731714652432777"
					     data-ad-slot="1187039887"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</div>

			<div class="col-lg-7 pd0" >
				<?php
						$query="SELECT * FROM `coming_up`, `statistic` WHERE `coming_up`.id_match = `statistic`.id_news and status != 'encours' order by cast(id_news as unsigned) desc limit 1";
						$result = mysqli_query($db,$query);
									
								
								$row=mysqli_fetch_assoc($result);
							?>
				<a href="sports.php?id=<?php echo $row['id_match'];?>"><div class="principal-new">
					<div class="principal-new-pic">
						<img src="<?php echo $row['news_image'] ;?>" class="principal-new-img">
					</div>
					<div class="pr-new-result">
						<p><?php echo $row['team1_name']  ;?>  <?php echo $row['result'];?> <?php echo $row['team2_name'];?> <br />- Goals & Highlights</p>
						
					</div>
				</div></a>
				<?php			
		 		$page=0;
               	$offset=1;						
				if (isset($_GET['page']))
				{				
					$page=(int)$_GET['page'] ;				        
		        }

				if($page<1)
				{
					$page=1;
				}											
				else
				{
					$offset=($page*10)-9;
				}

				$result = mysqli_query($db, "SELECT * FROM `coming_up`, `statistic` WHERE `coming_up`.id_match = `statistic`.id_news and status !='encours' order by cast(id_news as unsigned) desc Limit $offset,10");
											
				?>
				<div class="side-news">
				<?php
				while ($row=mysqli_fetch_assoc($result))
					{
				?>
					<a href="sports.php?id=<?php echo $row['id_match'];?>"><div class="side-new">
						<div class="side-new-pic">
							<img src="<?php echo $row['news_image'] ;?>" class="side-new-img">
						</div>
						<div class="side-new-result">
							<p><?php echo $row['team1_name']  ;?>  <?php echo $row['result'];?> <?php echo $row['team2_name'];?> <br />- Goals & Highlights</p>
						</div>
					</div></a>
				<?php

					}

				?>	

				</div>
				<div>
				<?php
				include'./includes/pagination.php';
				?>
				<script type="text/javascript">
				var target = $('.pagina li > a[href="<?php echo $path; ?>"]');
			    target.addClass('pagina-active');
				</script>

				</div>
			</div>

		</div>
	</section>

   


<script type="text/javascript" src="./js/script.js"></script>

</body>
</html>