<?PHP
include "config.php";

class crudDocument{
	public $cnx;
	function __construct(){
		$c=new config();
        $this->cnx=$c->cnx;		
	}
	
	function ajouterDocument($doc,$conn){
		$req="INSERT INTO articles(id,nom_article,quantite,prix) 
		VALUES ('".$doc->getid()."','".$doc->getnom_article()."','".$doc->getquantite().
		"','".$doc->getprix()."')";
		echo $req;
		$conn->query($req);
	}
    

		




	

	function afficheDocuments($conn){
		$req="SELECT * FROM articles";
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}

	}



		if (@$_GET['supprimer_article']){
			$supp=$_GET['supprimer_article'];
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=ar;charset=utf8', 'root', '');
			}
			catch(Exception $e)
				{
     			   die('Erreur : '.$e->getMessage());

				}
              $mod = $bdd->query("delete from articles where id='$supp';");
			header("Location:supprimerarticle.php");
	    }

		if (@$_GET['supprimer_fournisseur']){
			$supp=$_GET['supprimer_fournisseur'];
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=ar;charset=utf8', 'root', '');
			}
			catch(Exception $e)
				{
     			   die('Erreur : '.$e->getMessage());

				}
              $mod = $bdd->query("delete from fournisseur where cin_four='$supp';");
			header("Location:supprimerfournisseur.php");
	    }

	    		if (@$_GET['supprimer_agent']){
			$supp=$_GET['supprimer_agent'];
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=ar;charset=utf8', 'root', '');
			}
			catch(Exception $e)
				{
     			   die('Erreur : '.$e->getMessage());

				}
              $mod = $bdd->query("delete from agent where id_agent='$supp';");
			header("Location:supprimeragent.php");
	    }



	    if (@$_GET['modifier_article']){
			$supp=$_GET['modifier_article'];
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=ar;charset=utf8', 'root', '');
			}
			catch(Exception $e)
				{
     			   die('Erreur : '.$e->getMessage());

				}
			  $mod1 = $bddd->query("select * from articles where id='".$_GET['modifier_article']."';" );
			  $article=$mod1->fetch();
              $mod = $bdd->query("update articles set id='".$_GET['id']."',nom_article'".$_GET['nom_article']."',quantite='".$_GET['quantite']."',prix='".$_GET['prix']."' where id='".$_GET['hidden']."';" );
			header("Location:modifierarticle.php");
	    }
	    /*$reponse = $bdd->query("update article set nom_article='".$_POST['nom']."',seuil_max='".$_POST['seuilmax']."',seuil_min='".$_POST['seuilmin']."',quantite='".$_POST['quantite']."' where id_article='".$_POST['hidden']."';" );*/

class crudfournisseur{
	public $cnx;
	function __construct(){
		$cy=new config();
        $this->cnx=$cy->cnx;		
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
class crudagent{
	public $cnx;
	function __construct(){
		$cy=new config();
        $this->cnx=$cy->cnx;		
	}

		function ajouteragent($doc,$conn){
		$req="INSERT INTO agent(id_agent,nom_agent,prenom_agent,tel_agent,adr_agent) 
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