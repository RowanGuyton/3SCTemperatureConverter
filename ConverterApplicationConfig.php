<?php

require_once "./vendor/autoload.php";
require_once "ConversionCommandHandler.php";

use Webmozart\Console\Config\DefaultApplicationConfig;
use Webmozart\Console\Api\Args\Format\Argument;

class ConverterApplicationConfig extends DefaultApplicationConfig
{
    protected function configure()
    {
        parent::configure();
        
        $this
            ->beginCommand('convert')
            ->setDescription('Convert a given temperature from Fahrenheit to Celcius, or vice versa.')
            ->addArgument('temperature', Argument::REQUIRED & Argument::FLOAT, 'The temperature to be converted.')
            ->addArgument('format', Argument::REQUIRED & Argument::STRING, 'The temperature format to be converted to.')
            ->setHandler(new ConversionCommandHandler())
            ->end();
    }
}
