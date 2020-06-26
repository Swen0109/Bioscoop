</nav>
<div class="alert alert-dark text-center" role="alert">
    <strong>Delete</strong>  Weet je zeker dat je deze bezoeker wilt verwijderen?
</div>
<form class="text-center"action="<?php echo URL ?>bezoekers/destroy/<?php echo $id ?>">
<button class="btn btn-danger" type="submit">Verwijderen</button>
<a class="btn btn-info" class="" href="<?php echo URL ?>bezoekers/index">annuleren</a>
</form>