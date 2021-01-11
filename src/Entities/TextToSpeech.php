<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Entities;

use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\AudioEncoding;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\TextToSpeechInterface;
use Google\Cloud\TextToSpeech\V1\SynthesizeSpeechResponse;

class TextToSpeech implements TextToSpeechInterface {

    private TextToSpeechClient   $textToSpeechClient;
    private SynthesisInput       $synthesisInput;
    private VoiceSelectionParams $voiceSelectionParams;
    private AudioConfig          $audioConfig;

    public function __construct(TextToSpeechClient $textToSpeechClient, SynthesisInput $synthesisInput,
                                VoiceSelectionParams $voiceSelectionParams, AudioConfig $audioConfig)
    {

        $this->textToSpeechClient   = $textToSpeechClient;
        $this->synthesisInput       = $synthesisInput;
        $this->voiceSelectionParams = $voiceSelectionParams;
        $this->audioConfig          = $audioConfig;
    }

    public function makeSpeechFromText(string $text, string $language): SynthesizeSpeechResponse
    {
        $this->speechValidate($text,$language);
        $this->synthesisInput->setText($text);
        $this->voiceSelectionParams->setLanguageCode($language);
        $this->audioConfig->setAudioEncoding(AudioEncoding::MP3);
        return $this->textToSpeechClient->synthesizeSpeech($this->synthesisInput, $this->voiceSelectionParams, $this->audioConfig);
    }

    private function speechValidate(string $text, string $language)
    {
        if ($text == "") {
            throw new Exception("Text param can't be empty string");
        }
    }
}
