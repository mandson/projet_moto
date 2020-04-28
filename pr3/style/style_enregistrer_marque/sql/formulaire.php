

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
   
    <title>ENREGISTREMENT</title>
    <style>
      
    </style>
</head>


<body >
           <!-- <Formulaire></Formulaire> -->

     

         <form action="traitement/enregistrer.php" method="POST"  class=" bg bg-primary mt-5" >
             
     <div class="form-group row border p-5">
         <div  class="col-sm-3">    </div>
        <div class="col-sm-3">    
            <h3>NOM</h3>
            <input type="text" name="nom " >
              <h3> PRENOM</h3>
             <input type="text"  name="prenom ">

             <h3>  genre</h3>
            
           <input type="text" name="sexe" >

             <h3>  Addreese   </h3>
             <input type="text" name="addresse" >

             <h3>   telephone    </h3>
             <input type="text"   name=" telephone " >

             <h3>  Age   </h3>
             <input type="text"  name="age " >
      </div>

       <div class="col-sm-6">


             <h3>   Groupe Sanguin </h3>
             <input type="text"  name=" g_sanguin " >

             <h3> Antecedant </h3>
             <input type="text"  name=" antecedant " >

             <h3> m_actuelle   </h3>
             <input type="text"  name="m_actuelle " >
    
             <h3> INDICATEUR    </h3>
             <input type=" text "  name="indic_biol" > <br>
             <input type="submit" > <br>
             <input type="reset">
       </div>
   </div>
            </form>
           





        </div>
        <script src="../bootstrap.min.css"></script>
</body>

</html>