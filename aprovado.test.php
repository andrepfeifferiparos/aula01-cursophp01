<?php

require 'aprovado.php';

class AprovadoTest extends PHPUnit_Framework_TestCase
{
    
    public function test_aprovacao_simples_1()
    {
    	$notas = array(10,10,10,10);
        $this->assertSame(true, aprovado($notas));
    }
    
    public function test_reprovado()
    {
    	$notas = array(0,0,0,0);
        $this->assertSame(false, aprovado($notas));
    }
    
    public function test_aprovado_segunda_chamada()
    {
    	$notas = array(5,5,5,8);
        $this->assertSame(true, aprovado($notas));
    } 
    public function test_aprovado_segunda_chamada_1()
    {
    	$notas = array(0,0,7,8);
        $this->assertSame(true, aprovado($notas));
    }
       
}



