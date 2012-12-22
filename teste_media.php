<?php

require 'media.php';

class MediaTest extends PHPUnit_Framework_TestCase
{
    public function test_1_nota_1()
    {
    	$notas = array(1);
        $this->assertSame(1, media($notas));
    }
    public function test_1_nota_10()
    {
    	$notas = array(10);
        $this->assertSame(10, media($notas));
    }
    public function test_2_notas_2_e_2()
    {
    	$notas = array(2,2);
        $this->assertSame(2, media($notas));
    }
    public function test_2_notas_2_e_3()
    {
    	$notas = array(2,3);
        $this->assertSame(3, media($notas));
    }
    
	public function test_2_notas_1_e_3()
    {
    	$notas = array(1,3);
        $this->assertSame(2, media($notas));
    }
    public function test_3_notas_1_2_e_3()
    {
    	$notas = array(1,2,3);
        $this->assertSame(2, media($notas));
    }
    public function test_4_notas_10()
    {
    	$notas = array(10,10,10,10);
        $this->assertSame(10, media($notas));
    }
    public function test_4_notas_5_5_8_e_8()
    {
    	$notas = array(5,5,8,8);
        $this->assertSame(7, media($notas));
    }
    public function test_5_notas_1_2_3_4_e_5()
    {
    	$notas = array(1,2,3,4,5);
        $this->assertSame(4, media($notas));
    }
    public function test_4_notas_0()
    {
    	$notas = array(0,0,0,0);
        $this->assertSame(0, media($notas));
    }
    
}



