<?PHP
echo"<script>alert('aaaaaaaaaaaa')</script>";
include "crudDocument.php";
include "document.php";
$crudDoc=new crudDocument();
$conn=$crudDoc->cnx;//public
if(isset($_GET['id'])){
$doc=new document($_GET['id'],$_GET['nom_article'],$_GET['quantite'],$_GET['prix']);
$crudDoc->ajouterDocument($doc,$conn);
header("Location:ajouterarticlead.php");
}

?>




