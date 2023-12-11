<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="../css/formAltas.css">
</head>
<body>


<div class="container">
    <h3 class="altaTitulo">FORMULARIO gfdgfd DE ALTAS</h3>
	<form class="altaInput" action="../funcionalidad/altas.php" method="POST" enctype="multipart/form-data">
		
		<div class="grupoInputs">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" required /><br>
        </div>

		<div class="grupoInputs">
		<label for="apellido">Apellido:</label>
		<input type="text" name="apellido" required /><br>
		</div>
		
		<div class="grupoInputs">
		<label for="edad">Edad:</label>
		<input type="number" name="edad"><br>
	    </div>

		<div class="grupoInputs">
		<label for="clave">Clave</label>
		<input type="password" name="clave"><br>
	    </div>

		<div class="grupoInputs">
		<label for="pin">Pin</label>
		<input type="number" name="pin"><br>
	    </div>

		<div class="grupoInputs">
		<label for="foto">Archivo</label>
		<input type="file" name="foto"><br>
	    </div>

		<div class="btn-submit">
		<input type="submit"  revalue="Grabar"><br>
	    </div>
	</form>
</div>

	
</body>
</html>