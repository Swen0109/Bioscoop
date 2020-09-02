<h1 class="text-center">admin gegevens wijzigen</h1>
<br>
<?php foreach($getAdmin as $admin){
    ?>
    <form class="text-center" name="update" method="post" action="<?php echo URL?>admin/edit/<?php echo $admin["id"] ?>"><br><br>
    <label>username:</label>
	<input type="text" name="username" value="<?php echo $admin["username"]?>"></input><br><br>
    <label>wachtwoord:</label>
	<input type="password" name="wachtwoord" value="<?php echo $admin["wachtwoord"]?>"></input><br><br>
    <label>bevestig wachtwoord:</label>
    <input type="password" name="wachtwoord" value="<?php echo $admin["wachtwoord"]?>"></input><br><br>
    <input type="submit">
    </form>
    
<?php } ?>