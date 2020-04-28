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
     
    function getAll(){
        $enrg=$this->base->query("SELECT * FROM moto,marques ");
          return $enrg->fetchAll();
    }

    public function supprimer($num_serie){
        $sup=$this->base->query ('DELETE  FROM moto WHERE num_serie=\'' . $num_serie . '\'');
        return $sup;
        }

       
    function detail_moto($id_moto){
        $det=$this->base->prepare("SELECT * FROM moto   WHERE id_moto=:id_moto ");
        $det->execute(array(
            "id_moto"=>$id_moto
             
        ));
        return $det->fetch();
    }

    function detail_marque($id_marque){
        $det=$this->base->prepare("SELECT * FROM marques   WHERE id_marque=:id_marque ");
        $det->execute(array(
            "id_marque"=>$id_marque
             
        ));
        return $det->fetch();
    }

}
$id_moto=1;
  $id_marque=2;
  $moto1= new Moto();
 
  $detmoto=$moto1->detail_moto($id_moto);
  echo $detmoto['modele'];
  $detmarque=$moto1->detail_marque($id_marque );
  echo $detmarque['marque'];
 
?>