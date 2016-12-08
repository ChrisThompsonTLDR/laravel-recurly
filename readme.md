recurly-client-laravel
======================

Integrates the Recurly API with Laravel 5

A simple [Laravel 5](http://four.laravel.com/) service provider for including the [Recurly PHP Client](https://github.com/recurly/recurly-client-php).

## Installation

Use composer to install the package.
```bash
composer require christhompsontldr/laravel-recurly
```


## Configure

To use the Recurly Service Provider, you must register the provider when bootstrapping your Laravel application.

Add 'Christhompsontldr\LaravelRecurly\ServiceProvider' to the list of service providers in app/config/app.php
```php
'Christhompsontldr\LaravelRecurly\ServiceProvider::class,',
```

Create a config file for the package
```bash
php artisan vendor:publish
```

Add your Recurly information to the your .env file using the keys found in config/recurly.php.

## Usage

http://docs.recurly.com/client-libraries/php
