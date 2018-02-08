<?php
namespace SmartPAYD\UserPolicy\Controller;

/***
 *
 * This file is part of the "UserPolicy" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * BillController
 */
class BillController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $bills = $this->billRepository->findAll();
        $this->view->assign('bills', $bills);
    }

    /**
     * action show
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Bill $bill
     * @return void
     */
    public function showAction(\SmartPAYD\UserPolicy\Domain\Model\Bill $bill)
    {
        $this->view->assign('bill', $bill);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Bill $newBill
     * @return void
     */
    public function createAction(\SmartPAYD\UserPolicy\Domain\Model\Bill $newBill)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->billRepository->add($newBill);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Bill $bill
     * @ignorevalidation $bill
     * @return void
     */
    public function editAction(\SmartPAYD\UserPolicy\Domain\Model\Bill $bill)
    {
        $this->view->assign('bill', $bill);
    }

    /**
     * action update
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Bill $bill
     * @return void
     */
    public function updateAction(\SmartPAYD\UserPolicy\Domain\Model\Bill $bill)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->billRepository->update($bill);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Bill $bill
     * @return void
     */
    public function deleteAction(\SmartPAYD\UserPolicy\Domain\Model\Bill $bill)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->billRepository->remove($bill);
        $this->redirect('list');
    }
}
