<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">

</head>

<body>

	<div class="menu" id="myTopnav">
		<ul>
			<li>
				<a href="Home.php" class="home active">Home</a>
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
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
	</div>

	<div style="padding-left:16px">
		<h2>Responsive Topnav Example</h2>
		<p>Resize the browser window to see how it works.</p>
	</div>

	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "menu") {
				x.className += " responsive";
			} else {
				x.className = "menu";
			}
		}
	</script>

</body>

</html>