<?php

function media($notas){

	$somanotas = 0;
	$pesos = 0;
	foreach($notas as $posicao => $valor){
		$somanotas += $valor * ($posicao+1);
		$pesos += $posicao+1;
	}	
	$media=$somanotas/$pesos;
	return (int)round($media);
}

