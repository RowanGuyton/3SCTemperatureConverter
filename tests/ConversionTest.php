<?php

require_once "TemperatureConverter.php";

use PHPUnit\Framework\TestCase;

class ConversionTest extends TestCase
{
    public function testConvertsFahrenheitToCelciusCorrectly(): void {
        $converter = new TemperatureConverter();
        $this->assertEquals(1.6666666666667, $converter->convertFahrenheitToCelcius(35));
    }

    public function testConvertsCelciusToFahrenheitCorrectly(): void {
        $converter = new TemperatureConverter();
        $this->assertEquals(95, $converter->convertCelciusToFahrenheit(35));
    }

    public function testCannotConvertToFahrenheitFromString(): void {
        $this->expectException(TypeError::class);
        $converter = new TemperatureConverter();
        $converter->convertCelciusToFahrenheit('string');
    }

    public function testCannotConvertToCelciusFromString(): void {
        $this->expectException(TypeError::class);
        $converter = new TemperatureConverter();
        $converter->convertFahrenheitToCelcius('string');
    }
}
