<?php
include('../../controleur/connexion.php');
include('../../controleur/classe/moto.class.php');
$base;
//  echo $_POST['id_marque'],$_POST['modele'],$_POST['cylindre'],$_POST['categorie'],$_POST['num_serie'],$_POST['prix'];
    // id_marque 	modele 	cylindre 	categorie 	num_serie 	prix 
$moto1= new Moto();
if(isset($_POST)){
$moto1->new_marque($_POST['marque']);



header('location:../../vue/confir_enregistre_marque/marque.confirme.ajout.php');
}
?>