<?php

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

?>
<!DOCTYPE html>
<html>
	
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/gridContainer2.css">
		<link rel="stylesheet" type="text/css" href="styles/collapsible.css">
		<link rel="stylesheet" type="text/css" href="styles/menu.css">
		<link rel="stylesheet" type="text/css" href="styles/footer.css">
		<link rel="stylesheet" type="text/css" href="styles/gridContainer2.css">
		
		<title>Smoesjes.be</title>
	</head>
	
	<body>
		<div id="gridContainer2">
			
			<div id="menu">
				<ul>
					<li>
						<a href="Home.php" class="home">Home</a>
					</li>
					<li>
						<a href="smoesjes.php?filter=alle" class="smoesjes">Smoesjes</a>
					</li>
					<li>
						<a href="voorstellen.php" class="voorstellen">Voorstellen</a>
					</li>
					<li>
						<a href="contact.php" class="contact">Contact</a>
					</li>
			</ul>
			</div>
			
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
			<a href= "smoesjes.php?filter=alle">alle</a>
			<a href= "smoesjes.php?filter=makkelijk">makkelijk</a>
			<a href= "smoesjes.php?filter=matige moeilijkheid">matige moeilijkheid</a>
			<a href= "smoesjes.php?filter=moeilijk">moeilijk</a>
			<a href= "smoesjes.php?filter=te laat">te laat</a> 
			<a href= "smoesjes.php?filter=school">school</a> 
			<a href= "smoesjes.php?filter=ouders">ouders</a> 
			<a href= "smoesjes.php?filter=vrienden">vrienden</a> 
			<a href= "smoesjes.php?filter=afwezig">afwezig</a> 
			
			
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
			
			
			<div id="footer">
				<a href="contact.php">Klik hier voor contact</a>
				<p>
					Powered by Jakub Luykx
				</p>
			</div>
			
		</div>
	</body>
	
</html>