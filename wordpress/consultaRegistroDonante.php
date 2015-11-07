
<html> 
<body> 
  
<?php 
$link = mysql_connect("localhost", "root",""); 
mysql_select_db("wordpress", $link); 
$result = mysql_query("SELECT * FROM  registrardonante", $link); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Nombre</td><td>Opt</td><td>Especificar</td><td>Testigo1</td><td>Testigo2</td><td>telefono</td><td>LugaryFecha</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["nombre"]."</td><td>".$row["res"]."</td><td>".$row["especificar"]."</td><td>".$row["testigo1"]."</td><td>".$row["testigo2"]."</td><td>".$row["tel"]."</td><td>".$row["fecha"]."</td></tr> \n"; 
   } while ($row = mysql_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?> 
  
</body> 
</html>