<?php

namespace Aedart\Laravel\Detector\Contracts;

use Illuminate\Contracts\Foundation\Application;

/**
 * Application Detector
 *
 * <br />
 *
 * Detects if a Foundation-Application instance is available and has not been
 * flushed
 *
 * @see \Illuminate\Contracts\Foundation\Application
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Laravel\Detector\Contracts
 */
interface ApplicationDetector
{
    /**
     * Check if a Laravel Application instance is available and
     * has not been flushed
     *
     * @return bool True if a Laravel application is available and not yet flushed, false if
     *              application is not available Or if it is available, but has been flushed!
     */
    public function isApplicationAvailable() : bool;

    /**
     * Check if there is an application instance (the container) available
     *
     * <b>Warning</b>: Method does NOT check if eventual application
     * instance has been flushed.
     *
     * @see hasBeenFlushed()
     * @see \Illuminate\Contracts\Container\Container
     *
     * @return bool True if an application instance is available, false if not
     */
    public function isContainerAvailable() : bool;

    /**
     * Check if the given application instance has been flushed
     *
     * @param Application $application The Laravel application instance
     *
     * @return bool True if the given application instance has been flushed, false if not
     */
    public function hasBeenFlushed(Application $application) : bool;
}