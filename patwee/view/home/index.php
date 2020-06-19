<div class="container">
 <h1 class="text-center">Welkom bij Patwee!</h1>
<br>
<br>
<?php foreach ($films as $film){?>
 
 <div style="width:200px; height:500px; "class="card float-left">
  <img style="width:200px; height:300px;" class="card-img-top" src="<?= URL ?>public/afbeeldingen/films/<?php echo $film['afbeelding']?>" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title"><?php echo $film['titel'];?></h4>
   <a href="home/index" class="btn btn-primary">Details</a>
  </div>
</div>
  



<?php } ?>
</div>
