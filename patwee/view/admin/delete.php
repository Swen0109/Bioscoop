</nav>
<div class="alert alert-dark text-center" role="alert">
    <strong>Delete</strong>  Weet je zeker dat je deze admin wilt ontmachtigen?
</div>
<form class="text-center"action="<?php echo URL ?>admin/destroy/<?php echo $id ?>">
<button class="btn btn-danger" type="submit">Verwijderen</button>
<a class="btn btn-info" class="" href="<?php echo URL ?>admin/index">annuleren</a>
</form>