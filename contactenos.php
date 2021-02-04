<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos1.css">
	<title>Contactenos</title>
</head>
<body>
	<div class="contenedor">
		<?php include('includes/header.html');?>
		<?php include('includes/nav.html');?>

		<div class="l">
			<div class="subcaja">
			<h1>Contactese</h1>
		<div class="subsubcaja">		
	<form action="contactenos.php" method="get">
		<label>Nombre</label>
		<input class="color" type="text" name="pepe" placeholder="Ingrese su nombre">
		<label>Mail</label>
		<input  class="color" type="email" name="mail" placeholder="Ingrese su correo">
		<br><label><br>Mensaje:
		<br>
			<textarea class="color" cols='40' rows='5' name="mensaje"></textarea>
		</label>
		<br>
		<input class="boton" type="submit" name="procesar" value="Procesar">
		<br>		
</form>
</div>
</div>

<div class="subcaja1">
<h1>Nuestro local</h1>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.7206065763867!2d-58.365852985050275!3d-34.66175826807783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a33351d6d7f6ab%3A0x8dcb1681aa30bd73!2sIng%20Marconi%20750%2C%20Avellaneda%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1570838381421!5m2!1ses-419!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
<?php
if(isset($_GET ['procesar'])){
$nombre=$_GET['pepe'];
$mail=$_GET['mail'];
$mensaje=$_GET['mensaje'];
$header="Consulta";
$correodestino="paz.joel@tecnica7.edu.ar";
$asunto="Mensaje de prueba";
$consulta="Consulta enviada por ".$nombre."\n su correo es ".$mail."\n y consulta por ".$mensaje;
$m=mail($header,$correodestino,$asunto,$consulta);
if($m){
	echo "Mensaje enviado,en breve nos comunicaremos";
}
else
{
	echo "error al enviar el mensaje,intente nuevamente mas tarde";
}
}
?>
</div>
<?php include('includes/footer.html');?>

</div>	
</body>
</html>