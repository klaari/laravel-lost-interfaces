<?php

namespace Jalle19\Laravel\LostInterfaces\Providers;

/**
 * Interface for service providers
 *
 * @package Jalle19\Laravel\LostInterfaces\Providers
 */
interface ServiceProvider
{

    /**
     * Register bindings in the container
     */
    public function register();

}
