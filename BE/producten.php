<?php

include_once("database.php");

$mijnFilter = $_GET["filter"];

$gefilterdeProducten = array();

for ($i =0; $i < count($products); ++$i)
{
	$product = $products[$i];
	$categorieen = $product["categories"];
	for ($j =0; $j < count($categorieen); ++$j)
	{
		$categorienaam = $categorieen[$j];
		if($categorienaam == $mijnFilter)
		{
			array_push($gefilterdeProducten, $product);
		}
	}
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/mainLayout.css">
		<link rel="stylesheet" type="text/css" href="styles/productenOverzichtLayout.css">
		<link rel="stylesheet" type="text/css" href="styles/menu.css">
		<title>
			De bert & Ernie webshop
		</title>
	</head>
	<body class="producten">
		<div id="menu">
			<ul>
				<li>
					<a href="index.php" class="home">Home</a>
				</li>
				<li>
					<a href="producten.php" class="producten">Producten</a>
				</li>
			</ul>
		</div>

		<div id="gridContainer">
			<div id="menuplaceholder">
			</div>
			<div id="title">
				<h1>De Bert & Ernie Shop</h1>
			</div>
			<div id="subtitle">
				<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nulla risus, interdum faucibus nibh at, placerat pulvinar turpis.
				</p>
			</div>
			
			
			<div id="content">
				<div id="filter">
					<p>
						filter products:
					</p>
					<ul>
						<li>
							<a href="producten.php">All Products</a>
						</li>
						<li>
							<a href="producten.php?cat=1">Bernies</a>
						</li>
						<li>
							<a href="producten.php?cat=2">Ernies</a>
						</li>
					</ul>
				</div>
				<div id="products">
          
<?php
for ($i = 0; $i < count($gefilterdeProducten); ++$i)
{
  $productItem = $gefilterdeProducten[$i];
?>
          
					<div class = "ProductItem">
						<a href="product.php?id=<?= $i; ?>">
						<h1>
<?= $productItem["title"]; ?>
						</h1>
						<div>
							<img src="images/<?= $productItem["image"]; ?>" alt="Bert">
							<p>
<?= $productItem["text"]; ?>
							</p>
						</div>
						</a>
					</div>
<?php
}
?>
          
          
				</div>
			</div>
		</div>
	</body>
</html>