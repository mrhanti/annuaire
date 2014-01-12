<?php

class Logincontroller extends Controller {
	

	public function __construct()
		{
			parent::__construct();
		$this->view->js  = array('login/js/form_validation.js');
		}

	public function index()
		{

			$this->view->render('login/index');
		}
	public function authenticate()
		{
			global $session;
			$email    = $_POST['email'];
			$password = $_POST['password'];
			if($user = User::authenticate($email,$password))
				{
					$session->login($user);
					$session->message("user found");
				}
			else {$session->message("aucun utilisateur n'est trouvé , veuillez vérifier vos données ");}

			redirect_to("../login");
		}

	public function logout()
		{
			global $session;
			$session->logout();
			$session->message("reviens dès que c'est possible ");
			redirect_to(PATH.'index');
		}
}


?>