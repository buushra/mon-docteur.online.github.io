<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
	$con=mysql_connect("localhost","root","") or die("could not connect");
	mysql_select_db("doctor");
	
	if(isset($_POST['search'])){
		$searching = $_POST['search'];
		$searching = preg_replace("#[^0-9a-z]#i", "", $searching);
		$query = mysql_query("select * from dentiste where Nom like '%$searching%'");
		$count = mysql_num_rows($query);
		if($count == 0){
			$output = 'Il n y a pas de dentiste portant ce nom';
		}else{
			while($row = mysql_fetch_array($query)){
				$fname = $row['Nom'];
				$lname = $row['lname'];
				$id = $row['ic'];
				$output .= '<div>'.$fname.''.$lname.'</div>'; 
			}
		}
	}
	?>

<form action="dentiste2.php" method="POST" >
	<input type="text" name="search" placeholder="chercher un dentiste">
	<input type="submit" value=">>">
</form>	

<? php print("$output");?>