<!DOCTYPE html>

<html>
	
	<head>
		
		<link rel="stylesheet" type="text/css" href="styles/collapsible.css">
		
	</head>
	
	<body>
		
		
		<button class="collapsible">Open Collapsible</button>
			<div class="smoesje">
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
			
		
		
		
	</body>
	
</html>