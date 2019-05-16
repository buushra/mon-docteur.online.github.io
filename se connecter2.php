<?php
	require("doctor_header.php");
?>
<link rel="stylesheet" type="text/css" href="se connecter2.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">




	<h2>Bienvenue à nouveau sur mon-docteur.online</h2>
		<h3>Merci de vous identifier.</h3>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>E-mail</b></label>
      <input type="text" placeholder="Entrez votre email" name="uname" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>
        
      <button type="submit">S'identifier'</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi sur cet appareil
      </label>
    </div>

    <div class="container" style="background-color:#17bebb">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="#">&emsp;Mot de passe oublié?</a></span>
    </div>
  </form>
</div>



</body>
</html>
