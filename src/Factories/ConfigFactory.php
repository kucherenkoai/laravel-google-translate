<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Factories;

use Kucherenkoai\LaravelGoogleTranslate\Config\Config;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Config\ConfigInterface;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Factories\ConfigFactoryInterface;

class ConfigFactory implements ConfigFactoryInterface
{
    public function createConfig(): ConfigInterface
    {
        return new Config();
    }
}
