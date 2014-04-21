<?php namespace App\Services;

use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        /**
         * Test
         *
         * @since 0.1
         */
        $this->app['Payment'] = $this->app->share(function($app)
        {
            return new App\Services\Facades\Payment();
        });
    }
}