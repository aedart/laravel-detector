<?php

use Aedart\Laravel\Detector\Interfaces\IApplicationDetector;
use Aedart\Testing\Laravel\Traits\ApplicationInitiatorTrait;
use Aedart\Testing\TestCases\Unit\UnitTestCase;

/**
 * Class ApplicationDetectorTraitTest
 *
 * @coversDefaultClass
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class ApplicationDetectorTraitTest extends UnitTestCase
{
    use ApplicationInitiatorTrait;

    public function _after()
    {
        $this->stopApplication();

        parent::_after();
    }

    /******************************************************************************
     * Helpers
     *****************************************************************************/

    /**
     * Get mock for given trait
     * @return PHPUnit_Framework_MockObject_MockObject|Aedart\Laravel\Detector\Interfaces\IApplicationDetector
     */
    protected function getTraitMock(){
        $m = $this->getMockForTrait('Aedart\Laravel\Detector\Traits\ApplicationDetectorTrait');
        return $m;
    }

    /******************************************************************************
     * Tests
     *****************************************************************************/

    /**
     * @test
     * @covers ::isContainerAvailable
     */
    public function containerIsNotAvailable(){
        $trait = $this->getTraitMock();
        $this->assertFalse($trait->isContainerAvailable());
    }

    /**
     * @test
     * @covers ::isApplicationAvailable
     * @covers ::isApplicationAvailable
     * @covers ::isContainerAvailable
     */
    public function applicationIsAvailable(){
        $this->startApplication();

        $trait = $this->getTraitMock();
        $this->assertTrue($trait->isApplicationAvailable());
    }

    /**
     * @test
     * @covers ::hasBeenFlushed
     */
    public function applicationIsFlushed(){
        $this->startApplication();
        $this->stopApplication();

        $trait = $this->getTraitMock();
        $this->assertTrue($trait->hasBeenFlushed(app()));
    }
}