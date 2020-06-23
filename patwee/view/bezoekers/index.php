<div class="container">

    <br><h1 class="text-center">alle bezoekers</h1>
    
	<table style="position: absolute; left:500px; top:285px;">
		<tr class="thead" >
			<td>id</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td>naam</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td>leeftijd</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
			<td>tel-nummer</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<?php
			foreach($bezoekers as $bezoeker){
		?>
		<tr>
			<td><?php echo $bezoeker["id"] ?></td>
			<td></td>
			<td><?php echo $bezoeker["naam"] ?></td>
            <td></td>
			<td><?php echo $bezoeker["leeftijd"] ?></td>
            <td></td>
			<td><?php echo $bezoeker["telNummer"] ?></td>
            <td>&nbsp;&nbsp;&nbsp;</td>
			<td><a class="btn btn-dark" href="<?php echo URL ?>bezoekers/update/<?php echo $bezoeker["id"] ?>">Wijzigen</a></td>
			<td><a class="btn btn-dark" href="<?php echo URL ?>bezoekers/delete/<?php echo $bezoeker["id"] ?>">Verwijderen</a></td>
		</tr>
		<?php
            }
		?>
</div>