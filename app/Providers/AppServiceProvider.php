<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        //

        \Braintree\Configuration::environment(env('BRAINTREE_ENV'));
        \Braintree\Configuration::merchantId(env('BRAINTREE_MERCHANT_ID'));
        \Braintree\Configuration::publicKey(env('BRAINTREE_PUBLIC_KEY'));
        \Braintree\Configuration::privateKey(env('BRAINTREE_PRIVATE_KEY'));
    }
}
