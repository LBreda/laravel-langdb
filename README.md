# Laravel-LangDB

A package to add a language database in your Laravel application.

It contains a comprehensive list of languages and their ISO codes.

## Installation
You can install the package via composer:

    composer require lbreda/laravel-langdb

Then you need to refresh the language database using the command

    php artisan lbreda:refresh-lang-db

## Usage
The application adds a new model to your application: `LBreda\LaravelLangDb\Language`.

The model is a standard Eloquent model. Its tables is pre-filled with a comprehensive dataset.

Each language has the following properties (some of them may be `null`):

* `code_639_1`: ISO-639-1 language code
* `code_639_2t`: ISO-639-2/T language code
* `code_639_2b`: ISO-639-2/B language code
* `code_639_3`: ISO-639-3 language code
* `native_name`: Native language name
* `translatable_name`: A string you can pass to `__()` or `trans()` to have the language name in your application language

## Contribute
You can contribute via GitHub pull requests. Feel free to report bugs via GitHub.

Translations are VERY well accepted.
