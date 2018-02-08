<?php
namespace SmartPAYD\UserPolicy\Tests\Unit\Controller;

/**
 * Test case.
 */
class VehicleControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\UserPolicy\Controller\VehicleController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SmartPAYD\UserPolicy\Controller\VehicleController::class)
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
    public function listActionFetchesAllVehiclesFromRepositoryAndAssignsThemToView()
    {

        $allVehicles = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $vehicleRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $vehicleRepository->expects(self::once())->method('findAll')->will(self::returnValue($allVehicles));
        $this->inject($this->subject, 'vehicleRepository', $vehicleRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('vehicles', $allVehicles);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenVehicleToView()
    {
        $vehicle = new \SmartPAYD\UserPolicy\Domain\Model\Vehicle();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('vehicle', $vehicle);

        $this->subject->showAction($vehicle);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenVehicleToVehicleRepository()
    {
        $vehicle = new \SmartPAYD\UserPolicy\Domain\Model\Vehicle();

        $vehicleRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $vehicleRepository->expects(self::once())->method('add')->with($vehicle);
        $this->inject($this->subject, 'vehicleRepository', $vehicleRepository);

        $this->subject->createAction($vehicle);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenVehicleToView()
    {
        $vehicle = new \SmartPAYD\UserPolicy\Domain\Model\Vehicle();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('vehicle', $vehicle);

        $this->subject->editAction($vehicle);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenVehicleInVehicleRepository()
    {
        $vehicle = new \SmartPAYD\UserPolicy\Domain\Model\Vehicle();

        $vehicleRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $vehicleRepository->expects(self::once())->method('update')->with($vehicle);
        $this->inject($this->subject, 'vehicleRepository', $vehicleRepository);

        $this->subject->updateAction($vehicle);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenVehicleFromVehicleRepository()
    {
        $vehicle = new \SmartPAYD\UserPolicy\Domain\Model\Vehicle();

        $vehicleRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $vehicleRepository->expects(self::once())->method('remove')->with($vehicle);
        $this->inject($this->subject, 'vehicleRepository', $vehicleRepository);

        $this->subject->deleteAction($vehicle);
    }
}
