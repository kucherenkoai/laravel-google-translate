<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Interfaces\Factories;

use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Config\ConfigInterface;

interface ConfigFactoryInterface
{
    public function createConfig(): ConfigInterface;
}
