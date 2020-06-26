</nav>
<div class="container">
 <h1 class="text-center">Welkom bij Patwee!</h1>
<br>
<br>

<?php foreach ($films as $film){?>
 
 <div style="width:200px; height:450px;" class="card float-left float-left text-center">
  <img style="width:200px; height:300px;" class="card-img-top" src="<?= URL ?>public/afbeeldingen/films/<?php echo $film['afbeelding']?>" alt="Card image cap">
  <div class="card-body">
    <p class="card-title text-center"><?php echo $film['titel'];?></p>
    <a style="position:absolute; top:400px; left:60px; margin-bottom:95px;" href="details/<?php echo $film['id']?>" class="btn btn-primary">Details</a>
  </div>
</div>
 
<?php } ?>
</div>

<br>
<br>
<br>
<br>
<br>
