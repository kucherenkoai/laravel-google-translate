<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Factories;

use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;
use Kucherenkoai\LaravelGoogleTranslate\Config\Config;
use Kucherenkoai\LaravelGoogleTranslate\Entities\TextToSpeech;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\TextToSpeechInterface;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Factories\TextToSpeechFactoryInterface;


class TextToSpeechFactory implements TextToSpeechFactoryInterface
{
    public function createTextToSpeech(): TextToSpeechInterface
    {
        $config = new Config();

        $textToSpeechClient   = new TextToSpeechClient($config->getTextToSpeech());
        $synthesisInput       = new SynthesisInput();
        $voiceSelectionParams = new VoiceSelectionParams();
        $audioConfig          = new AudioConfig();
        return  new TextToSpeech($textToSpeechClient,$synthesisInput,$voiceSelectionParams,$audioConfig);
    }
}
