<?php
try
{
// On se connecte à MySQL
$base = new PDO('mysql:host=localhost;dbname=moto_db', 'root', '',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}




