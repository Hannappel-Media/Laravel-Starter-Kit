<?php

use Artesaos\SEOTools\Providers\SEOToolsServiceProvider;

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,
    App\Providers\HorizonServiceProvider::class,
    SEOToolsServiceProvider::class,
];
