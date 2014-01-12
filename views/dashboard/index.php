

<?php
global $session;
if(!$session->is_logged_in() or !$user = User::find_by_id($session->user_id)) 
{redirect_to(PATH.'login');}
if($session->message())
	{
		echo $session->message();
	}


?>


<div> <h3> Bienvenue <?php echo $user->full_name();?> </h3> </div>
 <hr>
<table> 
<tr> <td> Nom              </td> <td> <input type="text" name="" id="" value="<?php echo $user->nom ;?>"/>       </td> </tr>
<tr> <td> Prénom           </td> <td> <input type="text" name="" id="" value="<?php echo $user->prenom ;?>"/>    </td> </tr>
<tr> <td> Email            </td> <td> <input type="text" name="" id="" value="<?php echo $user->email ;?>"/>     </td> </tr> 
<tr> <td> Profession       </td> <td> <input type="text" name="" id="" value="<?php echo $user->profession ;?>"/></td></tr>
<tr> <td> Adresse          </td> <td> <textarea row="3" col="200" name="" id="" value=""> <?php echo $user->adresse ;?> </textarea>   </td> </tr>
<tr> <td> Ville            </td> <td> <input type="text" name="" id="" value="<?php echo $user->ville ;?>"/>     </td> </tr>
<tr> <td> Date De naissance</td> <td> <input type="text" name="" id="" value="<?php echo $user->date_naissance ;?>"/></td> </tr>
<tr> <td> Mot de Passe     </td> <td> <input type="password" name="" id="" value="123123"/>  </td> </tr>
</table>