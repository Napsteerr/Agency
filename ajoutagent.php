<?PHP

include "crudDocument.php";
include "document.php";
$crudagent=new crudagent();

$conn=$crudagent->cnx;//public
if(isset($_GET['id_agent'])){
$doc=new agent($_GET['id_agent'],$_GET['nom_agent'],$_GET['prenom_agent'],$_GET['tel_agent'],$_GET['adr_agent']);
$crudagent->ajouteragent($doc,$conn);


header("Location:ajouteragentad.php");
}

?>




