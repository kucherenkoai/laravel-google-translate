<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Interfaces\Factories;

use Google\Cloud\Translate\V2\TranslateClient;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\TextToSpeechInterface;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\TranslateInterface;

interface TextToSpeechFactoryInterface
{
    public function createTextToSpeech(): TextToSpeechInterface;


}
