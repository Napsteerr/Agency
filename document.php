
<?php
session_start(); 


class document
{   private $id;
	private $nom_article;
	private $quantite;
	private $prix;
	
	
	public function __construct($id,$nom_article,$quantite,$prix)
	{
		$this->id=$id;
		$this->nom_article=$nom_article;
		$this->quantite=$quantite;
		$this->prix=$prix;
	
		
	}
	public function getid()
	{
		return $this->id;
	}
	public function setid()
	{
		$this->id=$id;
	}
	//var x = document.getElementById("nom_article");
	public function getnom_article()
	{
		return $this->nom_article;
	}
	public function setnom_article()
	{
		$this->nom_article=$nom_article;
	}
	public function getquantite()
	{
		return $this->quantite;
	}
	public function setquantite()
	{
		$this->quantite=$quantite;
	}
	public function getprix()
	{
		return $this->prix;
	}
	public function setprix()
	{
		$this->prix=$prix;
	}

}




class fournisseur
{   private $cin_four;
	private $nom_four;
	private $prenom_four;
	private $tel_four;
	private $datee;
	private $adr_four;
	

	public function __construct($cin_four,$nom_four,$prenom_four,$tel_four,$datee,$adr_four)
	{
		$this->cin_four=$cin_four;
		$this->nom_four=$nom_four;
		$this->prenom_four=$prenom_four;
		$this->tel_four=$tel_four;
		$this->datee=$datee;
		$this->adr_four=$adr_four;
	
		
	}
	public function getcin_four()
	{
		return $this->cin_four;
	}
	public function setcin_four()
	{
		$this->cin_four=$cin_four;
	}
	//var x = document.getElementById("nom_four");
	public function getnom_four()
	{
		return $this->nom_four;
	}
	public function setnom_four()
	{
		$this->nom_four=$nom_four;
	}
	public function getprenom_four()
	{
		return $this->prenom_four;
	}
	public function setprenom_four()
	{
		$this->prenom_four=$prenom_four;
	}
	public function gettel_four()
	{
		return $this->tel_four;
	}
	public function settel_four()
	{
		$this->tel_four=$tel_four;

	}
		public function getdatee()
	{
		return $this->datee;
	}
	public function setdatee()
	{
		$this->datee=$datee;
		}
			public function getadr_four()
	{
		return $this->adr_four;
	}
	public function setadr_four()
	{
		$this->adr_four=$adr_four;
	}

	}
	class agent 


{   private $id_agent;
	private $nom_agent;
	private $prenom_agent;
	private $tel_agent;
	private $adr_agent;
	
	
	public function __construct($id_agent,$nom_agent,$prenom_agent,$tel_agent,$adr_agent)
	{
		$this->id_agent=$id_agent;
		$this->nom_agent=$nom_agent;
		$this->prenom_agent=$prenom_agent;
		$this->tel_agent=$tel_agent;
		$this->adr_agent=$adr_agent;

	
		
	}
	public function getid_agent()
	{
		return $this->id_agent;
	}
	public function setid_agent()
	{
		$this->id_agent=$id_agent;
	}
	//var x = document.getElementById("nom_article");
	public function getnom_agent()
	{
		return $this->nom_agent;
	}
	public function setnom_agent()
	{
		$this->nom_agent=$nom_agent;
	}
	public function getprenom_agent()
	{
		return $this->prenom_agent;
	}
	public function setprenom_agent()
	{
		$this->prenom_agent=$prenom_agent;
	}
	public function gettel_agent()
	{
		return $this->tel_agent;
	}
	public function settel_agent()
	{
		$this->tel_agent=$tel_agent;
	}

	public function getadr_agent()
	{
		return $this->adr_agent;
	}
	public function setadr_agent()
	{
		$this->adr_agent=$adr_agent;
	}
}

class commande
{   private $id_commande;
	private $id_four;
	private $id;
	private $quan;
	
	
	public function __construct($id_commande,$id_four,$id,$quan)
	{
		$this->id_commande=$id_commande;
		$this->id_four=$id_four;
		$this->id=$id;
		$this->quan=$quan;
	
		
	}
	public function getid_commande()
	{
		return $this->id_commande;
	}
	public function set_commande()
	{
		$this->id_commande=$id_commande;
	}
	//var x = document.getElementById("nom_article");
	public function getid_four()
	{
		return $this->id_four;
	}
	public function setid_four()
	{
		$this->id_four=$id_four;
	}
	public function getquan()
	{
		return $this->quan;
	}
	public function setquan()
	{
		$this->quan=$quan;
	}
	public function getid()
	{
		return $this->id;
	}
	public function setid()
	{
		$this->id=$id;
	}

}





?>