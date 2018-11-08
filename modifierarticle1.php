<?php

          
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=ar;charset=utf8', 'root', '');
            }
            catch(Exception $e)
                {
                   die('Erreur : '.$e->getMessage());

                }
                
             
               $reponse = $bdd->query("update articles set id='".$_POST['id']."',nom_article='".$_POST['nom_article']."',quantite='".$_POST['quantite']."',prix='".$_POST['prix']."' where id='".$_POST['hidden']."';" );

               header("Location:modifierarticle.php");
            
              
            
        
?>