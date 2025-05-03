<?php

namespace BasalamProxy;

use Illuminate\Support\ServiceProvider;

class BasalamProxyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(BasalamProxy::class, function ($app) {
            return new BasalamProxy();
        });
    }
}
