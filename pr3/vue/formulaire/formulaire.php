<?php
include('../../controleur/classe/moto.class.php');

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
    
    <link rel="stylesheet" href="../../style/style_ajout_moto/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/style_ajout_moto/css/style.css">
   
    <title>application Maquette</title>
</head>


<body>
<!-- Formulaire -->

<div class="container col-md-6" style="margin-top: 30px; background-color: rgb(232, 233, 236);">
     <a role="button" href="../../vue/p_accueil/menu.php" class="btn btn-danger">RETOUR AU MENU</a>     
      <center><h3 class="pt-3">NOUVELLE MOTO</h3></center>  <br>

        <form class="col-md-12" method="POST" action="../../controleur/formulaire/traitement.php" enctype="multipart/form-data">

          <fieldset>
            <div class="form-group row">
            <label for="text" class="col-md-5 col-form-label" style="background-color:rgb(129, 162, 252);">Marque:</label>
            <div class="col-md-7">
              <select type="text" name="id_marque" class="form-control" id="text" required name="marque">
    
              <option value="choix" >choisir</option>
              <?php
  foreach ($moto1->getAllmarque() as $moto1) {
   ?>
              <option value="<?php echo $moto1['id_marque']?>"><?php echo $moto1['marque']?></option>
              <?php
            }
               ?>
            </select>
            </div>
          </div>

            <div class="form-group row">
                <label for="text" class="col-md-5 col-form-label" class="droite" style="background-color:rgb(129, 162, 252);">Modèle :</label>
                  <div class="col-md-7">
                    <input type="text" name="modele" required class="form-control" id="text">
                  </div>
                </div>

                <div class="form-group row">
                    <label for="text" class="col-md-5 col-form-label" style="background-color:rgb(129, 162, 252);">Cylindre:</label>
                    <div class="col-md-7">
                      <input type="text" name="cylindre"required class="form-control" id="text">
                    </div>
                </div>
                   
                    <div class="form-group row">
                        <label for="text" class="col-md-5 col-form-label" style="background-color:rgb(129, 162, 252);">Categorie :</label>
                        <div class="col-md-7">
                          <input type="text" name="categorie"required class="form-control" id="text">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="text" class="col-md-5 col-form-label" style="background-color:rgb(129, 162, 252);">Numero Serie :</label>
                          <div class="col-md-7">
                            <input type="text" name="num_serie" required class="form-control" id="text">
                          </div>
                        </div>


                        <div class="form-group row">
                            <label for="text" class="col-md-5 col-form-label" style="background-color:rgb(250, 168, 216);">Prix :</label>
                            <div class="col-md-7">
                              <input type="text" name="prix" required class="form-control" id="text">
                            </div>
                        </div>

                            <div class="form-group row"  style="float: left">
                                                       <div class="col">
                                                       <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button>
                                                       </div>
                                <div class="col">
                                <button type="reset" class="btn btn-lg btn-danger">Annuler</button>
                                </div>
                            </div>
           </form>
</div>
</body>
</html>