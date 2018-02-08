<?php
namespace SmartPAYD\UserPolicy\Tests\Unit\Controller;

/**
 * Test case.
 */
class BillControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\UserPolicy\Controller\BillController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SmartPAYD\UserPolicy\Controller\BillController::class)
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
    public function listActionFetchesAllBillsFromRepositoryAndAssignsThemToView()
    {

        $allBills = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $billRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $billRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBills));
        $this->inject($this->subject, 'billRepository', $billRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('bills', $allBills);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenBillToView()
    {
        $bill = new \SmartPAYD\UserPolicy\Domain\Model\Bill();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('bill', $bill);

        $this->subject->showAction($bill);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenBillToBillRepository()
    {
        $bill = new \SmartPAYD\UserPolicy\Domain\Model\Bill();

        $billRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $billRepository->expects(self::once())->method('add')->with($bill);
        $this->inject($this->subject, 'billRepository', $billRepository);

        $this->subject->createAction($bill);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenBillToView()
    {
        $bill = new \SmartPAYD\UserPolicy\Domain\Model\Bill();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('bill', $bill);

        $this->subject->editAction($bill);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenBillInBillRepository()
    {
        $bill = new \SmartPAYD\UserPolicy\Domain\Model\Bill();

        $billRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $billRepository->expects(self::once())->method('update')->with($bill);
        $this->inject($this->subject, 'billRepository', $billRepository);

        $this->subject->updateAction($bill);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenBillFromBillRepository()
    {
        $bill = new \SmartPAYD\UserPolicy\Domain\Model\Bill();

        $billRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $billRepository->expects(self::once())->method('remove')->with($bill);
        $this->inject($this->subject, 'billRepository', $billRepository);

        $this->subject->deleteAction($bill);
    }
}
