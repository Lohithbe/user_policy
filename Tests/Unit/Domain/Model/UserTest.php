<?php
namespace SmartPAYD\UserPolicy\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class UserTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\UserPolicy\Domain\Model\User
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SmartPAYD\UserPolicy\Domain\Model\User();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFullNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFullName()
        );
    }

    /**
     * @test
     */
    public function setFullNameForStringSetsFullName()
    {
        $this->subject->setFullName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fullName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUserIDReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUserID()
        );
    }

    /**
     * @test
     */
    public function setUserIDForStringSetsUserID()
    {
        $this->subject->setUserID('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'userID',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStartDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getStartDate()
        );
    }

    /**
     * @test
     */
    public function setStartDateForDateTimeSetsStartDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setStartDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'startDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEndDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEndDate()
        );
    }

    /**
     * @test
     */
    public function setEndDateForDateTimeSetsEndDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEndDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'endDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPolicyReturnsInitialValueForPolicy()
    {
        self::assertEquals(
            null,
            $this->subject->getPolicy()
        );
    }

    /**
     * @test
     */
    public function setPolicyForPolicySetsPolicy()
    {
        $policyFixture = new \SmartPAYD\UserPolicy\Domain\Model\Policy();
        $this->subject->setPolicy($policyFixture);

        self::assertAttributeEquals(
            $policyFixture,
            'policy',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVehicleReturnsInitialValueForVehicle()
    {
        self::assertEquals(
            null,
            $this->subject->getVehicle()
        );
    }

    /**
     * @test
     */
    public function setVehicleForVehicleSetsVehicle()
    {
        $vehicleFixture = new \SmartPAYD\UserPolicy\Domain\Model\Vehicle();
        $this->subject->setVehicle($vehicleFixture);

        self::assertAttributeEquals(
            $vehicleFixture,
            'vehicle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBillReturnsInitialValueForBill()
    {
        self::assertEquals(
            null,
            $this->subject->getBill()
        );
    }

    /**
     * @test
     */
    public function setBillForBillSetsBill()
    {
        $billFixture = new \SmartPAYD\UserPolicy\Domain\Model\Bill();
        $this->subject->setBill($billFixture);

        self::assertAttributeEquals(
            $billFixture,
            'bill',
            $this->subject
        );
    }
}
