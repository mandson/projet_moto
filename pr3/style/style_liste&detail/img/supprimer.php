<?php
include('../traitement/connexion.php');
$ID= $_GET['ID']; 
 $bdd->query ('DELETE  FROM patient_tb WHERE ID=\'' . $_GET['ID'] . '\'');
header('location:../liste.php');