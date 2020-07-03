    <a>user:</a>
</nav>
<br><h2 class="text-center">Admin control page</h2>
<?php
if($ingelogd == true){ //de hele pagina code komt hier ?>
    <div class="d-flex justify-content-around">
        <div class="bg-secondary rounded text-center" style="width: 32%;"><?php //aantal reserveringen, aantal bezoekers (en mogelijk ook nog aantal verdiend)?>
            <?php echo "hello"?>
        </div>


        <div class="bg-secondary rounded text-center align-self-center" style="width: 32%;"><?php //alle mensen met admin toegang?>
                <table style="position: absolute; left:600px; top:355px;">
		            <tr class="thead" >
		            	<td>Id</td>
		            	<td>&nbsp;&nbsp;&nbsp;</td>
		            	<td>Username</td>
		            </tr>
		            <?php
		            	foreach($admins as $admin){
		            ?>
		                <tr>
		            	    <td class="text-center"><?php echo $admin["id"] ?></td>
		            	    <td></td>
		            	    <td><?php echo $admin["username"] ?></td>
		            	    <td><a class="btn btn-info" href="<?php echo URL ?>admin/update/<?php echo $admin["id"] ?>">Wijzigen</a></td>
		            	    <td><a class="btn btn-danger" href="<?php echo URL ?>admin/delete/<?php echo $admin["id"] ?>">Verwijderen</a></td>
		                </tr>
                    <?php } ?><br><br><br><br><br><br><br><br><br>
                </table>
        </div>


        <div class="bg-secondary rounded text-center" style="width: 32%;"><?php //3 buttons 1 voor films toevoegen 1 voor snacks toevoegen en 1 voor admin toevoegen ?>
            <?php echo "hello"?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
<?php }
else{
    create();
}
?>