## About Laravel Google Translate
This package for automaticly translate words, phrases and create speech from text for Laravel. 

#### Composer

You need run composer terminal command:
```
composer require kucherenkoai/laravel-google-translate
```

#### config/app.php

In this config file we need add new Laravel Google Translate Provider form library.

````
'providers' => [
    ...
    ...
    ...
    Kucherenkoai\LaravelGoogleTranslate\LaravelGoogleTranslateProvider::class <-- new row in providers side 
];
````

#### Composer publish config

```
php artisan vendor:publish --provider="Kucherenkoai\LaravelGoogleTranslate\LaravelGoogleTranslateProvider"
```

After publish you will have new config file `/config/laravelGoogleTranslate.php`

#### .ENV file

Need add your credentials from google account into .env file

LARAVEL_GOOGLE_TRANSLATE_KEY="your_api_key"
LARAVEL_GOOGLE_TRANSLATE_TEXT_TO_SPEECH_CREDENTIALS="your_credentials_file"


#### EXAMPLE:


````
<?php

namespace App\Services\Translate;

use Kucherenkoai\LaravelGoogleTranslate\TranslateFacade as Translator;

class TranslateFacade {

    private Translator $translator;

    public function __construct()
    {
        $this->translator = new Translator();
    }

    //Make translate
    public function makeTranslate()
    {
        return $this->translator->makeTranslate('Hello world', 'en','rus');
    }

    //Create .mp4 speech file from text
    public function makeSpeechFromText()
    {
        return $this->translator->makeSpeechFromText('Hello world','en');
    }

    //Get all list of languages
    public function getTranslateLanguages()
    {
        $languages = $this->translate->getLanguages();
        return $languages->getLanguagesList();
    }

}
````
