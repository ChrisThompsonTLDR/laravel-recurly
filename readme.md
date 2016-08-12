recurly-client-laravel
======================

Integrates the Recurly API with Laravel 5

A simple [Laravel 5](http://four.laravel.com/) service provider for including the [Recurly PHP Client](https://github.com/recurly/recurly-client-php).

## Installation

Install via [Composer](http://getcomposer.org) by requiring the
`christhompsontldr/laravel-recurly` package in your project's `composer.json`.

```json
{
    "require": {
        "christhompsontldr/laravel-recurly": "1.*"
    }
}
```

Run composer update to pull in the libraries.
```bash
composer update
```


## Configure

To use the Recurly Service Provider, you must register the provider when bootstrapping your Laravel application.

Add 'Christhompsontldr\LaravelRecurly\ServiceProvider' to the list of service providers in app/config/app.php
```php
'Christhompsontldr\LaravelRecurly\ServiceProvider::class,',
```

Create a config file for the package
```bash
php artisan config:publish christhompsontldr/laravel-recurly
```

Add your Recurly information to the your .env file using the keys found in config/recurly.php.

## Usage

http://docs.recurly.com/client-libraries/php
