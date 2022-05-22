<?php

class TemperatureConverter {

    public function convertCelciusToFahrenheit(float $temperature) {
        $result = ($temperature * (9 / 5)) + 32;
        return $result;
    }

    public function convertFahrenheitToCelcius(float $temperature) {
        $result = ($temperature - 32) * (5 / 9);
        return $result;
    }
}
