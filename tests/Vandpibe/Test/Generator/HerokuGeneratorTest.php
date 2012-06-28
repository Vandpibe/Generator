<?php

/*
 * This file is part of the Vandpibe package.
 *
 * (c) Henrik Bjornskov <henrik@bjrnskov.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vandpibe\Tests\Generator;

use Vandpibe\Generator\HerokuGenerator;

/**
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 */
class HerokuGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerateReturnFormat()
    {
        $this->generator = new HerokuGenerator();
        $this->assertRegExp('/^([a-z]+)\-([a-z]+)\-([1-9]{1}([0-9]{1,2})?)$/', $this->generator->generate());
    }

    public function testGenerateWithFixedValues()
    {
        $this->generator = new HerokuGenerator(array('adjective'), array('noun'));

        $this->assertRegExp('/^adjective\-noun\-([1-9]{1}([0-9]{1,2})?)$/', $this->generator->generate());
    }
}
