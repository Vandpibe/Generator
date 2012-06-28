<?php

/*
 * This file is part of the Vandpibe package.
 *
 * (c) Henrik Bjornskov <henrik@bjrnskov.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vandpibe\Generator;

/**
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 */
interface GeneratorInterface
{
    /**
     * Generates a value
     *
     * @return string
     */
    public function generate();
}
