<?php

namespace Vandpibe\Test\Generator\Silex;

use Silex\Application;
use Vandpibe\Generator\HerokuGenerator;
use Vandpibe\Generator\Silex\GeneratorServiceProvider;

/**
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 */
class GeneratorServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (!class_exists('Silex\Application')) {
            $this->markTestSkipped();
        }

        $this->application = new Application;
        $this->provider = new GeneratorServiceProvider;
    }

    public function testRegister()
    {
        $this->provider->register($this->application);

        $this->assertInstanceOf('Vandpibe\Generator\HerokuGenerator', $this->application['vandpibe.generator.heroku']);
    }

    public function testBoot()
    {
        $application = clone $this->application;

        $this->provider->boot($this->application);

        $this->assertEquals($application, $this->application);
    }
}
