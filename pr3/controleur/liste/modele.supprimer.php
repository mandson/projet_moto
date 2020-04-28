<?php
include('../../modele/classe/moto.class.php');
try {
  $base=new PDO('mysql:host=localhost;dbname=moto_db','root','');
} catch (PDOException $e){
    echo 'erreur:'.$e->getMessage();
}

$moto1 =new Moto();

if(isset($_GET['efface']))
{
    $moto1->supprimer($_GET['efface']);
    header('location:../../vue/listes/affichage.php');
}

?>
