<?php

namespace Vandpibe\Test\Generator;

use Vandpibe\Generator\UuidGenerator;

class UuidGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testGeneratesUuid()
    {
        $generator = new UuidGenerator;

        $matched = (boolean) preg_match('/^[[:xdigit:]]{8}-[[:xdigit:]]{4}-[[:xdigit:]]{4}-[[:xdigit:]]{4}-[[:xdigit:]]{12}$/', $generator->generate());

        $this->assertTrue($matched);
    }
}
