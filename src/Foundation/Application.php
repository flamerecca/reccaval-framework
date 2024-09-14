<?php

namespace Reccaval\Foundation;

class Application
{
    /**
     * The Reccaval framework version.
     *
     * @var string
     */
    const VERSION = '0.0.1';

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }
}