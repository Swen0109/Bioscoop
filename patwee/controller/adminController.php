<?php

require(ROOT . "model/functieModel.php");

function index(){
	render3("admin/index", array('admins' => getAllAdmins()));
}

function create(){
    render2("admin/login",array());
}

function store(){
    $ingelogd = false;
    foreach(getAdmin1() as $info){
        $username1 = $info["username"];
        $wachtwoord1 = $info["wachtwoord"];
    }
    foreach(getAdmin2() as $info){
        $username2 = $info["username"];
        $wachtwoord2 = $info["wachtwoord"];
    }
    if($_POST["username"] == $username1 && $_POST["wachtwoord"] == $wachtwoord1){
        $data = array('ingelogd' => "true", 'username' => $username1, 'admins' => getAllAdmins());
        render3("admin/index", $data);
    }
    else if($_POST["username"] == $username2 && $_POST["wachtwoord"] == $wachtwoord2 ){
        $data = array('ingelogd' => "true", 'username' => $username2, 'admins' => getAllAdmins());
        render3("admin/index", $data);
    }
    else{
        $data= array("loginErr" => "uw gebruikersnaam en of wachtwoord is oncorrect");
        render2("admin/login", $data);
    }
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