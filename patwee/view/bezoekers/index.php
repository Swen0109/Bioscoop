</nav>
<div class="container">

    <br><h1 class="text-center">Alle bezoekers</h1>
    
	<table style="position: absolute; left:500px; top:285px;">
		<tr class="thead" >
			<td>Klantnummer</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td>Naam</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td>Leeftijd</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
			<td>Tel-nummer</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<?php
			foreach($bezoekers as $bezoeker){
		?>
		<tr>
			<td class="text-center"><?php echo $bezoeker["id"] ?></td>
			<td></td>
			<td><?php echo $bezoeker["naam"] ?></td>
            <td></td>
			<td><?php echo $bezoeker["leeftijd"] ?></td>
            <td></td>
			<td><?php echo $bezoeker["telNummer"] ?></td>
            <td>&nbsp;&nbsp;&nbsp;</td>
			<td><a class="btn btn-info" href="<?php echo URL ?>bezoekers/update/<?php echo $bezoeker["id"] ?>">Wijzigen</a></td>
			<td><a class="btn btn-danger" href="<?php echo URL ?>bezoekers/delete/<?php echo $bezoeker["id"] ?>">Verwijderen</a></td>
		</tr>
		<?php
            }
		?>
</div>
