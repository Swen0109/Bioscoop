<?php

function getAllSnacks(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM snackbar";
	$statement = $conn->prepare($sql);
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

function getFilmsById($id){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM films WHERE id = :id";
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