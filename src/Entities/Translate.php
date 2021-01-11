<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Entities;

use Google\Cloud\Translate\V2\TranslateClient;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\LanguagesInterface;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\TranslateInterface;
use \Google\Cloud\TextToSpeech\V1\SynthesizeSpeechResponse;

class Translate implements TranslateInterface {

    private TranslateClient $translateClient;
    private LanguagesInterface $languages;

    public function __construct(TranslateClient $translateClient, LanguagesInterface $languages)
    {
        $this->translateClient = $translateClient;
        $this->languages = $languages;
    }

    public function makeTranslate(string $text, string $original_language, string $translate_language): array
    {
        $this->translateValidate($text,$original_language,$translate_language);

        return $this->translateClient->translate($text, [
            'source' => $original_language,
            'target' => $translate_language,
        ]);
    }

    private function translateValidate(string $text, string $original_language, string $translate_language)
    {
        if($text == ""){
            throw new Exception("Text param can't be empty string");
        }
    }

    public function getLanguages(): LanguagesInterface
    {
        return $this->languages;
    }
}
