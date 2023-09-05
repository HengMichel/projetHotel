<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]."/projetHotel/inc/database.php";
if(isset($_POST["book"])){
    // récuprer les infos
    $idRoom = htmlspecialchars($_POST["id_room"]);
    $startDate = htmlspecialchars($_POST["start_date"]);
    $endDate = htmlspecialchars($_POST["end_date"]);
    $price = htmlspecialchars($_POST["price"]);
    // convertir en date en seconde avec strtotime depuis le 1janvier 1960
    $startDate = strtotime($startDate);
    $endDate = strtotime($endDate);

    $duration = $endDate - $startDate;

    $nbDays = $duration / 86400;

    echo "le nombre de jours est : $nbDays";
    die;

    // se connecter à la bd
    $db = dbConnexion();

    // préparer la requête pour vérifier si la chambre est dispo entre la date de départ et la date de fin
    $resquet = $db->prepare("SELECT * FROM bookings WHERE room_id = ? AND booking_start_date < ? AND booking_end_date> ?");

    // executer la requete
    try {
        $request->execute(array($idRoom, $startDate, $endDate));
        // recuperer le résultat
        $books = $request->fetch();
        if(empty($books)){
            if($startDate<$endDate){
                //  preparer la requete pour reserver la chambre
                $request = $db->prepare("INSERT INTO `bookins`(`booking_start_date`,`booking_end_date`,`user_id`, `room_id`, `booking_price`, `booking_state`) VALUES ('?,?,?,?,?,?')");
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}