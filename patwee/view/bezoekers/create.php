</nav>
<?php

?>
<body class="bg-warning">
	<img src="<?php echo URL ?>public/afbeeldingen/logo/patwee_logo_black.png?>" style="width:150px; position: absolute; left:720px; top:115px;">
	<div class="card rounded-lg shadow-lg" style="width: 400px; height: 430px; position: absolute; left:570px; top:205px;">
		<h3 class="text-center">Registreer je eerst voordat je een film kunt bestellen:</h3>
		<form class="card-body text-center" style="width: 300px;" name="create" method="post" action="<?php echo URL ?>bezoekers/required">
			<span class="text-danger float-left font-weight-bold"  style="font-size: 13px">* required</span><br><br>
			<input class="text-center" style="width: 300px; height: 40px;" type="text" name="naam" placeholder="naam" value="<?php echo $name;?>"></input>
			<span class="text-danger float-left font-weight-bold"  style="font-size: 13px">* <?php echo $nameErr?></span><br>
			<input class="text-center" style="width: 300px; height: 40px;" type="text" name="leeftijd" placeholder="leeftijd" value="<?php echo $leeftijd;?>"></input>
			<span class="text-danger float-left font-weight-bold"  style="font-size: 13px">* <?php echo $leeftijdErr?></span><br>
			<input class="text-center" style="width: 300px; height: 40px;" type="text" name="telNummer" placeholder="tel-nummer" value="<?php echo $telNummer;?>"></input>
			<span class="text-danger float-left font-weight-bold" style="font-size: 13px">* <?php echo $telNummerErr?></span><br><br>
			<input class="" type="hidden" name="idBezoekers" value="<?php echo $idBezoekers?>"></input>
			<input class="" type="hidden" name="idFilm" value="<?php echo $filmId ?>"></input>
			<input class="text-center btn btn-warning shadow-lg" style="width: 200px; height: 40px;" type="submit">
		</form>
	</div>
	<p style="position: absolute; left:720px; top:645px;"><a>naar </a><a href="<?= URL ?>home/index" style="color: #616771;">patwee.nl</a></p>
</body>
</html>