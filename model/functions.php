<?php
require_once "../inc/database.php";

function  hotelList(){
    //  se connecter a la db (database) ou bd (base de données)
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM hotels");
    // executer la requete
    $listHotel = null;
    try {
        $request->execute();
        // récuperer le resultat dans un tableau
        $listHotel = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch ( PDOException $e) {
        echo $e->getMessage();
    }
    return $listHotel;
}