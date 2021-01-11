<?php

namespace Kucherenkoai\LaravelGoogleTranslate;

use Kucherenkoai\LaravelGoogleTranslate\Factories\TextToSpeechFactory;
use Kucherenkoai\LaravelGoogleTranslate\Factories\TranslateFactory;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\LanguagesInterface;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\TextToSpeechInterface;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\TranslateInterface;
use Google\Cloud\TextToSpeech\V1\SynthesizeSpeechResponse;

class TranslateFacade {

    private TranslateInterface $translate;
    private TextToSpeechInterface $textToSpeech;

    public function __construct()
    {
        $this->translate = (new TranslateFactory())->createTranslate();
        $this->textToSpeech = (new TextToSpeechFactory())->createTextToSpeech();
    }

    public function makeTranslate(string $text, string $original_language, string $translate_language): array
    {
        return $this->translate->makeTranslate($text, $original_language, $translate_language);
    }

    public function makeSpeechFromText(string $text, string $language): SynthesizeSpeechResponse
    {
        return $this->textToSpeech->makeSpeechFromText($text, $language);
    }
    public function getTranslateLanguages(): LanguagesInterface
    {
        return $this->translate->getLanguages();
    }



}
