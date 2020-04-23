<?php

if (file_exists(__DIR__."/..//vendor/autoload.php")) {
    require __DIR__."/../vendor/autoload.php";
}

use KK\QuadraticEq;
use PHPUnit\Framework\TestCase;
use KK\KKException;

class QuadraticEqTest extends TestCase
{
    protected $quad;

    protected function setUp(): void
    {
        $this->quad=new QuadraticEq();
    }
    protected function tearDown(): void
    {
        $this->quad=NULL;
    }

    /*
     * Без исключений
     */
    public function testSolve_Regular1()
    {
        $this->assertEquals([-1.5,-0.5],$this->quad->solve(4,8,3));
    }
    public function testSolve_Regular2()
    {
        $this->assertEquals([6,20],$this->quad->solve(1,-26,120));
    }
    /*
     * Крайние случаи
     */
    public function testSolve_ArgZero1()
    {
        $this->assertEquals(-1,$this->quad->solve(0,2,2));
    }
    public function testSolve_ArgZero2()
    {
        $this->assertEquals(0,$this->quad->solve(3,0,0));
    }
    /*
     * Исключения
     */
    public function testSolve_Exception1()
    {
        $this->expectException(KKException::class);
        $this->quad->solve(0,0,0);
    }
    public function testSolve_Exception2()
    {
        $this->expectException(KKException::class);
        $this->quad->solve(11,2,2);
    }
}