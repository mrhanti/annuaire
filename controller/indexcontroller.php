<?php

class Indexcontroller extends Controller {
	

	public function __construct()
		{
			parent::__construct();
			//echo  " the second controller ";
		}

	public function index($name='')
		{
			//echo 'callind the index method in index controller';
			$this->view->render('index/index');
		}

	
}


?>