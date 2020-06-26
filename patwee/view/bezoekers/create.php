</nav>
<body class="bg-warning">
<img src="<?php echo URL ?>public/afbeeldingen/logo/patwee_logo_black.png?>" style="width:150px; position: absolute; left:720px; top:145px;">
<div class="card rounded-lg shadow-lg" style="width: 400px; height: 400px; position: absolute; left:570px; top:235px;">
<h3 class="text-center">Registreer je eerst voordat je een film kunt bestellen:</h3>
<form class="card-body text-center" style="width: 300px;" name="create" method="post" action="<?php echo URL ?>bezoekers/store"><br>
	<input class="text-center" style="width: 300px; height: 40px;" type="text" name="naam" placeholder="naam" required></input><br><br>
	<input class="text-center" style="width: 300px; height: 40px;" type="text" name="leeftijd" placeholder="leeftijd" required></input><br><br>
    <input class="text-center" style="width: 300px; height: 40px;" type="text" name="telNummer" placeholder="tel-nummer" required></input><br><br>
<input class="text-center btn btn-warning shadow-lg" style="width: 200px; height: 40px;" type="submit">
</form>
</div>
<p style="position: absolute; left:720px; top:645px;"><a>naar </a><a href="<?= URL ?>home/index" style="color: #616771;">patwee.nl</a></p>
</body>
</html>