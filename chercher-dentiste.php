<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("doctor");
	
	$r= "select* from dentiste where nom='$Nom'";
	$res=mysql_query($r);
	$data=mysql_fetch_array($res);
	


echo"<div class='container'>
        <table class='table table-striped'>
            <thead>
                <tr>
                    
                </tr>
            </thead>
            <tbody>
                ";
                
                    echo"<tr style='background-color: white;border:white;'>";
                    echo"<th>" .$data['idd']. "&nbsp&nbsp&nbsp&nbsp" .$data['Nom']; 
                    echo "<th>";
                    echo "<th>";
                    echo"<th>";
                    echo "<tr style='background-color: white;border:white;'>";
                    echo"<td>" .$data['adresse']; // afficher les donnees
                   /*  if ($data["email"]!=0) {
                                # code...
                                echo "<td>";
                            }else{    
                                echo "<td>E-mail: ".$data["email"];
                            };*/

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
                                echo "<td>Fix: ". $data["fix"]; };
                    echo "<tr><td><td><td><td>";
                    echo "<tr><td><td><td<<td>";
                
                
            echo"</tbody>";
        echo"</table>";
        ?>