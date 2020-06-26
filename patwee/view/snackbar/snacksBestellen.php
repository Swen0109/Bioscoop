<br><h1 class="text-center">De Snackbar</h1><br>
<form class="text-center" method="post" action="<?php echo URL ?>rekening/store">
<div class="container d-flex flex-wrap justify-content-between" style="width:100%;">
		<?php
			foreach($snacks as $snack){
		?>
			<div class="card text-center" style="width:300px; margin:10px 0px;">
            	<img class="card-img-top img-fluid align-self-center" src="<?php echo URL ?>public/afbeeldingen/snackbar/<?php echo $snack['type']?>/<?php echo $snack['afbeelding']?>" style="width:200px; ">
            	<div class="card-body">
            	    <h4 class="card-title"><?php echo $snack["naam"]; ?></h4>
					<p class="card-text">prijs: <?php echo $snack["prijs"]; ?></p>
                    <input type="text" name="idFilm" value="1" class="d-none"></input>
                    <input type="text" name="idBezoekers" value="1" class="d-none"></input>
                    <input type="text" name="personen" value="2" class="d-none"></input>
                    <input type="text" name="hoelaat" value="2020-06-26 00:00:00" class="d-none"></input>
                    <input type="text" name="kwaliteit" value="2D" class="d-none"></input>
                    <select name="<?php echo $snack['id']?>">
                    <option value="0" selected>aantal</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 
            	</div>
        	</div>
			<br><br>
		<?php
			}
		?>
        
</div>
<input type="submit">
        </form>
<br><br><br><br><br><br>