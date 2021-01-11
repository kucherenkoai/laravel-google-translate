<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities;
use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;

interface TextToSpeechInterface
{
    public function __construct(TextToSpeechClient $textToSpeechClient, SynthesisInput $synthesisInput,
                                VoiceSelectionParams $voiceSelectionParams, AudioConfig $audioConfig);

    public function makeSpeechFromText(string $text, string $language);
}
