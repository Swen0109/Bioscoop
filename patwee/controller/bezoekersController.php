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
    index();
}
