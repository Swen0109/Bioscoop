<?php

function getAllSnacks(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM snackbar";
	$statement = $conn->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}

function getSnacksById($id){
	$conn = openDatabaseConnection();
	$sql = "SELECT * FROM snackbar WHERE id = :id";
	$statement = $conn->prepare($sql);
	$statement->bindParam("id", $id);
	$statement->execute();
	$conn = null;

	return $statement->fetchAll();
}

function getAllbezoekers(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM bezoekers";
	$statement = $conn->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}

function getAllfilms(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM films";
	$statement = $conn->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}

function getAllRekeningen(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM reservering";
	$statement = $conn->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}

function getFilmsById($id){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM films WHERE id = :id";
	$statement = $conn->prepare($sql);
	$statement->bindParam("id", $id);
	$statement->execute();
	$conn = null;

	return $statement->fetchAll();
}

function getReserveringById($id){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM reservering WHERE id = :id";
	$statement = $conn->prepare($sql);
	$statement->bindParam("id", $id);
	$statement->execute();
	$conn = null;

	return $statement->fetchAll();
}

function getAllreserveringen(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM reservering";
	$statement = $conn->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}

function getbezoeker($id){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT * FROM bezoekers WHERE id = :id");
	$statement->bindParam(":id", $id);
	$statement->execute();
	$conn = null;
	return $statement->fetchAll();
}

function createbezoeker($naam, $leeftijd, $telNummer){
    $conn=openDatabaseConnection();
    $statement=$conn->prepare("INSERT INTO bezoekers (naam, leeftijd, telNummer) VALUES (:naam, :leeftijd, :telNummer)");
    $statement->bindParam(":naam" , $naam);
	$statement->bindParam(":leeftijd" , $leeftijd);
	$statement->bindParam(":telNummer" , $telNummer);
    $statement->execute();
}

function updateBezoeker($data, $id){
	$conn=openDatabaseConnection();
	$statement = $conn->prepare("UPDATE bezoekers SET naam = :naam, leeftijd = :leeftijd, telNummer = :telNummer WHERE id = :id");
	$statement->bindParam(":id", $id);
	$statement->bindParam(":naam" , $data["naam"]);
	$statement->bindParam(":leeftijd" , $data["leeftijd"]);
	$statement->bindParam(":telNummer" , $data["telNummer"]);
    $statement->execute();
}

function deletebezoeker($id){
    $conn = openDatabaseConnection();
	$statement = $conn->prepare("DELETE FROM bezoekers WHERE id = :id ");
	$statement->bindParam(":id",$id);
	$statement->execute();
}

