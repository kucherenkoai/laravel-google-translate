<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Entities;

use Google\Cloud\Translate\V2\TranslateClient;
use Kucherenkoai\LaravelGoogleTranslate\Interfaces\Entities\LanguagesInterface;

class Languages implements LanguagesInterface {

    private static array $instances = [];
    private TranslateClient $translateClient;
    public array $languagesList = [];


    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(TranslateClient $translateClient): Languages
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
            self::$instances[$cls]->addGoogleClient($translateClient);
        }
        return self::$instances[$cls];
    }


    public function addGoogleClient(TranslateClient $translateClient): void
    {
        if (!isset($this->translateClient)){
            $this->translateClient = $translateClient;
        }
    }

    public function getLanguagesList(): array
    {
        if(!$this->translateClient){
            throw new \Exception("google Client not found");
        }

        if(empty($this->languagesList)){
            $this->languagesList = $this->translateClient->localizedLanguages(['target' => 'en']);
        }

        return $this->languagesList;

    }

}
