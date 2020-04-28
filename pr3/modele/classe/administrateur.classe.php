<?php
class db_connecte{
   private $base;
   function __construct(){
    $this->base=new PDO("mysql:host=localhost;dbname=moto_db","root","");
   }
   function getBase(){
   return $this->base;
   }
}

class Administration extends db_connecte{
    function __construct(){

    }

    function utilisateur($email,$mot_de_passe){
        $base= new PDO ('mysql:host=localhost;dbname=moto_db','root','',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $req =$base->prepare('INSERT INTO utilisateur(email, mot_de_passe)
         VALUES(:email,:mot_de_passe)');
        $req->execute(array(
        'email' => $email,
        'mot_de_passe' => sha1($mot_de_passe)
    
        ));
        echo 'Ajout d"un nouvel administrateur!';
    }
    
    
}


?>