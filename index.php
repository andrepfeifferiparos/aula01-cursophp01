<?php
require 'fizzbuzz.php';

if(isset($_GET['acao'])){
	if($_GET['acao'] == 'executar'){
		$numeros = array();
		for($i = 1; $i <= 100; $i++){
			$numeros[] = $i;
		}
		$saida = fizzbuzz($numeros);
	}
}
?>
<html>
<head>
</head>
<body>
	<?php if(!empty($saida)):  ?>
		<?php print $saida; ?>
	<?php endif; ?>
	<a href="index.php?acao=executar">Executar o fizzbuzz completo</a>
</body>
</html>