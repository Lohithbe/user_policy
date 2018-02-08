<?php
namespace SmartPAYD\UserPolicy\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class BillTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\UserPolicy\Domain\Model\Bill
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SmartPAYD\UserPolicy\Domain\Model\Bill();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPolicyIDReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPolicyID()
        );
    }

    /**
     * @test
     */
    public function setPolicyIDForStringSetsPolicyID()
    {
        $this->subject->setPolicyID('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'policyID',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVehicleIDReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVehicleID()
        );
    }

    /**
     * @test
     */
    public function setVehicleIDForStringSetsVehicleID()
    {
        $this->subject->setVehicleID('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vehicleID',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBillAmountReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBillAmount()
        );
    }

    /**
     * @test
     */
    public function setBillAmountForStringSetsBillAmount()
    {
        $this->subject->setBillAmount('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'billAmount',
            $this->subject
        );
    }
}
