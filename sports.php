<?php
if(isset($_GET['id']))
	{
	include './db/dbconnect.php';
	$sql="SELECT * FROM coming_up, statistic WHERE id_match =".$_GET['id'] or "SELECT * FROM `coming_up`, `statistic` WHERE `coming_up`.id_match = `statistic`.id_news and status != 'encours";
	$result = mysqli_query($db,$sql);
	$row=mysqli_fetch_assoc($result);
	if (!empty($row['id_news'])) {
		
	
	

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $row['team1_name']  ;?>  VS <?php echo $row['team2_name'];?>  <?php echo $row['date_match'];?> - SPORTIGNITE</title>
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
    <link rel="stylesheet" type="text/css" href="./css/sport.css">
    <link rel="stylesheet" type="text/css" href="./css/modale.css">
    <script src="//cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js" type="text/javascript"></script>
    <script src="./js/js.js"></script>
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3930417,4,111,175,25,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3930417&101" alt="web page hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
<!-- another website analystics -- >
	<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '5a90c6b70b35910efa00003e');
    t.setAttribute('data-track-path', 'https://track.gaug.es/track.gif');
    t.src = 'https://d2fuc4clr7gvcn.cloudfront.net/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>
<!--ends here -->

</head>
<body>




	<?php include './includes/header.php' ;

	?>
	<section class="container">
	<?php	
		$sql="SELECT * FROM coming_up WHERE id_match =".$_GET['id']  ;
		$query=mysqli_query($db,$sql);
		$row=mysqli_fetch_assoc($query);
		if($row['status']=== 'encours') {
	?>

		<div class="matches-schedule">
			<div class="team">
				<img src="<?php echo $row['team1_photo'];?>" class="team-img">
			</div>
			<div class="vs-logo">
				<h1>VS</h1>
			</div>

			<div class="team">
				<img src="<?php echo $row['team2_photo']  ;?>" class="team-img">
			</div>
		</div>
		<?php
		}
		else {
			$sql="SELECT * FROM `coming_up`, `statistic` WHERE `coming_up`.id_match = `statistic`.id_news and id_match =".$_GET['id']  ;
				$query=mysqli_query($db,$sql);
				$row=mysqli_fetch_assoc($query);
			?>
		<div class="matches-schedule">
			<div class="team">
				<img src="<?php echo $row['team1_photo'];?>" class="team-img">
			</div>

			<div class="vs-logo">
				<h1><?php echo $row['result'];?></h1>
			</div>

			<div class="team">
				<img src="<?php echo $row['team2_photo']  ;?>" class="team-img">
			</div>
		</div>

		<?php
			}
		?>
	</section>
<?php
				if ($row['status']==="encours") {
					

				?>
				
	<section class="container">
		<div class="stream-holder">
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

			<center>
				<h5 style="font-family: 'Poppins', sans-serif;font-weight: 700;letter-spacing: 1px;">this stream is under testing! so please if anything occurred while you are watching we will be thankfull if you mention it in the chat or in reddit to fix it, thank u and enjoy!</h5>
			</center>


			<div class="player-chat">
				<div style="display: block;width: 100%;">
					<div class="chatbox-player">
						<div class="chatbox hidden-sm hidden-xs">
							<div>
							<script id="cid0020000176054515215" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 250px;height: 350px;">{"handle":"sportignitedotcom","arch":"js","styles":{"a":"364958","b":100,"c":"FFFFFF","d":"FFFFFF","k":"364958","l":"364958","m":"364958","n":"FFFFFF","p":"10","q":"364958","r":100,"fwtickm":1}}</script>
							</div>
							
						</div>
						
			<?php 
			if ($row['stream']!=="") {
							# code...			 ?>
						<div class="player" id="player2">
							<div id="player"></div>
						<?php
	    					$sql="SELECT * FROM coming_up WHERE id_match =".$_GET['id']  ;
							$query=mysqli_query($db,$sql);
							$row=mysqli_fetch_assoc($query); echo $row['stream']; ?>

						</div>
						<div class="player" id="player3" style="display: none;">
							<div style="width: 80%; height: 50%;">
								<h1>refresh again </h1>
							</div>
						</div>
						<?php
							}
			else {?>
						<div class="player coverage">
							<div style="margin-top: 130px;"></div>
							<center>
							<h1>Hi There!</h1>
							<h4>Match coverage will be available when the time comes</h4>
							 </center>
						</div>
			         <?php
			     }
									
						?>
						
					</div>

					<div class="ads">
						<center>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 336x280ads -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4731714652432777"
     data-ad-slot="1187039887"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
						</center>
					</div>	

				</div>
				<div class="second-add">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad_300x600 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:600px"
     data-ad-client="ca-pub-4731714652432777"
     data-ad-slot="9511913154"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				</div>
			</div>
		</div>
									
	</section>

<!-- counter  -->

<?php
//	include("./includes/modale.php");
//	include("./includes/counter.php");
?>

	<?php
			}
			else
			{?>
	<section class="container">
		
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

			
			<?php
				$sql="SELECT * FROM `coming_up`, `statistic` WHERE `coming_up`.id_match = `statistic`.id_news and id_match =".$_GET['id']  ;
				$query=mysqli_query($db,$sql);
				$row=mysqli_fetch_assoc($query);
							?>
				
				<div class="table-ads">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 tbl">

					<div class="sport_new">
						<div class="new_pic">
							<img src="<?php echo $row['news_image'] ;?>" width="100%" />
						</div>
						<div class="pr-new-result">
							<p><?php echo $row['team1_name']  ;?>  <?php echo $row['result'];?> <?php echo $row['team2_name'];?> <br />- Goals & Highlights</p>
							
						</div>
					</div>

					<table class="table table-striped table-bordered table-hover">
							  <tr >
							    <td style=" text-align: left;">Teams:</td>
							    <td><?php echo $row['team1_name']  ;?></td>
							    <td style="color :blue">VS</td>
							    <td> <?php echo $row['team2_name'];?></td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Possession %:</td>
							    <td><?php echo $row['pos1']  ;?></td>
							    <td style="color :blue"> - </td>
							    <td><?php echo $row['pos2']  ;?></td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Total Shots :</td>
							    <td><?php echo $row['total_shot1']; ?></td>
							    <td style="color :blue"> - </td>
							    <td><?php echo $row['total_shot2']; ?></td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Target Shots :</td>
							    <td><?php echo $row['shots_target1']; ?></td>
							    <td style="color :blue"> - </td>
							    <td><?php echo $row['shots_target2']; ?></td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Corners:</td>
							    <td><?php echo $row['corners1']; ?></td>
							    <td style="color :blue"> - </td>
							    <td><?php echo $row['corners2']; ?></td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Offsides:</td>
							    <td><?php echo $row['offsides1']; ?></td>
							    <td style="color :blue"> - </td>
							    <td><?php echo $row['offsides2']; ?></td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Fouls:</td>
							    <td><?php echo $row['fouls1']; ?></td>
							    <td style="color :blue"> - </td>
							    <td><?php echo $row['fouls2']; ?></td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Yellow Cards:</td>
							    <td><?php echo $row['yellow_cards1']; ?></td>
							    <td style="color :blue"> - </td>
							    <td><?php echo $row['yellow_cards2']; ?></td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Red Cards:</td>
							    <td><?php echo $row['red_cards1']; ?></td>
							    <td style="color :blue"> - </td>
							    <td><?php echo $row['red_cards2']; ?></td>
							  </tr>
						</table>
					</div>
					
				
			<div class="second-add">
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

		<?php
			$sql="SELECT DISTINCT * FROM goals NATURAL JOIN coming_up where `coming_up`.id_match =".$_GET['id']; 
		  	$result = mysqli_query($db,$sql);    		 	
		?>
					<div class="goals">
						<center>
							<div style="margin-top:-25px"><br><br>
                              <?php while($row = mysqli_fetch_assoc($result)) {?>
								<font style="font-family:'Baloo Chettan', cursive;color:#207291;"><?php echo $row['title'];?></font><br>
								<iframe src="<?php echo $row['source'];?>" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling="no" class="the_frame"></iframe><br><br>
							
								<?php }?>
							
							</div>
						</center>
					</div>
			
		</div>
	</section>

	<?php	
		}	
	?>



<script type="text/javascript" src="./js/script.js"></script>


</body>
</html>
<?php
}
else
	include'./not-found.php';

}
else
{
	include'./not-found.php';

}
?>