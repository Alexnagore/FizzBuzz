<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{

    /**
     * @test
     */
    public function trueAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker(1);

        $this->assertTrue($integerValue);
    }

    /**
     * @test
     */
    public function falseAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker('1');

        $this->assertFalse($integerValue);
    }

    /**
     * @test
     */
    public function equalsAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker(1);

        $this->assertEquals(true, $integerValue);
    }

    /**
     * @test
     */
    public function seis_es_fizz_return_true()
    {
        $example =new Example();

        $respuesta = $example->esFizz(6);

        $this->assertTrue($respuesta);
    }

    public function diez_es_buzz_return_true()
    {
        $example =new Example();

        $respuesta = $example->esBuzz(10);

        $this->assertTrue($respuesta);
    }

    public function quince_es_fizzbuzz_return_true()
    {
        $example =new Example();

        $respuesta = $example->fizzbuzz(15);

        $this->assertTrue($respuesta);
    }
}
