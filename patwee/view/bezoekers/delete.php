<div class="alert alert-dark" role="alert">
    <strong>delete</strong> weet je zeker dat je deze bezoeker wilt verwijderen?
</div>
<form  action="<?php echo URL ?>bezoekers/destroy/<?php echo $id ?>">
<button class="btn btn-warning shadow-lg" type="submit">Verwijderen</button>
<a class="btn btn-warning shadow-lg" href="<?php echo URL ?>home/index/">annuleren</a>
</form>