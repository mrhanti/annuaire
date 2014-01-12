<?php

class Searchcontroller extends Controller {
	

	public function __construct()
		{
			parent::__construct();
			$this->view->js  = array("inscription/js/form_validation.js","inscription/js/jquery_ui.js");
			$this->view->css  = array("inscription/css/jquery_ui.css");
		}

	public function index()
		{
			if(isset($_GET['p']) && isset($_GET['v']))
				{
					$profession = $_GET['p'];
		 		    $ville      = $_GET['v'];
			        $this->view->search_result = $this->search($profession,$ville);
				}
		 
			$this->view->render('search/index');
		}

	public function search($profession,$ville)
		{
			return $users = User::search($profession , $ville);
		}
	
	public function add_artisan()
		{
			global $database; global $session;
			$user                      = new user();
			$user->nom                 = $_POST['nom'];
			$user->prenom              = $_POST['prenom'];
			$user->profession          = $_POST['profession'];
			$user->adresse             = $_POST['adresse'];
			$user->ville               = $_POST['ville'];
			$user->date_naissance      = $_POST['date_naissance'];
			$user->email               = $_POST['email'];
		    $user->password            = sha1($_POST['password']);
		    $phone_number              = '06'.$_POST['telephone'];
		    if(Telephone::find_by_phone($phone_number))
		    	{
		    		$session->message("ce numéro de téléphone appartient déjà à quelqu'un , veuillez le changer pour vous inscrire");
		    		redirect_to('../inscription');
		     	}

		    
			 if($user->create())
			 {

			 	 $user->id         = $database->insert_id();
				 $telephone = new Telephone($user->id,$phone_number);
				 if($telephone->create())
				 	{
				 	$session->login($user);
				 	 redirect_to(PATH.'dashboard');	
				 	}
				 else 
				 {
				 $user->delete();
				 $session->message('error ! try again');
				  redirect_to(PATH.'inscription');	
				 }
				 
			 }else
			 {
			 	
				$session->message('error ! try again');
				 redirect_to(PATH.'inscription');
			 } 
		   
		}
}


?>