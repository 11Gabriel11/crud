
<html lang="es">
</html>


<?php 



$id = $_POST['id'];
$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$cl = $_POST['clave'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

$base = "gestionsubir";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "la conexion fue exitosa "."<br>";
}else{
	echo "la conexion ha fallado "."<br>";
}

if($fotoTamanio > 0)
	{
		$fp = fopen($foto,"rb");
		$contenido = fread($fp,$fotoTamanio);
		$contenido = addslashes($contenido);
		fclose($fp);
	



$cadena = "UPDATE  personas SET apellido = '$ape', nombre = '$nom', edad = '$ed', foto = '$contenido', clave = '$cl' WHERE ID = '$id'";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	print "se ha insertado un registro"."<br>";
	print "<a class='btn' href='../forms/form-altas.php'>Volver</a>
	<style>
		body{
			display: flex;
			justify-content: center;
			margin: 0;
    		padding: 0;
    		background-color:rgb(187, 79, 187);
			margin: 220px;
			font-size: 30px;
		}
		.btn{
			color: rgb(214, 135, 214);
    		background-color: black;
			height: 30px;
		}
	</style>";

}else{
	print "NO se ha generado un registro"."<br>";
	print "<a class='btn' href='../forms/form-altas.php'>Volver</a>
	<style>
		body{
			display: flex;
			justify-content: center;
			margin: 0;
    		padding: 0;
    		background-color:rgb(187, 79, 187);
			margin: 220px;
			font-size: 30px;
		}
		.btn{
			color: rgb(214, 135, 214);
    		background-color: black;
			height: 30px;
		}
	</style>";
}

}
else
print "No se puede subir el archivo";

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>