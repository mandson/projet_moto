
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style/style_stock_par_maques/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/style_stock_par_maques/css/style.css">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>PAGE ACCUEIL</title>
</head>

<body style="background:url(../../style/style_stock_par_maques/img/b.jpg); background-size:cover;">
<div class="container" style="margin-top: 50px;">
<div class="row" style="float:right;">
<a role="button" href="../../vue/p_accueil/menu.php" class="btn btn-danger">RETOUR AU MENU</a>
</div>

<center><caption><span style="font-size:25px;">LISTE DES NOMBRES TOTAL DE MOTOS PAR MARQUE </span></caption></center><br>
<table class="table table-striped table-bordered">
<tr>
    
<thead>
   <?php
   include('../../controleur/classe/moto.class.php');
   $toto= new Moto();
   $moto1= new Moto();  
  foreach ($moto1->getAllmarque() as $moto1  ) {
   ?>
      <th scope="col"><?php echo $moto1['marque']?></th>
      <?php
            }
               ?>
    </tr>
  </thead>
  <!-- /***************************************************************** -->
  <thead>
   <?php
 
   $toto= new Moto();
   $moto1= new Moto();  
   $moto2= new Moto();
   foreach ($moto2->getAllmarqueID() as $moto2) {
   ?>
       <?php $id_marque= $moto2['id_marque'];
      ?>
      
      
      <td scope="col">
       <P>En stock</P> <?php   echo $toto->totalmarque($id_marque);?></td>
      <?php
            }
               ?>
    </tr>
  </thead>
  <tbody>
     


</table>


</div>
<div>

</body>
</html>