	<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/gridContainer3.css">
		<link rel="stylesheet" type="text/css" href="styles/menu.css">
		<link rel="stylesheet" type="text/css" href="styles/mail.css">
		<link rel="stylesheet" type="text/css" href="styles/footer.css">
		
		<title>Smoesjes.be</title>
	</head>
	<body>
		
		<div id="gridContainer3">
		
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
			
			<div id="intro">
				<p>
					Op deze site kan u nieuwe smoesjes indienen. Als ze goed genoeg zijn komen ze op de site.
				</p>
			</div>
			
			<div class="mail">
		<form action="action_page.php" method="get">

			<label for="adress">Your e-mailadress</label>
			<input type="text" id="adress" name="e-mailadress" placeholder="e-mailadress"> <br>

			<label for="title">Titel van je smoesje</label>
			<input type="text" id="title" name="titel" placeholder="De titel van je smoesje..."> <br>

			<label for="smoesje">Je smoesje</label>
			<textarea id="smoesje" name="smoesje" placeholder="Je smoesje..."></textarea> <br>

			<input type="submit" value="Submit">

		</form>
			</div>

			<div id="footer">
					<a href="contact.php">Klik hier voor contact</a>
					<p>
						Powered by Jakub Luykx
					</p>
				</div>
		</div>	
			
	</body>
	</html>