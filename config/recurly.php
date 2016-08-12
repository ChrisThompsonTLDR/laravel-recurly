<?php
return [
    /**
    * Your Recurly subdomain
    */
    'subdomain' => env('RECURLY_SUBDOMAIN'),

    /**
    * API key to connect to Recurly
    */
    'api_key' => env('RECURLY_API_KEY'),

    /**
    * Only needed if you plan on using the Recurly JS lib.
    */
    'private_key' => env('RECURLY_PRIVATE_KEY'),
];