<!DOCTYPE html>
<html lang="fr">
<?php
    require("header.php");
?>

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="trouver.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <title>Trouver votre docteur</title>

</head>


<body>
<h1 class="tr">Trouver votre docteur</h1>

<form class="example" action="/action_page.php">
		  <input list="search"  placeholder="Spécialité, praticien, pharmacie..." name="search" >
		    <datalist id="search">
			  	<option value="Dentiste">
			  	<option value="Dermplogue">
			  	<option value="dfhfh">
		    </datalist>
		  <input list="ville" name="location" placeholder="Où?">
		  	<datalist id="ville">
		  		<option value="Tétouan">
		  		
		  	</datalist>
		  <input class="Chercher" src="image/search.png" name="submit" type="image" value="Chercher" aria-label="Search through site content">
</form>

<script>
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>

<?php
    require("footer.php");
?>	