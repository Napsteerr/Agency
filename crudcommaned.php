<?PHP
include "config.php";

class crudcommande{
	public $cnx;
	function __construct(){
		$c=new config();
        $this->cnx=$c->cnx;		
	}

		function ajoutercommande($doc,$conn){
		$req="INSERT INTO commande(id_commande,id_four,id,quan) 
		VALUES ('".$doc->getid_commande()."','".$doc->getid()."','".$doc->getid_four().
		"','".$doc->getquan()."')";
		echo $req;
		$conn->query($req);
	}



	

	function affichecommande($conn){
		$req="SELECT * FROM commande";
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}


}
?>