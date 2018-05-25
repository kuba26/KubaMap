
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="styles/menu.css">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/footer.css">
		<link rel="stylesheet" type="text/css" href="styles/collapsible.css">
		
	</head>
	
	<body>
		<div id="gridContainer2">
			
			<div id="menu">
				<ul>
					<li>
						<a href="Home.php" class="home">Home</a>
					</li>
					<li>
						<a href="smoesjes.php" class="smoesjes">Smoesjes</a>
					</li>
					<li>
						<a href="voorstellen.php" class="voorstellen">Voorstellen</a>
					</li>
					<li>
						<a href="contact.php" class="contact">Contact</a>
					</li>
			</ul>
			</div>
			
			
			
			<button class="collapsible">Open Collapsible</button>
			<div id="smoesje">
					<img src="" alt="img">
					<h1>Title</h1>
					<p>Praesent tincidunt</p>
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
					Powered by <a href="https://www.w3schools.com/w3css/default.asp">w3.css</a>
				</p>
			</div>
			
		</div>
	</body>
	
</html>