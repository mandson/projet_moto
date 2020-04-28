<?php
include('../connexion.php');
include('../classe/moto.class.php');
$base;
//  echo $_POST['id_marque'],$_POST['modele'],$_POST['cylindre'],$_POST['categorie'],$_POST['num_serie'],$_POST['prix'];
    // id_marque 	modele 	cylindre 	categorie 	num_serie 	prix 
$moto1= new Moto();
if(isset($_POST)){
$moto1->enregistrer($_POST['id_marque'],$_POST['modele'],$_POST['cylindre'],$_POST['categorie'],$_POST['num_serie'],$_POST['prix']);
echo'enregister';
}


?>