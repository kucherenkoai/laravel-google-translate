<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Interfaces\Config;

interface ConfigInterface
{
    public function __construct();

    public function getTranslate(): array;

    public function getTextToSpeech(): array;
}
