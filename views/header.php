<?php 
global $session;
?>
<!DOCTYPE html>
<html>
<head>
<title>Default title </title>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>default.css">
<script src="<?php echo JS_PATH;?>jquery.js" ></script>
<?php
	 	if(isset($this->js))
					{
						foreach( $this->js as $js )
							{
								echo "<script src=\"".VIEW_PATH."{$js}\" ></script>";
							}
					}
		if(isset($this->css))
			{
				foreach($this->css as $css)
					{
						echo "<link rel=\"stylesheet\" href=".PATH."views/".$css." \" />";
					}
			}


	 ?>
<link href='http://fonts.googleapis.com/css?family=Philosopher:400,700' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>

<body>

<div id='header'> 
		<div id="title-block"> 
		<span class="bigtitle"> Bienvenue dans votre annuaire </span> 
		</div>
		<div id="search-block">  
		<?php if(!$session->is_logged_in()):?>
	<a href="<?php echo PATH;?>inscription" > inscription </a> || <a href="<?php echo PATH;?>login" > Login </a>
<?php else : ?>
	<a href="<?php echo PATH;?>dashboard" > Dashboard </a> || <a href="<?php echo PATH;?>login/logout" > Logout </a>
<?php endif;?>
		</div>

</div>
  <div id='page-content'>