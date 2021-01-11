<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Interfaces\Factories;

use Google\Cloud\Translate\V2\TranslateClient;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\TranslateInterface;

interface TranslateFactoryInterface
{
    public function createTranslate(): TranslateInterface;


}
