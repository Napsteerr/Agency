<?PHP
include "config.php";

class crudagent{
	public $cnx;
	function __construct(){
		$c=new config();
        $this->cnx=$c->cnx;		
	}

		function ajouteragent($doc,$conn){
		$req="INSERT INTO agent(id_agent,nom_agent,prenom_agent,tel_agent,adr_four) 
		VALUES ('".$doc->getid_agent()."','".$doc->getnom_agent()."','".$doc->getprenom_agent().
		"','".$doc->gettel_agent()."','".$doc->getadr_agent()."')";
		echo $req;
		$conn->query($req);
	}



	

	function afficheagent($conn){
		$req="SELECT * FROM agent";
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}


}
?>