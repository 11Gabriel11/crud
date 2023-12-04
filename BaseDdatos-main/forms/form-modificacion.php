<?php
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Modificacion</title>
	<link rel="stylesheet" href="../css/formAltas.css">
</head>
<body>

<div class="container">
	<h3 class="altaTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="altaInput" action="../funcionalidad/modificacion.php" method="POST"  enctype="multipart/form-data">
	<div class="grupoInputs">
		<label for="apellido">Campo Clave ID:</label>
		<input type="text" name="id"><br>	
    </div>

		<br><br>
		Campos a modificar:<br>

		<div class="grupoInputs">
		<label for="nombre">Apellido:</label>
		<input type="text" name="apellido"><br>
	    </div>

		<div class="grupoInputs">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre"><br>
	    </div>

		<div class="grupoInputs">
		<label for="edad">Edad:</label>
		<input type="text" name="edad"><br>
	    </div>

		<div class="grupoInputs">
		<label for="edad">Clave:</label>
		<input type="password" name="clave"><br>
	    </div>

		<div class="grupoInputs">
		<label for="foto">Archivo</label>
		<input type="file" name="foto"><br>
	    </div>

		<div class="btn-submit">
		<input type="submit" value="Modificar"><br>
	    </div>
	</form>
</div>
	
</body>
</html>