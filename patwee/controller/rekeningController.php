<?php

require(ROOT . "model/functieModel.php");

function index(){
	render("rekening/index", array('rekeningen' => getAllRekeningen()));
}

function create(){
    $idFilm=$_POST["idFilm"];
    $idBezoeker=$_POST["idBezoekers"];
    $personen=$_POST["personen"];
    $kwaliteit=$_POST["kwaliteit"];
    $hoelaat=$_POST["hoelaat"];
    $zoetePopcorn=$_POST["1"];
    $zoutePopcorn=$_POST["2"];
    $mixedPopcorn=$_POST["3"];
    $nachosMetGuacamole=$_POST["4"];
    $nachosMetSalsa=$_POST["5"];
    $NachoDip=$_POST["6"];
    $laysNaturel=$_POST["7"];
    $laysFromage=$_POST["8"];
    $laysPaprika=$_POST["9"];
    $doritosSweetChilliPepper=$_POST["10"];
    $doritosRoulette=$_POST["11"];
    $doritosSpicySweetChilli=$_POST["12"];
    $mars=$_POST["13"];
    $snickers=$_POST["14"];
    $twix=$_POST["15"];
    $mms=$_POST["16"];
    $skittles=$_POST["17"];
    $maltesers=$_POST["18"];
    $cocaCola=$_POST["19"];
    $cocaColaZero=$_POST["20"];
    $cocaColaLight=$_POST["21"];
    $iceTeaBubbles=$_POST["22"];
    $iceTeaPeach=$_POST["23"];
    $fanta=$_POST["24"];
    $capriSun=$_POST["25"];
    $roosVicee=$_POST["26"];
    $appelsap=$_POST["27"];
    $fernandesCherry=$_POST["28"];
    $fernandesGreen=$_POST["29"];
    $fernandesSuper=$_POST["30"];
    $kidzMenu1=$_POST["31"];
    $kidzMenu2=$_POST["32"];
    $kidzMenu3=$_POST["33"];
    createRekening($idFilm, $idBezoeker, $personen, $kwaliteit, $hoelaat, $zoetePopcorn, $zoutePopcorn, $mixedPopcorn, $nachosMetGuacamole, $nachosMetSalsa, $NachoDip, $laysNaturel, $laysFromage, $laysPaprika, $doritosSweetChilliPepper, $doritosRoulette, $doritosSpicySweetChilli, $mars, $snickers, $twix, $mms, $skittles, $maltesers, $cocaCola, $cocaColaZero, $cocaColaLight, $iceTeaBubbles, $iceTeaPeach, $fanta, $capriSun, $roosVicee, $appelsap, $fernandesCherry, $fernandesGreen, $fernandesSuper, $kidzMenu1, $kidzMenu2, $kidzMenu3);
    store();
}

function store(){
    render("rekening/index", array('snacks' => getAllSnacks(), 'rekeningId' => getRekeningenById(getId()), 'id' => getId() ));
}