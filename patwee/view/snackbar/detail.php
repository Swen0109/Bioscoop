<?php foreach ($snack as $snacks){?>
<br>
<div class="text-center">
  <img class="card-img-top img-fluid align-self-center" src="<?php echo URL ?>public/afbeeldingen/snackbar/<?php echo $snacks['type']?>/<?php echo $snacks['afbeelding']?>" style="width:200px;">
      <div class="card-body text-center">
        <h4 class="card-title"><?php echo $snacks["naam"]; ?></h4>
		<p class="card-text">Prijs: <?php echo $snacks["prijs"]; ?></p>
		<p class="card-text">Type: <?php echo $snacks["type"]; ?></p>
		<p class="card-text">Beschrijving: <?php echo $snacks["beschrijving"]; ?></p>
      </div>
</div>

<?php } ?>
