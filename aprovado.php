<?php

require_once 'media.php';

function aprovado($notas){
	$media = media($notas);
	
	if(
	$media>=7 || 
	($media>=6 && $notas[3]>=8) || 
	($media>=5 && media(array(2=>$notas[2], 3=>$notas[3]))>=8)
	){
		return true;
	}else{
		return false;
	}
	
}