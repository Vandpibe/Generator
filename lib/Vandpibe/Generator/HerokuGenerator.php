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
class HerokuGenerator implements GeneratorInterface
{
    /**
     * @var array
     */
    protected $nouns = array();

    /**
     * @var array
     */
    protected $adjectives = array();

    /**
     * @param array $adjectives
     * @param array $nounds
     */
    public function __construct(array $adjectives = null, array $nouns = null)
    {
        $prefix  = __DIR__ . '/Resources/data';
        $options = FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES;

        $this->nouns      = $nouns      ?: file($prefix . '/nouns', $options);
        $this->adjectives = $adjectives ?: file($prefix . '/adjectives', $options);
    }

    /**
     * {@inheritdoc}
     */
    public function generate()
    {
        shuffle($this->adjectives);
        shuffle($this->nouns);

        return current($this->adjectives) . '-' . current($this->nouns) . '-' . rand(1, 99);
    }
}
