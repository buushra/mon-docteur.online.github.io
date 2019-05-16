<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">

<?php 
	require("doctor_header.php");
?>


<link rel="stylesheet" type="text/css" href="annoncer.css">

<title>Annoncer avec nous</title>
<form class="annoncer">
	<fieldset>
	<legend>Informations sur le demandeur : </legend>
	<table class="tab">
		<tr><td>&emsp;Nom(*):
			<td><input type="text" name="nom" required placeholder="Entrez votre nom"  >
		<tr><td>&emsp;Prénom(*):
			<td><input type="text" name="prenom" required placeholder="Entrez votre prénom">
		<tr><td>&emsp;Téléphone:
			<td><input type="text" name="tel" required placeholder="Entrez votre téléphone">
		<tr><td>&emsp;E-mail(*): 
			<td><input type="text" name="mail" required placeholder="Entrez votre e-mail ">
		<tr><td>&emsp;Spécialité(*)
			<td><select id="msg" name="msg">
					  <option value="choisir">Choisir votre spécialié</option>
				      <option value="dentiste">Dentiste</option>
				      <option value="cardiologue">Cardiologue</option>
				      <option value="dermatologue">Dermatologue</option>
				      <option value="gastroentérologue">Gastroentérologue</option>
				      <option value="gynécologue">Gynécologue</option>
				      <option value="medecin generale">Médecin générale</option>
				      <option value="nutritionniste">Nutritionniste</option>
				      <option value="neurologue">Neurologue</option>
				      <option value="oreille-nez-gorge">Oreille-Nez-Gorge</option>
				      <option value="orthopédiste">Orthopédiste</option>
				      <option value="pediatre">Pediatre</option>
				      <option value="physiothérapeute">Physiothérapeute</option>
				      <option value="psychiatre">Psychiatre</option>
				      <option value="spécialiste des yeux">Spécialiste des yeux</option>
				      <option value="urologue">Urologue</option>
				      <option value="vétérinaire">Vétérinaire</option>
   				</select>		
		<tr><td>&emsp;Message:
			<td><textarea name="msg" rows="5" cols="31"></textarea>

		<br>
		<tr><td>&emsp;<input type="submit" name="Envoyer">
			<td>&emsp;<input type="reset" name="Effacer">	
		<tr><td>
		<tr><td>
		<tr><td>		
	</table>	
	</fieldset>
</form>

<?php
	require("footer.php");
?>	