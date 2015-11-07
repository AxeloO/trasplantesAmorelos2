<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("wordpress",$con);
$query='INSERT INTO registrardonante(nombre,res,especificar,testigo1,testigo2,tel,fecha) VALUES("'.$_POST['nombre'].'","'.$_POST['res'].'","'.$_POST['especificar'].'","'.$_POST['testigo1'].'","'.$_POST['testigo2'].'","'.$_POST['tel'].'","'.$_POST['fecha'].'")';


mysql_query($query,$con);

echo '<script language="javascript"> alert("Registro exitoso");  </script>'; 

header('Location: http://localhost/wordpress/registro-del-donante/');
?>