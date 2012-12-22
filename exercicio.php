<?php
require_once 'media.php';
require_once 'aprovado.php';

if(isset($_GET['nota1'])){
	$notas = array($_GET['nota1'], $_GET['nota2'], $_GET['nota3'], $_GET['nota4']);	
	$media = media($notas);
	$aprovado = aprovado($notas);
}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php if(isset($media)): ?>
	<?php if($aprovado): ?>
		Parabéns! Você foi aprovado!<br />
	<?php else: ?>
		Você foi reprovado.<br />
	<?php endif; ?>
	Sua média foi <?php print $media; ?><br />
<?php endif; ?>

<form action="exercicio.php" method="get">
nota 1: <input type="text" name="nota1" /><br />
nota 2: <input type="text" name="nota2" /><br />
nota 3: <input type="text" name="nota3" /><br />
nota 4: <input type="text" name="nota4" /><br />
<input type="submit" value="calcular" />
</form>
</body>
</html>