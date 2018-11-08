<?PHP
include "crudDocument.php";
include "document.php";
$crudfournisseur=new crudfournisseur();
$conn=$crudfournisseur->cnx;//public
if(isset($_GET['cin_four'])){
$doc=new fournisseur($_GET['cin_four'],$_GET['nom_four'],$_GET['prenom_four'],$_GET['tel_four'],$_GET['datee'],$_GET['adr_four']);
$crudfournisseur->ajouterfournisseur($doc,$conn);
header("Location:ajouterfournisseurad.php");
}

?>




