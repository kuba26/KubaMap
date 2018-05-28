<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once("datas.php");


$mijnFilter = $_GET["filter"];

$gefilterdeSmoesjes = array();

for ($i =0; $i < count($smoesjes); ++$i)
{
	$smoesje = $smoesjes[$i];
	$categories = $smoesje["categories"];
	for ($j =0; $j < count($categories); ++$j)
	{
		$categoriename = $categories[$j];
		if($categoriename == $mijnFilter)
		{
			array_push($gefilterdeSmoesjes, $smoesje);
		}
	}
}

echo count($gefilterdeSmoesjes);
echo count($smoesjes);
?>
<!DOCTYPE html>

<html>
	
	<head>
		
		<link rel="stylesheet" type="text/css" href="styles/collapsible.css">
		
	</head>
	
	<body>
		
		
		<div id="smoesjes">
			
			<?php
			for ($i = 0; $i < count($gefilterdeSmoesjes) ; ++$i)
			{
				$smoesjesOnderdeel = $gefilterdeSmoesjes[$i];
			?>


			<button class="collapsible"><p><?= $smoesjesOnderdeel["title"]?></p></button>
				<div class="smoesje">
						<img src="<?= $smoesjesOnderdeel["image"]?>" alt="img">
						<h1><?= $smoesjesOnderdeel["title"]?></h1>
						<p><?= $smoesjesOnderdeel["text"]?></p>
					</div>
			<?php
			}
			?>
		</div>
		
		<div id="filter">
			<a href= "collapsible.php?filter=te laat">te laat</a> 
			<a href= "collapsible.php?filter=school">school</a> 
			<a href= "collapsible.php?filter=ouders">ouders</a> 
			<a href= "collapsible.php?filter=vrienden">vrienden</a> 
			<a href= "collapsible.php?filter=afwezig">afwezig</a> 
			
		</div>
			<script>
			var coll = document.getElementsByClassName("collapsible");
			var i;

			for (i = 0; i < coll.length; i++) {
			coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.nextElementSibling;
			if (content.style.display === "block") {
				content.style.display = "none";
			} else {
				content.style.display = "block";
			}
		});
	}
			</script>
			
		
		
		
	</body>
	
</html>