<!DOCTYPE html>
<html lang="fr">
    
<?php
    require("header.php");
?>

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">

    <title>Ophtamologiste </title>

</head>
<body style="background-color: #e3e3e3;">
<h1 style="color: #17bebb;text-align:center;margin-bottom: 20px;margin-top: 150px;">Ophtamologiste</h1> 
<div class="container">

    
      <input class="form-control" id="myInput" type="text" placeholder="Chercher un ophtamologiste...">
  <br> 

</div>
  
<?php
$cfg['Lang'] = 'en-utf-8';
include('connect-mysql.php');
$con=mysql_connect("localhost:3306","mondnxhr_boxra","blah blah");
mysql_select_db("mondnxhr_docteur");
mysql_query("set names 'utf8'");
$r="SELECT * FROM ophtamologiste"; 
    $res = mysql_query($r); // execution de la requete
        echo"<div class='container'>
        <table class='table table-striped'>
            <thead>
                <tr>
                    
                </tr>
            </thead>
            <tbody id='myTable'>
                ";
                while ($data = mysql_fetch_array($res)){
                    echo"<tr style='background-color: white;border:white;color: #17bebb;'>";
                    echo"<th>" .$data['idy']. "&nbsp&nbsp&nbsp&nbsp" .$data['nom']; 
                    echo "<th>";
                    echo "<th>";
                    echo"<th>";
                    echo "<tr style='background-color: white;border:white;color: #17bebb;'>";
                    echo"<td>" .$data['adresse']; // afficher les donnees

                     if ($data["mobile"]==0) {
                                echo "<td>";
                            }else{
                                echo "<td>Mobile: ".$data["mobile"];
                            };    

                     if ($data["fix"]==0) {
                                # code...
                                echo "<td>";
                            }
                            else{
                                echo "<td>Fixe: ". $data["fix"];
                                echo "<td>"; };
                    echo "<tr><td><td><td><td>";
                    echo "<tr><td><td><td<<td>";
                }
                
            echo"</tbody>";
        echo"</table>";
        ?>
      <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
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

</html>

 <?php
    require("footer.php");
?>