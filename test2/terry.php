<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once("database.php");


$mijnFilter = $_GET["filter"];

$gefilterdeGerechten = array();

for ($i =0; $i < count($continenten); ++$i)
{
	$continent = $continenten[$i];
	$categories = $continent["categories"];
	for ($j =0; $j < count($categories); ++$j)
	{
		$categoriename = $categories[$j];
		if($categoriename == $mijnFilter)
		{
			array_push($gefilterdeGerechten, $continent);
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/filter.css">
	
</head>
<body>
	
	<div id="gridContainer6">
	
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
		
		<div id="filter">

			<a href="terry.php?filter=Europa">Europa</a></li>
			<a href="terry.php?filter=Noord-Amerika">Noord-Amerika</a>
			<a href="terry.php?filter=Zuid-Amerika">Zuid-Amerika</a>
			<a href="terry.php?filter=Afrika">Afrika</a>
			<a href="terry.php?filter=Azie">Azie</a>
			<a href="terry.php?filter=Oceanie">Oceanie</a>
			</div>
	
		<div id="continent">

			
			<?php
			for ($i = 0; $i < count($gefilterdeGerechten) ; ++$i)
			{
				$gerechtOnderdeel = $gefilterdeGerechten[$i];
			?>
			<div id="gerecht">
				
				<h1>
					<?= $gerechtOnderdeel["title"]?>
				</h1>
				<img src="<?= $gerechtOnderdeel["image"]?>">
				<p>
					<?= $gerechtOnderdeel["text"]?>
				</p>
			</div>
			
		</div>
	<?php
			}
	?>
	
	</div>
		
</body>
</html>