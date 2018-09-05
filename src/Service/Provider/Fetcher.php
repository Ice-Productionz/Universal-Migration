<?php

namespace IceProductionz\LaravelMigrator\Service\Provider;

use Pimple\Container;

class Fetcher implements \Pimple\ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['service.fetcher'] = function () {
            return new \IceProductionz\LaravelMigrator\Service\Fetcher\Fetcher();
        };
    }
}