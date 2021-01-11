<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Factories;

use Google\Cloud\Translate\V2\TranslateClient;
use Kucherenkoai\LaravelGoogleTranslate\Config\Config;
use Kucherenkoai\LaravelGoogleTranslate\Entities\Languages;
use Kucherenkoai\LaravelGoogleTranslate\Entities\Translate;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Factories\TranslateFactoryInterface;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\TranslateInterface;

class TranslateFactory  implements TranslateFactoryInterface
{
    public function createTranslate(): TranslateInterface
    {
        $config = new Config();
        $translateClient = new TranslateClient($config->getTranslate());
        $language = Languages::getInstance($translateClient);
        return new Translate($translateClient,$language);
    }
}