function createRekening($idFilm, $idBezoeker, $personen, $kwaliteit, $hoelaat, $zoetePopcorn, $zoutePopcorn, $mixedPopcorn, $nachosMetGuacamole, $nachosMetSalsa, $NachoDip, $laysNaturel, $laysFromage, $laysPaprika, $doritosSweetChilliPepper, $doritosRoulette, $doritosSpicySweetChilli, $mars, $snickers, $twix, $mms, $skittles, $maltesers, $cocaCola, $cocaColaZero, $cocaColaLight, $iceTeaBubbles, $iceTeaPeach, $fanta, $capriSun, $roosVicee, $appelsap, $fernandesCherry, $fernandesGreen, $fernandesSuper, $kidzMenu1, $kidzMenu2, $kidzMenu3){
    $conn=openDatabaseConnection();
    $statement=$conn->prepare("INSERT INTO reservering (idFilm, idBezoeker, personen, kwaliteit, hoelaat, zoetePopcorn, zoutePopcorn, mixedPopcorn, nachosMetGuacamole, nachosMetSalsa, NachoDip, laysNaturel, laysFromage, laysPaprika, doritosSweetChilliPepper, doritosRoulette, doritosSpicySweetChilli, mars, snickers, twix, mms, skittles, maltesers, cocaCola, cocaColaZero, cocaColaLight, iceTeaBubbles, iceTeaPeach, fanta, capriSun, roosVicee, appelsap, fernandesCherry, fernandesGreen, fernandesSuper, kidzMenu1, kidzMenu2, kidzMenu3) VALUES (:idFilm, :idBezoeker, :personen, :kwaliteit, :hoelaat, :zoetePopcorn, :zoutePopcorn, :mixedPopcorn, :nachosMetGuacamole, :nachosMetSalsa, :NachoDip, :laysNaturel, :laysFromage, :laysPaprika, :doritosSweetChilliPepper, :doritosRoulette, :doritosSpicySweetChilli, :mars, :snickers, :twix, :mms, :skittles, :maltesers, :cocaCola, :cocaColaZero, :cocaColaLight, :iceTeaBubbles, :iceTeaPeach, :fanta, :capriSun, :roosVicee, :appelsap, :fernandesCherry, :fernandesGreen, :fernandesSuper, :kidzMenu1, :kidzMenu2, :kidzMenu3)");
	$statement->bindParam(":idFilm" , $idFilm);
	$statement->bindParam(":idBezoeker" , $idBezoeker);
	$statement->bindParam(":personen" , $personen);
	$statement->bindParam(":kwaliteit" , $kwaliteit);
	$statement->bindParam(":hoelaat" , $hoelaat);
	$statement->bindParam(":zoetePopcorn" , $zoetePopcorn);
	$statement->bindParam(":zoutePopcorn" , $zoutePopcorn);
	$statement->bindParam(":mixedPopcorn" , $mixedPopcorn);
	$statement->bindParam(":nachosMetGuacamole" , $nachosMetGuacamole);
	$statement->bindParam(":nachosMetSalsa" , $nachosMetSalsa);
	$statement->bindParam(":NachoDip" , $NachoDip);
	$statement->bindParam(":laysNaturel" , $laysNaturel);
	$statement->bindParam(":laysFromage" , $laysFromage);
	$statement->bindParam(":laysPaprika" , $laysPaprika);
	$statement->bindParam(":doritosSweetChilliPepper" , $doritosSweetChilliPepper);
	$statement->bindParam(":doritosRoulette" , $doritosRoulette);
	$statement->bindParam(":doritosSpicySweetChilli" , $doritosSpicySweetChilli);
	$statement->bindParam(":mars" , $mars);
	$statement->bindParam(":snickers" , $snickers);
	$statement->bindParam(":twix" , $twix);
	$statement->bindParam(":mms" , $mms);
	$statement->bindParam(":skittles" , $skittles);
	$statement->bindParam(":maltesers" , $maltesers);
	$statement->bindParam(":cocaCola" , $cocaCola);
	$statement->bindParam(":cocaColaZero" , $cocaColaZero);
	$statement->bindParam(":cocaColaLight" , $cocaColaLight);
	$statement->bindParam(":iceTeaBubbles" , $iceTeaBubbles);
	$statement->bindParam(":iceTeaPeach" , $iceTeaPeach);
	$statement->bindParam(":fanta" , $fanta);
	$statement->bindParam(":capriSun" , $capriSun);
	$statement->bindParam(":roosVicee" , $roosVicee);
	$statement->bindParam(":appelsap" , $appelsap);
	$statement->bindParam(":fernandesCherry" , $fernandesCherry);
	$statement->bindParam(":fernandesGreen" , $fernandesGreen);
	$statement->bindParam(":fernandesSuper" , $fernandesSuper);
	$statement->bindParam(":kidzMenu1" , $kidzMenu1);
	$statement->bindParam(":kidzMenu2" , $kidzMenu2);
	$statement->bindParam(":kidzMenu3" , $kidzMenu3);
	$statement->execute();
}

function getId(){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT max(id) FROM reservering");
	$statement->execute();
	$conn = null;
	return $statement->fetchAll();
}

function getAdmin1(){
    $conn = openDatabaseConnection();
    $statement = $conn->prepare("SELECT * FROM admins WHERE id = 1");
    $statement->execute();
    $conn = null;
    return $statement->fetchAll();
}

function getAdmin2(){
    $conn = openDatabaseConnection();
    $statement = $conn->prepare("SELECT * FROM admins WHERE id = 2");
    $statement->execute();
    $conn = null;
    return $statement->fetchAll();
}

function getAllAdmins(){
    $conn = openDatabaseConnection();
    $statement = $conn->prepare("SELECT * FROM admins");
    $statement->execute();
    $conn = null;
    return $statement->fetchAll();
}

function updateAdmin($data, $id){
	$conn=openDatabaseConnection();
	$statement = $conn->prepare("UPDATE bezoekers SET naam = :naam, leeftijd = :leeftijd, telNummer = :telNummer WHERE id = :id");
	$statement->bindParam(":id", $id);
	$statement->bindParam(":naam" , $data["naam"]);
	$statement->bindParam(":leeftijd" , $data["leeftijd"]);
	$statement->bindParam(":telNummer" , $data["telNummer"]);
    $statement->execute();
}

function deleteAdmin($id){
    $conn = openDatabaseConnection();
	$statement = $conn->prepare("DELETE FROM bezoekers WHERE id = :id ");
	$statement->bindParam(":id",$id);
	$statement->execute();
}
