<?php

namespace Vandpibe\Test\Generator\Cilex;

use Cilex\Application;
use Vandpibe\Generator\HerokuGenerator;
use Vandpibe\Generator\Cilex\GeneratorServiceProvider;

/**
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 */
class GeneratorServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (!class_exists('Cilex\Application')) {
            $this->markTestSkipped('Cilex isn\'t available');
        }

        $this->application = new Application('generator-test');
        $this->provider = new GeneratorServiceProvider;
    }

    public function testRegister()
    {
        $this->provider->register($this->application);

        $this->assertInstanceOf('Vandpibe\Generator\HerokuGenerator', $this->application['vandpibe.generator.heroku']);
    }
}
