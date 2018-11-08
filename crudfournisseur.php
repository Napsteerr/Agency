<?PHP
include "config.php";

class crudfournisseur{
	public $cnx;
	function __construct(){
		$c=new config();
        $this->cnx=$c->cnx;		
	}

		function ajouterfournisseur($doc,$conn){
		$req="INSERT INTO fournisseur(cin_four,nom_four,prenom_four,tel_four,datee,adr_four) 
		VALUES ('".$doc->getcin_four()."','".$doc->getnom_four()."','".$doc->getprenom_four().
		"','".$doc->gettel_four()."','".$doc->getdatee()."','".$doc->getadr_four()."')";
		echo $req;
		$conn->query($req);
	}



	

	function affichefournisseur($conn){
		$req="SELECT * FROM fournisseur";
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}


}
?>