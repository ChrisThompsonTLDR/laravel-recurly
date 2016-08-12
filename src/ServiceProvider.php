<?php

namespace Christhompsontldr\LaravelRecurly;

use \Recurly_Client;
use \Recurly_js;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        //  config
        $this->publishes([
           realpath(dirname(__DIR__)) . '/config/recurly.php' => config_path('recurly.php'),
        ], 'config');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        Recurly_Client::$subdomain = config('recurly.subdomain', null);
        Recurly_Client::$apiKey = config('recurly.api_key', null);
        Recurly_js::$privateKey = config('recurly.private_key', null);
	}
}