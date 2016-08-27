<?php namespace Aedart\Laravel\Detector;

use Aedart\Laravel\Detector\Interfaces\IApplicationDetector;
use Aedart\Laravel\Detector\Traits\ApplicationDetectorTrait;

/**
 * Class Application Detector
 *
 * @see IApplicationDetector
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Laravel\Detector
 */
class ApplicationDetector implements IApplicationDetector
{
    use ApplicationDetectorTrait;
}