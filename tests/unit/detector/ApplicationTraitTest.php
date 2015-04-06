<?php

use Aedart\Laravel\Detector\ApplicationDetector;

/**
 * Class ApplicationTraitTest
 *
 * @coversDefaultClass
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class ApplicationTraitTest extends \Codeception\TestCase\Test
{

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

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