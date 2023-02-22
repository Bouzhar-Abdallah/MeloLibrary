<?php

namespace App\Providers;

use Cloudinary\Cloudinary;
use Illuminate\Support\ServiceProvider;

class CloudinaryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('cloudinary', function ($app) {
            return new Cloudinary([
                'cloud' => [
                    'cloud_name' => 'doy8hfzvk',
                    'api_key' => '783828345481378',
                    'api_secret' => '_FiZxF0m1E6_HlMvf8ZEvQ8BQhM',
                ],
            ]);
        });
    }
}
