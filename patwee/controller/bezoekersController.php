<?php

require(ROOT . "model/functieModel.php");

function index()
{
	render("bezoekers/index", array('bezoekers' => getAllbezoekers()));
}

function create(){
    render2("bezoekers/create");
}

function store(){
    $naam=$_POST["naam"];
    $leeftijd=$_POST["leeftijd"];
    $telNummer=$_POST["telNummer"];
    createbezoeker($naam, $leeftijd, $telNummer);
    render("snackbar/snacksBestellen", array('snacks' => getAllSnacks()));
}

function update($id){
	$bezoeker=getbezoeker($id);
	render("bezoekers/update", array('bezoekers' => $bezoeker));
}

function edit($id){
    updatebezoeker($_POST,$id);
    index();
}

function delete($id){
    render("bezoekers/delete", ["id" => $id]);
}

function destroy($id){
    deletebezoeker($id);
    index();
}
