<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">

<?php
	require("doctor_header.php");
?>


<link rel="stylesheet" type="text/css" href="contacter.css">

<div class="nos">
 
    
	<p class="s"><span>Contactez</span>-nous</p>
	<p class="n">Contactez-nous et nous vous répondrons dans les meilleurs délais.</p>
</div>	



<form>
<div class="vos">

	<h2>Une remarque ? Une question ?</h2>
	<table>
		<tr><td><input type="text" name="prenom" placeholder="Prénom*" required>
		<tr><td><input type="text" name="nom de famille" placeholder="Nom de famille*" required>
		<tr><td><input type="text" name="email" placeholder="E-mail*" required>
		<tr><td><input type="text" name="tele" placeholder="Téléphone" >
		<tr><td><select id="msg" name="msg">
				      <option value="message">Votre message concerne*...</option>
				      <option value="médecin">Un médecin</option>
				      <option value="probleme">Un problème technique</option>
				      <option value="probleme">Une pharmacie</option>
				      <option value="autre">Autre</option>
   				</select>
  		<tr><td><textarea name="msg" rows="4" cols="70" placeholder="Votre message*"></textarea>  	
		<tr><td><input type="submit" value="Enregistrer">			
		</select>
</div>			    	

</form>



