<br><h1>de snackbar</h1><br>
<div class="container d-inline-flex align-self-center" style="width:100%;">
    
		<?php
			foreach($snacks as $snack){
		?>
			<div class="card" style="width:300px; margin:0px 50px;">
            	<img class="card-img-top img-fluid align-self-center" src="<?php echo URL ?>public/afbeeldingen/snackbar/<?php echo $snack['type']?>/<?php echo $snack['afbeelding']?>" style="width:200px;">
            	<div class="card-body">
            	    <h4 class="card-title"><?php echo $snack["naam"]; ?></h4>
					<p class="card-text">prijs: <?php echo $snack["prijs"]; ?></p>
					<p class="card-text">type: <?php echo $snack["type"]; ?></p>
					<p class="card-text">beschrijving:<br><?php echo $snack["beschrijving"];?></p>
					<a class="btn btn-dark" href="<?php echo URL ?>snackbar/update/<?php echo $snack["id"] ?>">Wijzigen</a></td>
            	    <a class="btn btn-dark" href="<?php echo URL ?>snackbar/delete/<?php echo $snack["id"] ?>">Verwijderen</a>
            	</div>
        	</div>
			<br><br>
		<?php
			}
		?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>