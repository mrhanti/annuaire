<?php

class Controller {
	

	public function __construct()
		{
			//echo  " the main controller ";
			$this->view = new View();
		}

	public function loadmodal($name='')
		{
			$path = 'modal/'.$name.'modal.php';

			if(file_exists($path))
				{
					require $path;
					$modal_name = $name.'modal';
					$modal = new $modal_name();
				}
			
		}
	
	
}


?>