<?php
namespace SmartPAYD\UserPolicy\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class PolicyTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\UserPolicy\Domain\Model\Policy
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SmartPAYD\UserPolicy\Domain\Model\Policy();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPolicyNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPolicyName()
        );
    }

    /**
     * @test
     */
    public function setPolicyNameForStringSetsPolicyName()
    {
        $this->subject->setPolicyName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'policyName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTotalAmountReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTotalAmount()
        );
    }

    /**
     * @test
     */
    public function setTotalAmountForStringSetsTotalAmount()
    {
        $this->subject->setTotalAmount('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'totalAmount',
            $this->subject
        );
    }
}
