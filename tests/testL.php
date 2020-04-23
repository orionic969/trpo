<?php

if (file_exists(__DIR__."/..//vendor/autoload.php")) {
    require __DIR__."/../vendor/autoload.php";
}

use KK\LinearEq;
use PHPUnit\Framework\TestCase;
use KK\KKException;

class LinearEqTest extends TestCase
{
    protected $linear;

    protected function setUp(): void
    {
        $this->linear=new LinearEq();
    }
    protected function tearDown(): void
    {
        $this->linear=NULL;
    }

    /*
     * Без исключений
     */
    public function testSolve_Regular_1()
    {
        $this->assertEquals(0.5,$this->linear->solvel(4,-2));
    }
    public function testSolve_Regular_2()
    {
        $this->assertEquals(3,$this->linear->solvel(3,-9));
    }
    /*
     * Крайние случаи
     */
    public function testSolve_ArgZero_1()
    {
        $this->assertEquals(0,$this->linear->solvel(2,0));
    }
    /*
     * Исключения
     */
    public function testSolve_Exception_1()
    {
        $this->expectException(KKException::class);
        $this->linear->solvel(0,0);
    }
    public function testSolve_Exception_2()
    {
        $this->expectException(KKException::class);
        $this->linear->solvel(0,2);
    }
}