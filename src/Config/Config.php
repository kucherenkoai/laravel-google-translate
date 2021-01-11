<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Config;

use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Config\ConfigInterface;

class Config implements ConfigInterface {

    private array $translateConfig = [];
    private array $textToSpeechConfig = [];

    public function __construct()
    {
        $this->translateConfig = ['key' => config('laravelGoogleTranslate.translate_key',null)];
        $this->textToSpeechConfig = ['credentials' => config('laravelGoogleTranslate.text_to_speech_credentials',null)];
    }

    public function getTranslate(): array
    {
        return $this->translateConfig;
    }

    public function getTextToSpeech(): array
    {
        return $this->textToSpeechConfig;
    }

}
