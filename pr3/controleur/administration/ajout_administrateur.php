<?php
include('../../modele/classe/administrateur.classe.php');
header('location:../..//vue/p_accueil/menu.php');
$email= $_POST['email'];
$mot_de_passe=$_POST['mot_de_passe'];
$ajout= new Administration();

$ajout->utilisateur($email,$mot_de_passe);

