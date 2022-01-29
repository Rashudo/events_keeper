<?php

declare(strict_types=1);

namespace MySite\app\Support\Traits;

/**
 * Trait SingletonTrait
 * @package MySite\app\Support\Traits
 */
trait SingletonTrait
{
    /**
     * forbid create
     * SingletonTrait constructor.
     */
    public function __construct()
    {
    }

    /**
     * forbid clone
     */
    public function __clone()
    {
    }

    /**
     * forbid deserialize
     */
    public function __wakeup()
    {
    }
}
