<?php

          
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=ar;charset=utf8', 'root', '');
            }
            catch(Exception $e)
                {
                   die('Erreur : '.$e->getMessage());

                }
                
               $cin_four=$_POST['cin_four'];
               $nom_four=$_POST['nom_four'];
               $prenom_four=$_POST['prenom_four'];
               $tel_four=$_POST['tel_four'];
               $hidden=$_POST['hidden'];
               $reponse = $bdd->query("update fournisseur set cin_four='$cin_four',nom_four='$nom_four', prenom_four='$prenom_four', tel_four='$tel_four' where cin_four='$hidden';" );

               header("Location:modifierfournisseur.php");
            
              
            
        
?>