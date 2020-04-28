<?php
session_start();
if(isset($_POST['mail']) && isset($_POST['passe']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'moto_db';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['mail'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['passe']));
    
    if($email !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              email = '".$email."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $email;
           header('Location:    menu.php');
        }
        else
        {
           header('Location:erreur.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location:erreur.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location:login.html');
}
mysqli_close($db); // fermer la connexion
?>