<?php
require_once __DIR__.'/includes/config.php';
?><!DOCTYPE html>
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html charset=utf-8">
	<link rel="stylesheet" type="text/css" href="<?= $app->resuelve('/css/estilo.css') ?>" />
  	<title>Registro</title>
</head>
<body>
<div id="contenedor">
	<?php
		$app->doInclude('comun/cabecera.php');
		$app->doInclude('comun/sidebarIzq.php');
	?>
	
		<div id="contenido">
			<?php $formRegister = new \es\ucm\fdi\abd\FormularioRegistro(); $formRegister->gestiona(); ?>
		</div>
	<?php
		$app->doInclude('comun/pie.php');
	?>
</div>
</body>
</html>