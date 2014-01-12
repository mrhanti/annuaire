

<?php
global $session;
if($session->is_logged_in()){redirect_to(PATH.'dashboard');}
if($session->message())
	{
		echo $session->message();
	}


?>


<div> <h3> Déjà inscrit ? connecte toi , pour mettre à jour tes données !</h3> </div>
 

 <div id="inscription-holder">
 	<form action='login/authenticate' id='form_inscription' method='POST' > 
 		<table> 
 			<tr> <td> Numero de téléphone / adresse email</td><td> <input type="text"  name="email" value="" id="email" /> </td> </tr>
 			<tr> <td> Mot de passe                       </td><td> <input type="password"  name="password" value="" id="password" /></td> </tr>
 			
 			<tr> <td>                     </td>  <td> <input type="submit"  name="login" value="login" id="" /></td> </tr>
 		</table>

 	</form>
  </div>