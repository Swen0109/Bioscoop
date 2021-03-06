<?php

require(ROOT . "model/functieModel.php");

function index(){
	render("bezoekers/index", array('bezoekers' => getAllbezoekers(), 'id' => getId() ));
}

function create($id){
    render2("bezoekers/create", array('filmId' => getFilmsById($id), ["id" => $id]));
}

function store(){
    $naam=$_POST["naam"];
    $leeftijd=$_POST["leeftijd"];
    $telNummer=$_POST["telNummer"];
    createbezoeker($naam, $leeftijd, $telNummer);
    $data = array('snacks' => getAllSnacks());
    render("snackbar/snacksBestellen",  $data);
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

function required(){
	$nameErr = $leeftijdErr = $telNummerErr = "";
    $name = $leeftijd = $telNummer = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      if (empty($_POST["naam"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["naam"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }

      if (empty($_POST["leeftijd"])) {
        $leeftijdErr = "leeftijd is required";
      } else {
            $leeftijd = test_input($_POST["leeftijd"]);
            if($leeftijd <= 120){
                if (!is_numeric($leeftijd)){
                  $leeftijdErr = "You did not enter numbers only.";
                }
            }
            else{
                $leeftijdErr = "leeftijd can not be more than 3 digits.";
            }
      }

      if (empty($_POST["telNummer"])) {
        $telNummerErr = "tel-nummer is required";
      } else {
        $telNummer = test_input($_POST["telNummer"]);
      }

      if (empty($_POST["naam"]) || !preg_match("/^[a-zA-Z ]*$/",$name)){
        $data = array('nameErr' => $nameErr, 'leeftijdErr' => $leeftijdErr, 'telNummerErr' => $telNummerErr, 'filmId' => $id);
        render2("bezoekers/create", $data);
      }
      else if (empty($_POST["leeftijd"]) || !is_numeric($leeftijd) || $leeftijd > 120){
        $data = array('nameErr' => $nameErr, 'leeftijdErr' => $leeftijdErr, 'telNummerErr' => $telNummerErr, 'filmId' => $id);
        render2("bezoekers/create", $data);
      }
      else if (empty($_POST["telNummer"])){
        $data = array('nameErr' => $nameErr, 'leeftijdErr' => $leeftijdErr, 'telNummerErr' => $telNummerErr, 'filmId' => $id);
        render2("bezoekers/create", $data);
      }
      else {
        store();
      }
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}