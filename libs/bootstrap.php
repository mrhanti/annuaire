<?php

class Bootstrap {
	


	public function __construct()
		{
			if(isset($_GET['url']) && !empty($_GET['url']))
				{

					//-------------------------------------
					$url = $_GET['url'];
					$url = rtrim($url);
					$url = explode('/',$url);
					//print_r($url);
					if(isset($url[0]) && !empty($url[0]))
						{
							$controller_name = $url[0].'controller';
							$cont = '';
							if(controller_exists($controller_name))
							   	{
							   	$cont = $controller_name;
							  	include "Controller/{$cont}.php";
						    	}
							else
						    	{
						    	$cont = 'errorcontroller';
						    	include "Controller/{$cont}.php";

			                    }
			                //echo 'the value of cont 3 is :'.$cont;
							$controller = new $cont();

						    if(isset($url[1]) && !empty($url[1]))
						    	{
						    		if($url[1] == 'index')
						    			{
						    				$controller->index();
						    			}
						    		elseif(method_exists($cont,$url[1]))
						    			{
						    				if(isset($url[2]) && !empty($url[2]) )
						    					{
						    						$controller->$url[1]($url[2]);
						    					}
						    				else {
						    					$controller->$url[1]();
						    				}
						    			}
						    	}
						    else {$controller->index();}
						}
						else
							{
								controller__autoload('indexcontroller');
								$controller = new Indexcontroller();
								$controller->index();
							}




					//-------------------------------



				}
				else
				{
					controller__autoload('indexcontroller');
					$controller = new Indexcontroller();
					$controller->index();
				}
			}
}

?>