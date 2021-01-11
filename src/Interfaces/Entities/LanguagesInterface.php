<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities;

use Google\Cloud\Translate\V2\TranslateClient;
use Kucherenkoai\LaravelGoogleTranslate\Entities\Languages;

interface LanguagesInterface
{
    static function getInstance(TranslateClient $translateClient): Languages;

    public function addGoogleClient(TranslateClient $translateClient): void;

    public function getLanguagesList(): array;
}
