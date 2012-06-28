<?php

namespace Vandpibe\Generator\Cilex;

use Cilex\Application;
use Vandpibe\Generator\HerokuGenerator;

/**
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 */
class GeneratorServiceProvider implements \Cilex\ServiceProviderInterface
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
}
