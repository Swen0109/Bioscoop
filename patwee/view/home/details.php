  </nav>
  
<h1 class="text-center">Bekijk hier alle informatie</h1>
<div style="margin-left:1200px;">
  <a class="btn btn-info" href="<?php echo URL ?>bezoekers/create">Reserveren</a>
</div>

<?php foreach ($filmInfo as $info){?>

<h2 class="text-center"><?php echo $info['titel'];?></h2>

<div class="d-flex justify-content-around" style="height:190px;">
<ul class="list-group align-self-center" style="width:400px;">
  <li class="list-group-item">Duur:  <?php echo $info['speeltijd'];?></li>
  <li class="list-group-item">Genre:  <?php echo $info['genre'];?></li>
  <li class="list-group-item">Leeftijd:  <?php echo $info['leeftijd'];?></li>
  <li class="list-group-item">Prijs:  <?php echo $info['Prijs'];?> Euro</li>
</ul>

<img style="width:450px; height:550px;" src="<?= URL ?>public/afbeeldingen/films/<?php echo $info['afbeelding']?>" alt="Card image cap">

<div>
	<p class="text-end" style="width:400px;"><?php echo $info['beschrijving'];?></p>
</div>
</div>

	<div class="text-center" style="position:absolute; top:900px; left:480px; margin-bottom:95px;">
		<?php echo $info['trailer']?>
	</div>

  <?php } ?>  
