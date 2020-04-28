<?php
include('../../modele/classe/moto.class.php');

$moto1=new Moto();
function val($ct){
    if($ct!=""){
        echo $ct;
    }
}

if(isset($_GET['rep']))
{
  echo '<h5>'.$_GET['rep'].'</h5>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style/style_liste&detail/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/style_liste&detail/css/style.css">
    <link href="../../style/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>PAGE ACCUEIL</title>
</head>
<body style="background:url(../../style/style_liste&detail/img/eau.jpg); background-size:cover;">
<div class="container" style="margin-top: 50px;">
<center><caption><span style="font-size:25px;">LISTES DES MOTOS</span></caption></center><br>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">MARQUE</th>
      <th scope="col">MODELE</th>
      <th scope="col">PRIX</th>
      <th scope="col">+DETAIL</th>
      <th scope="col">SUPPRIMER</th>
    </tr>
  </thead>
  <tbody>
 
  <tr>   <?php
  foreach($moto1->getAll() as $moto1) {
   ?> 
      <td scope="row" style="font-size:20px;"><?php echo $moto1['marque'];?></td>
      <td style="font-size:20px;"><?php echo $moto1['modele'];?></td>
      <td style="font-size:20px;"><?php echo $moto1['prix'];?></td>
      <td style="font-size:20px;"> <a href="../../controleur/detail/controleur.detaille.php? moto=<?php echo $moto1['id_moto'] ; ?>& mark=<?php echo $moto1['id_marque'] ; ?>"><button class="btn btn-primary"><h3>Lire</h3></a> </td>
      <td><button class="btn btn-danger"><a href="../../controleur/liste/modele.supprimer.php?efface=<?php echo $moto1['num_serie']; ?>">supprimer</a></button></td>
      
      </tr>
      <?php  
      }
      ?>
  </tbody>
</table>
</div>
</body>
</html>