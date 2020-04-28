
<?php
if (isset($_POST['pass']) AND $_POST['pass'] ==
"multix") // Si le mot de passe est bon
{
// On affiche les codes
include('page_accueil.php');
?>
</p>

   
<?php
}
else // Sinon, on affiche un message d'erreur
{
echo 'mauvaise saisie';


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ACCUEILLE</title>
    <link rel="stylesheet" href="css/style1.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="card bg bg-primary milieu_login" >

<div class="card esapace_milieu  esapace_milieu_accueilbg bg-danger   text-center" >
    
    <p>
    <h3>Attention mauvaise saisie du mot_passe . reverifier vos information</h3>
        Si tu veux reessayer, <a href="index.php"><h3> clique ici</h3></a> pour revenir </p>
</div>


</body>
<script type="text/javascript" src="jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/javas.js"></script>
</html>