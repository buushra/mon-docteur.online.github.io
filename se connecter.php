<?php
	require("doctor_header.php");
?>
<link rel="stylesheet" type="text/css" href="se connecter.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<h2>Bienvenue à nouveau sur mon-docteur.online</h2>

<form>
  <fieldset>
    <legend>Merci de vous identifier.</legend>
	

    <div class="connecter">
      <label for="uname"><b>E-mail</b></label>
      <input type="text" placeholder="Entrez votre email" name="uname" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>
        
      <button style="font-size: 18px;" type="submit">S'identifier</button>
      <label>
        <input type="checkbox" name="remember"> Se souvenir de moi sur cet appareil
      </label>
    

      <span class="psw"> <a style="color: #488b8f;" href="oublie.php">Mot de passe oublié?</a></span>
    </div>
  </fieldset>
</form>

<?php
  require("footer.php");
?>

