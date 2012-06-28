<?php

namespace Vandpibe\Generator\Silex;

use Silex\Application;
use Vandpibe\Generator\HerokuGenerator;

/**
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 */
class GeneratorServiceProvider implements \Silex\ServiceProviderInterface
{
    /**
     * @param Application $app
     */
    public function register(Application $app)
    {
        $app['vandpibe.generator.heroku'] = $app->share(function () use ($app) {
            return new HerokuGenerator();
        });
    }

    /**
     * @param Application $app
     */
    public function boot(Application $app)
    {
        // Nothing to do
    }
}
