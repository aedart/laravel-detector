<?php namespace Aedart\Laravel\Detector\Interfaces;

use Aedart\Laravel\Detector\Contracts\ApplicationDetector;

/**
 * @deprecated Since version 3.0, use \Aedart\Laravel\Detector\Contracts\ApplicationDetector instead
 *
 * Interface Application Detector
 *
 * <br />
 *
 * Detects if a Foundation-Application instance is available and has not been
 * flushed
 *
 * @see \Illuminate\Contracts\Foundation\Application
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Laravel\Detector\Interfaces
 */
interface IApplicationDetector extends ApplicationDetector
{

}