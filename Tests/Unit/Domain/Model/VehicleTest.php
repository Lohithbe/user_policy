<?php
namespace SmartPAYD\UserPolicy\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class VehicleTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\UserPolicy\Domain\Model\Vehicle
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SmartPAYD\UserPolicy\Domain\Model\Vehicle();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getVehicleNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVehicleNumber()
        );
    }

    /**
     * @test
     */
    public function setVehicleNumberForStringSetsVehicleNumber()
    {
        $this->subject->setVehicleNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vehicleNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getModelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModel()
        );
    }

    /**
     * @test
     */
    public function setModelForStringSetsModel()
    {
        $this->subject->setModel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'model',
            $this->subject
        );
    }
}
