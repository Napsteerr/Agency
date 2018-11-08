<?php

          
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=ar;charset=utf8', 'root', '');
            }
            catch(Exception $e)
                {
                   die('Erreur : '.$e->getMessage());

                }
                
               $id_agent=$_POST['id_agent'];
               $nom_agent=$_POST['nom_agent'];
               $prenom_agent=$_POST['prenom_agent'];
               $tel_agent=$_POST['tel_agent'];
               $hidden=$_POST['hidden'];
               $reponse = $bdd->query("update agent set id_agent='$id_agent',nom_agent='$nom_agent', prenom_agent='$prenom_agent', tel_agent='$tel_agent' where id_agent='$hidden';" );

               header("Location:modifieragent.php");
            
              
            
        
?>