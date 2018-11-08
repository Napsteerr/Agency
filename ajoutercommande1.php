<?php

          
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=ar;charset=utf8', 'root', '');
            }
            catch(Exception $e)
                {
                   die('Erreur : '.$e->getMessage());

                }
                
             $id_four=$_POST['id_four'];
             $id=$_POST['id'];
             $quan=$_POST['quan'];
               $reponse = $bdd->query("insert into commande(id_four,id,quan) values('$id_four','$id','$quan') ;" );

               header("Location:commande.php");
            
              
            
        
?>