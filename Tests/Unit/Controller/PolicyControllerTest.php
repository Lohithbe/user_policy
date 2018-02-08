<?php
namespace SmartPAYD\UserPolicy\Tests\Unit\Controller;

/**
 * Test case.
 */
class PolicyControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\UserPolicy\Controller\PolicyController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SmartPAYD\UserPolicy\Controller\PolicyController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllPoliciesFromRepositoryAndAssignsThemToView()
    {

        $allPolicies = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $policyRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $policyRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPolicies));
        $this->inject($this->subject, 'policyRepository', $policyRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('policies', $allPolicies);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPolicyToView()
    {
        $policy = new \SmartPAYD\UserPolicy\Domain\Model\Policy();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('policy', $policy);

        $this->subject->showAction($policy);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenPolicyToPolicyRepository()
    {
        $policy = new \SmartPAYD\UserPolicy\Domain\Model\Policy();

        $policyRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $policyRepository->expects(self::once())->method('add')->with($policy);
        $this->inject($this->subject, 'policyRepository', $policyRepository);

        $this->subject->createAction($policy);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenPolicyToView()
    {
        $policy = new \SmartPAYD\UserPolicy\Domain\Model\Policy();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('policy', $policy);

        $this->subject->editAction($policy);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenPolicyInPolicyRepository()
    {
        $policy = new \SmartPAYD\UserPolicy\Domain\Model\Policy();

        $policyRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $policyRepository->expects(self::once())->method('update')->with($policy);
        $this->inject($this->subject, 'policyRepository', $policyRepository);

        $this->subject->updateAction($policy);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenPolicyFromPolicyRepository()
    {
        $policy = new \SmartPAYD\UserPolicy\Domain\Model\Policy();

        $policyRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $policyRepository->expects(self::once())->method('remove')->with($policy);
        $this->inject($this->subject, 'policyRepository', $policyRepository);

        $this->subject->deleteAction($policy);
    }
}
