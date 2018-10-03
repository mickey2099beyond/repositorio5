<?php
//conectar con el servidor
$conectar=@mysql_connect('localhost','root','');
//verificacion de laconexion
if(!$conectar)
{
	echo"No se pudo conectar con el servidor";
}else{
$base=mysql_select_db('bd_prueba');
if(!$base){
echo "No se encontro la base de datos";
	}
}
//recuperar variables
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email']
$password=$_POST['password'];
$password_confirmation=$_POST['password_confirmation'];

$sql="INSERT INTO registro (first_name,last_name,email,password,password_confirmation) VALUES ('$first_name','$last_name','$email','$password','$password_confirmation')";
//(first_name,last_name,email,password,password_confirmation)
//ejecutar la sentencia
$ejecutar=mysql_query($sql);
//verificar la ejecucion
if(!$ejecutar){
echo"Hubo algun error";
}else{
echo"Datos guardados correctamente";
}
?>
