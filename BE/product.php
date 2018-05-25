<?php

  include_once("database.php");

  $productID = $_GET["id"];
  $productItem = $products[$productID];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/mainLayout.css">
		<link rel="stylesheet" type="text/css" href="styles/productLayout.css">
		<link rel="stylesheet" type="text/css" href="styles/menu.css">

		<title>
			De bert & Ernie webshop
		</title>
	</head>
	<body class="product">
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
				<div id="imageTitle" style="background-image: url('images/<?= $productItem["image"]; ?>')">
					<div>
						<h1>
<?= $productItem["title"]; ?>
						</h1>
					</div>
				</div>
				
				<div id="productSpecifications">
					<p>
						product specificaties:
					</p>
					<ul>
						<li>prijs: 25,00 &euro;</li>
						<li>spec 2</li>
						<li>spec 3</li>
						<li>spec 4</li>
						<li>spec 5</li>
					</ul>
				</div>
				
				<div id="productDescription">
					<p>
<?= $productItem["text"]; ?>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>