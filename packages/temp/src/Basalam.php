<?php

namespace Basalam;

use Basalam\Contracts\ProductServiceInterface;

class Basalam
{
    public static function product(): ProductServiceInterface
    {
        $version = config('basalam.version', 'v1');
        $serviceClass = "\\Basalam\\V".strtoupper($version)."\\Services\\ProductService";

        if (!class_exists($serviceClass)) {
            throw new \Exception("Basalam SDK version '$version' not found.");
        }

        return app($serviceClass);
    }
}
