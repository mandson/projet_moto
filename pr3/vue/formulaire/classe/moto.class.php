<?php
         class Moto{
            private $base;
            function __construct(){
        
                try {
                    $this->base=new PDO('mysql:host=localhost;dbname=moto_db','root','');
                } catch (PDOException $e){
                    echo 'erreur:'.$e->getMessage();
                }
        
            }

    //enregistrer une nouvelle moto
    // id_marque 	modele 	cylindre 	categorie 	num_serie 	prix 

    public function enregistrer($id_marque,$modele,$cylindre,$categorie,$num_serie,$prix ){
        $ajout=$this->base->prepare("INSERT INTO moto(id_marque,modele,cylindre,categorie,num_serie,prix) VALUES(:id_marque,:modele,:cylindre,:categorie,:num_serie,:prix)") ;
        $ajout->execute(array(
           "id_marque" => $_POST['id_marque'],
           "modele"  => $_POST['modele'],
           "cylindre" => $_POST['cylindre'],
           "categorie" =>$_POST['categorie'],
           "num_serie" =>$_POST['num_serie'],
            "prix"  =>$_POST['prix'] 
        ));
    }
}