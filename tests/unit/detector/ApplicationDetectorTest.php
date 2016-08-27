<?php

use Aedart\Laravel\Detector\ApplicationDetector;
use Aedart\Testing\TestCases\Unit\UnitTestCase;

/**
 * Class ApplicationTraitTest
 *
 * @coversDefaultClass Aedart\Laravel\Detector\ApplicationDetector
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class ApplicationDetectorTest extends UnitTestCase
{

    /******************************************************************************
     * Helpers
     *****************************************************************************/

    /******************************************************************************
     * Tests
     *****************************************************************************/

    /**
     * @test
     */
    public function createNewInstance(){
        try {
            $detector = new ApplicationDetector();

            $this->assertFalse($detector->isApplicationAvailable());
        } catch (\Exception $e){
            $this->fail(sprintf('%s', $e));
        }
    }

}