<?php  require_once("config.php")?>
<html>
	<head>
		<title>Calcular data</title>
	</head>
	<body>
		<form method="POST">
			<label for="horai">Hora Inicial:</label>
			<input type="time" name="horai"><br>
			<label for="horaf">Hora Final:</label>
			<input type="time" name="horaf"><br>
			<button tipe="submit">Enviar</button>
		</form>
		<?php
		error_reporting(0);
          $hini=$_POST['horai'];
          $hfin=$_POST['horaf'];

          $cad= new Cadastro($hini,$hfin);
          
		?>
		<span style="color:red"><?php $cad->convertH(); ?></span>
	</body>
</html>