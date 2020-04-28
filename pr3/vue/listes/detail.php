<?php
include('../../controleur/classe/moto.class.php');
$test=new Moto();
echo $test->detailmarque($ID1=$_GET['IDmark'],'marque');
echo $test->detailmoto($ID=$ID= $_GET['IDM'],'modele');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style/style_liste&detail/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="../../style/style_liste&detail/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>PAGE ACCUEIL</title>
</head>
<body style="background-color: rgb(231, 236, 234);">
<div class="container" style="margin-top: 50px;">
<center><caption><span style="font-size:25px;">LISTES-DETAIL-MOTOS</span></caption></center><br>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">MARQUE</th>
      <th scope="col">MODELE</th>
      <th scope="col">CYLINDRE</th>
      <th scope="col">CATEGORIE</th>
      <th scope="col">NUM-SERIE</th>
      <th scope="col">PRIX</th>
    </tr>
  </thead>
  <tbody>
  <?php
 
   ?> 
  <tr>
      <td scope="row"><?php echo $test->detailmarque($ID1=$_GET['IDmark'],'marque');?></td>
      <td><?php echo $test->detailmoto($ID=$ID= $_GET['IDM'],'modele');?></td>
      <td><?php echo $test->detailmoto($ID=$ID= $_GET['IDM'],'cylindre');?></td>
      <td><?php echo $test->detailmoto($ID=$ID= $_GET['IDM'],'categorie');?></td>
      <td><?php echo $test->detailmoto($ID=$ID= $_GET['IDM'],'num_serie');?></td>
      <td><?php echo $test->detailmoto($ID=$ID= $_GET['IDM'],'prix');?></td>
      </tr>
      <?php  
      
      ?>
  </tbody>
</table>
<button class="btn btn-danger"><a href="../../vue/listes/affichage.php">PRECEDENT</a></button></td>
    
</div>
</body>
</html>
