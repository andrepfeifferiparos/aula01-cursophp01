<?php

function fizzbuzz($numeros){
	$saida ='';
	foreach($numeros as $valor){
    	if ($valor % 15 == 0){
    		$saida .= ' '.'Fizzbuzz';
    	}
    	elseif ($valor % 5 == 0){
    		$saida .= ' '.'Buzz';
    	}
    	elseif ($valor % 3 == 0){
    		$saida .= ' '.'Fizz';
    	}
    	else{
    		$saida .= ' '.$valor;
    	}
	}
	return trim($saida);
}