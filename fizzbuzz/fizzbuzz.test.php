<?php

require 'fizzbuzz.php';

class StackTest extends PHPUnit_Framework_TestCase
{
    public function testPassandoUm()
    {
    	$numeros = array(1);
        $this->assertSame('1', fizzbuzz($numeros));
    }
    
    public function testPassandoTres()
    {
    	$numeros = array(3);
        $this->assertSame('Fizz', fizzbuzz($numeros));
    }
    
    public function testPassandoCinco()
    {
    	$numeros = array(5);
        $this->assertSame('Buzz', fizzbuzz($numeros));
    }
    public function testPassandoDez()
    {
    	$numeros = array(10);
        $this->assertSame('Buzz', fizzbuzz($numeros));
    }
    public function testPassandoQuinze()
    {
    	$numeros = array(15);
        $this->assertSame('Fizzbuzz', fizzbuzz($numeros));
    }
    public function testPassandoUmeTres()
    {
    	$numeros = array(1,3);
        $this->assertSame('1 Fizz', fizzbuzz($numeros));
    }
    public function testPassandoDoisQuatro()
    {
    	$numeros = array(2,4);
        $this->assertSame('2 4', fizzbuzz($numeros));
    }
}


