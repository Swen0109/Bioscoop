<h1 class="text-center">Bezoeker gegevens wijzigen</h1>
<br>
<?php foreach($bezoekers as $bezoeker){
    ?>
    <form class="text-center" name="update" method="post" action="<?php echo URL?>bezoekers/edit/<?php echo $bezoeker["id"] ?>"><br><br>
	<input type="text" name="naam" value="<?php echo $bezoeker["naam"]?>"></input><br><br>
	<input type="text" name="leeftijd" value="<?php echo $bezoeker["leeftijd"]?>"></input><br><br>
    <input type="text" name="telNummer" value="<?php echo $bezoeker["telNummer"]?>"></input><br><br>
    <input type="submit">
    </form>
    
<?php } ?>