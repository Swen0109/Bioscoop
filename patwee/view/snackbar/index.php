<br><h1 class="text-center">de snackbar</h1><br>
<div class="container d-flex flex-wrap justify-content-between" style="width:100%;">
    
		<?php
			foreach($snacks as $snack){
		?>
			<div class="card" style="width:300px; margin:10px 0px;">
            	<img class="card-img-top img-fluid align-self-center" src="<?php echo URL ?>public/afbeeldingen/snackbar/<?php echo $snack['type']?>/<?php echo $snack['afbeelding']?>" style="width:200px; ">
            	<div class="card-body">
            	    <h4 class="card-title"><?php echo $snack["naam"]; ?></h4>
					<p class="card-text">prijs: <?php echo $snack["prijs"]; ?></p>
					<p class="card-text">type: <?php echo $snack["type"]; ?></p>
					<p class="card-text">beschrijving:<br><?php echo $snack["beschrijving"];?></p> 
            	</div>
        	</div>
			<br><br>
		<?php
			}
		?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
