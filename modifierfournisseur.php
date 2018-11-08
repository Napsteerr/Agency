<?php


if (isset($_GET['modifier'])){
          
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=ar;charset=utf8', 'root', '');
            }
            catch(Exception $e)
                {
                   die('Erreur : '.$e->getMessage());

                }
                
                $mod1 = $bdd->query("select * from fournisseur where cin_four='".$_GET['modifier']."';" );
              $fournisseur=$mod1->fetch();
             
            
              
            
        }

        

    
 


?>
<?PHP
include "document.php";
include "crudfournisseur.php";
$crud = new crudfournisseur();
$conn=$crud->cnx;//public

$reponse=$crud->affichefournisseur($conn);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Supprimer fournisseur</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                    Attia & Rmédi
            </div>

            <ul class="nav">
                                         <li>
                    <a href="home.php">
                        <i class="pe-7s-user"></i>
                        <p>Home</p>
                    </a>
                </li>
                 <li>
                    <a href="fournisseur.php">
                        <i class="pe-7s-note2"></i>
                        <p>Fournisseurs</p>
                    </a>
                </li>
               
                <li>
                    <a href="ajouterfournisseurad.php">
                        <i class="pe-7s-user"></i>
                        <p>Ajouter fournisseur</p>
                    </a>
                </li>
                <li  class="active">
                    <a href="modifierfournisseur.php">
                        <i class="pe-7s-note2"></i>
                        <p>Modifier fournisseur</p>
                    </a>
                </li>
                <li  >
                    <a href="supprimerfournisseur.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Supprimer fournisseur</p>
                    </a>
                </li>
               
                
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Table List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                       
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Plan
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="articles.php">Articles</a></li>
                                <li><a href="fournisseur.php">Fournisseurs</a></li>
                                <li><a href="commande.php">Commandes</a></li>
                                <li><a href="agent.php">Agents</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

     <div class="content">
            <div align="center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Liste Des fournisseurs </h4>
                                <p class="category"> Disponible dans notre base de donnée </p>
                            </div>
                            <div class="content table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                       <th>CIN</th>
                                       <th>Nom du fournisseur</th>
                                       <th>Prenom du fournisseur</th>
                                       <th>Numéro fournisseur</th>
                                       <th>Date d'ajout</th>
                                       <th>Adresse</th>
                                      
                                    </thead>
                                    <tbody>
                                      <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            foreach ($reponse as $donnees)
            {
            ?>
                <tr>
                    <th><?php echo $donnees['cin_four'];?></th>
                    <th><?php echo $donnees['nom_four'];?></th>
                    <th><?php echo $donnees['prenom_four'];?></th>
                    <th><?php echo $donnees['tel_four'];?></th>
                    <th><?php echo $donnees['datee'];?></th>
                    <th><?php echo $donnees['adr_four'];?></th>
                    <th> <?php echo"<a href='modifierfournisseurad.php?modifier=".$donnees['cin_four']."' >Modifier</a>"; ?></th>
                
                   
                   
                    </form>
                </tr>
            <?php
            } //fin de la boucle, le tableau contient toute la BDD
            
            ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



                   


                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Attia & Rmédi , IF3 B
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


</html>























