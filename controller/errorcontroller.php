<?php

class Errorcontroller extends Controller {
	

	public function __construct()
		{
			parent::__construct();
			//echo  " the error controller ";
		}

	public function index()
		{
			$this->view->render('error/index');
		}
	
}


?>