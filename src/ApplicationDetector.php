<?php namespace Aedart\Laravel\Detector;

use Aedart\Laravel\Detector\Contracts\ApplicationDetector as ApplicationDetectorInterface;
use Aedart\Laravel\Detector\Traits\ApplicationDetectorTrait;

/**
 * Application Detector
 *
 * @see IApplicationDetector
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Laravel\Detector
 */
class ApplicationDetector implements ApplicationDetectorInterface
{
    use ApplicationDetectorTrait;
}