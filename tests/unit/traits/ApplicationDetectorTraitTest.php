<?php

use Aedart\Laravel\Detector\Traits\ApplicationDetectorTrait;
use Aedart\Testing\Laravel\Traits\ApplicationInitiatorTrait;
use Aedart\Testing\TestCases\Unit\UnitTestCase;

/**
 * Class ApplicationDetectorTraitTest
 *
 * @group detector
 * @group detector-trait
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
     * @return PHPUnit_Framework_MockObject_MockObject|\Aedart\Laravel\Detector\Contracts\ApplicationDetector
     */
    protected function getTraitMock(){
        $m = $this->getMockForTrait(ApplicationDetectorTrait::class);
        return $m;
    }

    /******************************************************************************
     * Tests
     *****************************************************************************/

    /**
     * @test
     */
    public function containerIsNotAvailable(){
        $trait = $this->getTraitMock();
        $this->assertFalse($trait->isContainerAvailable());
    }

    /**
     * @test
     */
    public function applicationIsAvailable(){
        $this->startApplication();

        $trait = $this->getTraitMock();
        $this->assertTrue($trait->isApplicationAvailable());
    }

    /**
     * @test
     */
    public function applicationIsFlushed(){
        $this->startApplication();
        $this->stopApplication();

        $trait = $this->getTraitMock();
        $this->assertTrue($trait->hasBeenFlushed(app()));
    }
}