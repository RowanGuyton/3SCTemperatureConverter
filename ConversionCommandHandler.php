<?php

require_once "TemperatureConverter.php";

use Webmozart\Console\Api\Args\Args;
use Webmozart\Console\Api\IO\IO;

class ConversionCommandHandler
{
    public function handle(Args $args, IO $io)
    {
        $converter = new TemperatureConverter();
        switch ($args->getArgument('format')) {
            case 'c':
                try {
                    $io->writeLine($args->getArgument('temperature') . ' degrees Fahrenheit converted to Celcius is: ' . $converter->convertFahrenheitToCelcius($args->getArgument('temperature')) . ' degrees');
                    break;
                } catch (TypeError $te) {
                    die("Formatting error. Please provide temperature flag in float format");
                }

            case 'f':
                try {
                    $io->writeLine($args->getArgument('temperature') . ' degrees Celcius converted to Fahrenheit is: ' . $converter->convertCelciusToFahrenheit($args->getArgument('temperature')) . ' degrees');
                    break;
                } catch (TypeError $te) {
                    die("Formatting error. Please provide temperature flag in float format");
                }

            default:
                throw new Exception("Please provide a valid conversion format flag: 'c' or 'f'.");
        }
    }
}
