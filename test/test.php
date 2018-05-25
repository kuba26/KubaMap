<?php
		for ($i = 0; $i < count($gefilterdeSmoesjes) ; ++$i)
		{
			$smoesjesOnderdeel = $gefilterdeSmoesjes[$i];
		?>


		<button class="collapsible"><?$smoesjesOnderdeel["title"]?></button>
			<div class="smoesje">
					<img src="<?$smoesjesOnderdeel["image"]?>" alt="img">
					<h1><?$smoesjesOnderdeel["title"]?></h1>
					<p><?$smoesjesOnderdeel["text"]?></p>
				</div>
		<?php
		}
		?>









<?php
		for($i=0; $i < count($gefilterdeSmoesjes); ++$i)
		
		?>	




<?php

include_once("database.php");

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




<button class="collapsible">Title</button>
			<div class="smoesje">
					<img src="fotos/ketting.png" alt="img">
					<h1>Title</h1>
					<p>Praesent tincidunt</p>
				</div>