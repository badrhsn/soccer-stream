
					
 					<?php
                                
				
				$count=mysqli_num_rows(mysqli_query($db, "SELECT * FROM `coming_up`, `statistic` WHERE `coming_up`.id_match = `statistic`.id_news and status !='encours' order by cast(id_news as unsigned)"));	
				$a=$count/10;
			    if($a<1){$a=1;}
			    $x=ceil($a);
			    $lastpage=$x-1;
				$html="";
				$stages=3;
				$prev=$page-1;
								
				$html="<div class='pagina'>";
				$html.="<ul>";
				if ($page>1) {
					# code...
				
					$html.="<li><a href='index.php?page=".$prev."'>&laquo</a></li>";
				}
				else
				$html.="<li><span aria-hidden='true'>&laquo</span></li>";	

           if ($x<7 + ($stages * 2)) {

				for ($b=1; $b<=$x ; $b++) { 
					# code...
					$html.="<li><a href='index.php?page=$b'>$b</a></li>";
				
			  }
			}
			elseif($x> 6 + ($stages * 2)){
				if ($page<(1 + ($stages * 2))) {
			
				
					for ($b=1; $b< 4 + ($stages * 2); $b++) { 
					
					$html.="<li><a href='index.php?page=$b'>$b</a></li>";
				
			               }
			             $html.="<li><a >...</a></li>";
			             $html.="<li><a href='index.php?page=$lastpage'>$lastpage</a></li>";
			             $html.="<li><a href='index.php?page=$x'>$x</a></li>";

			                 }
			    elseif ($x - ($stages * 2) > $page && $page > ($stages * 2)) {
			    		$html.= "<li><a href='index.php?page=1'>1</a></li>";
				$html.= "<li><a href='index.php?page=2'>2</a></li>";
				$html.= "<li>...</li>";
				for ($b = $page - $stages; $b <= $page + $stages; $b++)
				{
					$html.= "<li><a href='index.php?page=$b'>$b</a></li>";
				}
				$html.= "<li><a >...</a></li>";
				$html.= "<li><a href='index.php?page=$lastpage'>$lastpage</a></li>";
				$html.= "<li><a href='index.php?page=$x'>$x</a></li>";	
			    }
			    else
			{
			    $html.= "<li><a href='index.php?page=1'>1</a></li>";
				$html.= "<li><a href='index.php?page=2'>2</a></li>";
				$html.= "<li><a >...</a></li>";
				for ($b = $lastpage - (2 + ($stages * 2)); $b <= $x; $b++)
				{
				
						$html.= "<li><a href='index.php?page=$b'>$b</a></li>";}					
				}

			}
			
			$next = $page + 1;
			
			
			
			if ($next<=$x) {
			  	$html.="<li><a href='index.php?page=$next'>&raquo</a></li>";
			  }
			else{

				$html.="<li><span aria-hidden='true'>&raquo</span></li>";
				
				}
				$html.="</ul>";
			$html.="</div>";
			
			echo $html;
			?>