

<?php
global $session;
if($session->message())
	{
		echo $session->message();
	}

?>
<script> 
$(function(){
	$("#date_naissance").datepicker({maxDate: "-216M"});	
	});
</script>

<div> <h3> Inscris-toi , et laisse les gens t'appeller pour fixer leurs problèmes  </h3> </div>
 <p> Veuillez remplir tous les champs</p>

 <div id="inscription-holder">
 	<form action='inscription/add_artisan' id='form_inscription' method='POST' > 
 		<table> 
 			<tr> <td> Nom</td>                <td> <input type="text"  name="nom" value="" id="nom" /> </td> </tr>
 			<tr> <td> Prénom </td>            <td> <input type="text"  name="prenom" value="" id="prenom" /></td> </tr>
 			<tr> <td> Date de naissance </td> <td> <input type="text"  name="date_naissance" value="" id="date_naissance" /></td> </tr>
 			<tr> <td> Profession </td>        <td> <select name="profession"> 
 																		<option value="electricien" > Electricien </option> 
 																		<option value="menuisier" > Menuisier </option>
 																		<option value="plombier" > Plombier </option>
 																		<option value="reparateurmachinealaver" > Réparateur de machie à laver </option>
 												   </select> </td> </tr>
 			<tr> <td> Adresse </td>           <td> <textarea name="adresse" id="adresse" cols="40" rows="2"> </textarea> </td> </tr>
 			<tr> <td> Ville   </td>           <td> <select name="ville" id="ville" style="width:170px;">
																		<option value="000"> choisir une ville </option>
																		<option value="552">Agadir</option>
																		<option value="553">Al hoceima</option>
																		<option value="554">Aoussered</option>
																		<option value="555">Assilah</option>
																		<option value="556">Azrou</option>
																		<option value="557">Beni Mellal</option>
																		<option value="558">Benslimane</option>
																		<option value="559">Berkane</option>
																		<option value="560">Berrechid</option>
																		<option value="561">Boujdour</option>
																		<option value="562">Bouskoura</option>
																		<option value="792">Bouznika</option>
																		<option value="563">Casablanca</option>
																		<option value="564">Chafchaouen</option>
																		<option value="565">Dakhla</option>
																		<option value="566">El jadida</option>
																		<option value="567">Essaouira</option>
																		<option value="568">Essmara</option>
																		<option value="569">Fès</option>
																		<option value="570">Guelmim</option>
																		<option value="571">Ifrane</option>
																		<option value="572">Kabila</option>
																		<option value="573">Kénitra</option>
																		<option value="574">Khenifra</option>
																		<option value="575">khmissat</option>
																		<option value="576">Khouribga</option>
																		<option value="577">ksar el kebir</option>
																		<option value="578">Laayoune</option>
																		<option value="579">Larache</option>
																		<option value="580">Marrakech</option>
																		<option value="581">Martil</option>
																		<option value="582">Meknès</option>
																		<option value="583">Melilia</option>
																		<option value="584">Midelt</option>
																		<option value="585">Mohammedia</option>
																		<option value="586">Nador</option>
																		<option value="587">Ouarzazate</option>
																		<option value="588">Ouazzane</option>
																		<option value="589">Oujda</option>
																		<option value="590">Rabat</option>
																		<option value="591">Safi</option>
																		<option value="592">Salé</option>
																		<option value="593">Sebta</option>
																		<option value="594">Sefrou</option>
																		<option value="595">Settat</option>
																		<option value="596">Sidi ifni</option>
																		<option value="597">Sidi kacem</option>
																		<option value="598">Sidi Rahal</option>
																		<option value="599">Tamensourte</option>
																		<option value="600">Tamesna</option>
																		<option value="601">Tanger</option>
																		<option value="602">Tantan</option>
																		<option value="603">Tarfaya</option>
																		<option value="604">Taza</option>
																		<option value="605">Temara</option>
																		<option value="606">Tetouan</option>
																		<option value="607">Tifelt</option>
																		<option value="608">Tiznit</option>
																		<option value="609">Autre ville</option>
																</select></td> </tr>
 			<tr> <td> Numéro de téléphone</td><td> 

										 			<input type="text" name="indicatif" value="+2126" disabled style="width:40px;"/>
										 			<input type="text"  name="telephone" value="" id="telephone" /></td> </tr>
			<tr> <td> Adresse email </td>      <td> <input type="text"  name="email" value="" id="" /></td> </tr>
 			<tr> <td> Mot de passe </td>      <td> <input type="password"  name="password" value="" id="" /></td> </tr>
 			<tr> <td> Confirmation de mot de passe</td>           <td> <input type="password"  name="passwordc" value="" id="passwordc" /></td> </tr>
 			<tr> <td>                  </td>  <td> <input type="submit"  name="ajouter" value="S'inscrire" id="" /></td> </tr>
 		</table>

 	</form>
  </div>