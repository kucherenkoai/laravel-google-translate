<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities;
use Google\Cloud\Translate\V2\TranslateClient;
use Kucherenkoai\LaravelGoogleTranslate\Entities\Languages;

interface TranslateInterface
{
    public function __construct(TranslateClient $translateClient, Languages $languages);

    public function makeTranslate(string $text, string $original_language, string $translate_languag);

    public function getLanguages();
}
