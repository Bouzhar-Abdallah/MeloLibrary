<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CloudinaryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cloudinary';
    }
}
