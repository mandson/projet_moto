<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style/style_page_accueil/css/bootstrap.css">
    <link rel="stylesheet" href="../../style/style_page_accueil/css/style.css">
    <link href="../../style/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>PAGE ACCUEIL</title>
</head>
<body style="background:url(../../style/style_page_accueil/img/arafat.jpg); background-size: cover;">
    <div class="container" style="margin-top: 30px;">
        <div class="row" style=" box-shadow:  0 8px 15px rgba(85, 85, 85, 0.25);">
            <div class="col-md-4 ">
                <img src="../../style/style_page_accueil/img/log.png" alt="logo du site">
            </div>
            <div class="col-md-5 pr-4  ">
                <h1 id="bienvenu" >BIENVENU CHEZ ABDOULMOTORS</h1>
            </div>
            <div class="col-md-3 bg bg-light border">
            <style>
    #heading { color: #FF0000; }  
    #bienvenu{ color:  #6633FF; }

  </style>
              <p id="heading" >Ajouter un Administrateur</p>
              <form action="../../controleur/administration/ajout_administrateur.php" method="post">
              Email:<input type="email" name="email"required class="mt-1 border border-primary"><br>
              Passe: <input type="text" name="mot_de_passe" required class="mt-2  border border-primary">
              <input type="submit" value="Enregistrer" class=" mt-1  border border-primary ml-5" >
              </form>
            </div>
        </div><br>
        <div class="row">
                <div class="col">
                    <div class="jumbotron" style="text-align: center;">
                        <p class="lead">
                          <a class="btn btn-primary btn-lg" href="../../vue/listes/affichage.php" role="button">LISTE DES MOTOS</a>
                            </p>
                       <img src="../../style/style_page_accueil/img/mark.jpg" alt="" class="rounded-circle">
                    </div>
                </div>
                    <div class="col">
                        <div class="jumbotron" style="text-align: center;">
                            <p class="lead">
                               <a class="btn btn-primary btn-lg" href="../../vue/formulaire/formulaire.php" role="button">ENREGISTRE UNE MOTO</a>
                            </p>
                            <img src="../../style/style_page_accueil/img/regi.jpg" alt="" class="rounded-circle">
                        </div>
                    </div>
                    <div class="col">
                     <div class="jumbotron" style="text-align: center;">
                        <p class="lead">
                          <a class="btn btn-primary btn-lg" href="../../vue/enregistre_marque/new.marque.php" role="button">ENREGISTRE UNE MARQUE </a>
                            </p>
                     <img src="../../style/style_page_accueil/img/f.png" alt="" class="rounded-circle">
                        
                    </div>
                </div>
                
</div>
<div class="row">
    <div class="col">
        <div class="jumbotron" style="text-align: center;">
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="../../vue/toal_moto_marque/affichage_marque.php" role="button">GALERIE NOMBRE TOTAL DE MOTOS PAR MARQUE</a>
                </p>
            <img src="../../style/style_page_accueil/img/wife.jpg" alt="" class="rounded-circle">
        </div>
    </div>
        <div class="col">
            <div class="jumbotron" style="text-align: center;">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="../../vue/fournisseur/fournisseur.html" role="button">FOURNISSEUR</a>
                </p>
          <img src="../../style/style_page_accueil/img/four.jpg" alt="" class="rounded-circle">
            </div>
        </div>
        <div class="col">
         <div class="jumbotron" style="text-align: center;">
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="../../vue/contact/contact.html" role="button">CONTACTS</a>
                </p>
           <img src="../../style/style_page_accueil/img/tel.png" alt="" class="rounded-circle">
        </div>
    </div>
    
</div>
</div>
</body>
</html>