<ul>
     <li  class="navbar-brand align-self-center"><a href="<?= URL ?>bezoekers/create"><i class="fas fa-user-plus" style="color:#252525;"></i></a></li>
     </ul>
</nav>

<h1 class="text-center">Bekijk hier alle informatie</h1>
<div class="float-right">
  <a class="btn btn-info" href="<?php echo URL ?>bezoekers/create">Reserveren</a>
</div>

<?php foreach ($filmInfo as $info){?>

<h2 class="text-center"><?php echo $info['titel'];?></h2>
<br>

<div class="d-flex justify-content-around">

<ul class="list-group align-self-center" style="width:400px;">
  <li class="list-group-item">Duur:  <?php echo $info['speeltijd'];?></li>
  <li class="list-group-item">Genre:  <?php echo $info['genre'];?></li>
  <li class="list-group-item">Leeftijd:  <?php echo $info['leeftijd'];?></li>
</ul>

  <img style="width:450px; height:550px;" src="<?= URL ?>public/afbeeldingen/films/<?php echo $info['afbeelding']?>" alt="Card image cap">

<div>
	<p class="text-center" style="width:400px; min-height:550px;"><?php echo $info['beschrijving'];?></p>
</div>
</div>

<br><br>


	<div class="text-center">
		<?php echo $info['trailer']?>
	</div>

  <br><br>

  <p class="text-center">Deze Film kost: &nbsp;<?php echo $info['Prijs'];?>Euro Per Persoon</p>


<?php } ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>