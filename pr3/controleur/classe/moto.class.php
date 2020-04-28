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
    
    public function new_marque($marque){
        $ajout=$this->base->prepare("INSERT INTO marques (marque) VALUES(:marque)") ;
        $ajout->execute(array(
           "marque"=>$_POST['marque']
        ));
    }
     

    function getAll(){
        $enrg=$this->base->query("SELECT * FROM moto ");
          return $enrg->fetchAll();
    }

    function getAllmarque(){
        $base = new PDO('mysql:host=localhost;dbname=moto_db', 'root', '');
        $enrg=$this->base->query("SELECT * FROM marques ");
          return $enrg->fetchAll();
    }

    function getAllmarqueID(){
        $base = new PDO('mysql:host=localhost;dbname=moto_db', 'root', '');
        $enrg=$base->query("SELECT id_marque FROM marques ");
          return $enrg->fetchAll();
    }


    public function supprimer($num_serie){
        $sup=$this->base->query ('DELETE  FROM moto WHERE num_serie=\'' . $num_serie . '\'');
        return $sup;
        }

        function detailmoto($ID,$champ){
            $base = new PDO('mysql:host=localhost;dbname=moto_db', 'root', '');
        $reponse =$base->query('SELECT	*  FROM moto WHERE id_moto=\'' . $ID . '\'');
        while ($donnees = $reponse->fetch())
        {
        echo $donnees[$champ];
        
        }
        $reponse->closeCursor();
        }
        function detailmarque($ID){
            $base = new PDO('mysql:host=localhost;dbname=moto_db', 'root', '');
        $reponse =$base->query('SELECT	*  FROM marques WHERE id_marque=\'' . $ID . '\'');
        while ($donnees = $reponse->fetch())
        {
        echo $donnees['marque'];
        
        }
        $reponse->closeCursor();
    
        }

        function retournID_marque(){
            $base = new PDO('mysql:host=localhost;dbname=moto_db', 'root', '');
        $reponse =$base->query('SELECT	*  FROM marques WHERE marque=\'' . $marque . '\'');
        while ($donnees = $reponse->fetch())
        {
        echo "id de marque est".$donnees['id_marque'];
        
        }
        $reponse->closeCursor();
    
        }




        function totalmarque($id_marque){
            $base = new PDO('mysql:host=localhost;dbname=moto_db', 'root', '');
         $req = $base->query('SELECT COUNT(*) AS num_serie FROM moto WHERE id_marque=\'' . $id_marque . '\'');
         while ($donnees = $req->fetch())
         {
         echo $donnees['num_serie'];
         
         }
         $req->closeCursor();
        
    }

}
    
//    //cree le controleur 
   
//  $toto= new Moto();
//     $moto1= new Moto();
// // echo $toto->totalmarque($id_marque);
// // $marque="Sirus";

// //   echo $toto->retournID_marque($marque);
  
// foreach ($moto1->getAllmarqueID() as $moto1) {
//        $id_marque= $moto1['id_marque'];
