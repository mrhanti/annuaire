<?php

class Dashboardcontroller extends Controller {
	

	public function __construct()
		{
			parent::__construct();
		//$this->view->js  = array('login/js/form_validation.js');
		}

	public function index()
		{

			$this->view->render('dashboard/index');
		}


}


?>