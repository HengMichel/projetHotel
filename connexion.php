<?php
require_once "inc/database.php";
if(isset($_POST["submit"])){
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // etablir la connexion avec la bd
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM users WHERE email = ?");
    // executer la requete
    try {
        $request->execute(array($email));
        // recuperer le resultat de la requete qui est toujours un objet
        $userInfo = $request->fetch(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($userInfo);
        // echo "<pre>";
        if(empty($userInfo)){
            echo "utilisateur inconnu";
        }else{
            // verifier si le mdp est correct
            if(password_verify($password,$userInfo["password"])){
                // si l'utilisateur est un admin
                if($userInfo["role"] == "admin"){
                    header("Location: admin/admin.php");
                }else{
                    header("Location: user_home.php");
                }
            }else{
                echo "Ahh tu as oublié ton mot de passe ?";
            }
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }

}