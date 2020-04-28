







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="css/style1.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body >
<!-- ici les g signifie : grand ,,, p signifie petit  et c: container-->
<div class="container-fluid h-100 sou-content  "> 
   <div class="row  sou-content border border-dark " >
       <div  class=" border border-dark  h-auto  p_cgauche col-lg-2 bg bg-primary occupation " >  
            
          <div class="text-center">
               <img src="img/mlogo1.jpg" class="roundeda" alt="...">
          </div>

           <div class="form-group m-0 occupation" >
<h4 class="text-weight text-center text-danger  mt-5 ">
                         
<br />
IDENTIFIER-VOUS
</h4>
<form action="firewall.php" method="post">
<p >
<input type="text" name="nom" class="mt-3 bg bg-light border border-dark text-center s-occupation "  type="text" placeholder="Pseudo.." required />
<input type="password" name="pass"  class="mt-3 bg bg-light border border-dark text-center s-occupation p-2  " required />
<input type="submit" value="Valider"  class="mt-3 bg bg-dark border border-dark text-center s-occupation p-2  "  />
</p>
                   

                </form>  
                <div class="mt-4 border border-dark s-occupation  bg bg-light mb-5 " >
                    <h2 class="text-monospace text-center text-danger" >Attention!</h2>
                    <p  class="mt-4 text border  ">Lorem ipsum dolor sit, amet consectetur At maiores sapiente quo recusandae perferendis tenetur ullam eos ad? Dolorem beatae dicta impedit molestias iusto sit velit numquam.</p>
                </div>
         </div>
     </div> 


    
        <div  class="p_cdroit col-lg-10  bg bg-primary " > 
             <div class=" sou-content " >
                 
                  <div class=" row  bg bg-primary mt-3 mb-3   " > 
                  <div class="dropdown col-lg-2">
                        <button class="btn btn-light boutonmenu " type="button"   aria-haspopup="true" aria-expanded="false">
                                <a href="#" class="textelien" onclick=" chargement(); " > +nouveau  carnet</a>
                       </button>
                 </div>

                
                 <div class=" col-lg-1 " ></div>
                      <div class="dropdown col-lg-2">
                      <button class="btn btn-light boutonmenu " type="button"   aria-haspopup="true" aria-expanded="false">
                              <a href="#"  class="textelien"> list patient  </a>
                     </button>
                </div>

                <div class="  bg bg-dark barrehaut " ></div>
                       <div class=" col-lg-1  " ></div>
                      
                     
                      <div class="dropdown col-lg-2">
                      <button class="btn btn-light boutonmenu " type="button"   aria-haspopup="true" aria-expanded="false">
                              <a href="#"  class="textelien" > list patient </a>
                     </button>
                </div>
                       <div class=" col-lg-1 " ></div>
                       <div class=" col-lg-2   placeholdear   " ><input class=" boutonmenu1  placeholdear border border-dark" type="search" placeholder="recherche" ></div>
                      
                  </div>  
                                  <div class="row  sou-content  "> 
                                         <div class=" col-lg-11 bg bg-danger hauteur border border-dark m-0 p-0 pb-0 mb-0  " id="#container" > 
                                             

                                         
                                         <div class="milieu_login " >
                                              <div class="esapace_milieu textmilieu  " >
                                                  <h2 class="text-center p-5" > Register Electronique Carnets de Santer</h2>
                                                  <h3 class="text-center p-4"> Historique medicale et vaccin des patients</h3>
                                                  <h4 class="text-center p-2"> veillez-vous identifier pour continuer</h4>
                                               </div>
                                              </div>    
                                         </div>
                                         <div class=" col-lg-1 bg bg-primary hauteur p-0  " >
                                             <div class=" bg bg-dark card  margedroite" > </div> <!--marge vertical droite-->
                                        </div>
                                   </div>    
                                  
                            <!-- </div> -->
                     </div>
            </div>
        </div> 
   </div>
   
</div>
 
    
   </div>  
   <div class="row  border border-dark  " > 
      <div class=" col-lg bg bg-primary  sou-content border border-dark  " > 
          <div class="bg bg-dark footer " >  </div>
     </div>




</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/javas.js"></script>
</html>