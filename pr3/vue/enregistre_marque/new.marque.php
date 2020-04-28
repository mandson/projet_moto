
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/style_ajout_moto/css/style1.css">
   
    <title>application Maquette</title>
 </head>

<!-- Formulaire -->

<body  style="background:url(../../style/style_stock_par_maques/img/b.jpg); background-size:cover;"   class="card bg bg-primary milieu_login" >

<div class="container card esapace_milieu  esapace_milieu_accueilbg bg-natural   text-center" >
  

<div class="container col-md-5" style="margin-top: 30px; background-color: rgb(232, 233, 237);"><br>
<form action="../../controleur/ajout_marque/controle.newmarque.php" method="post">
    <div class="row col-md-11">
        <label for="text" class="col-md-5 col-form-label" class="droite" style="background-color:rgb(124, 137, 255);">Nom de la marque:</label>
          <div class="col-md-6">
            <input type="text" name="marque" class="form-control" id="text">
          </div>
        </div><br>
          <div class="row">
            <div class="col">
            <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
            </div>
          </div><br>
        </form>
  </div>

</div>


 
</body>
</html>