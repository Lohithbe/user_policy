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
 * PolicyController
 */
class PolicyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $policies = $this->policyRepository->findAll();
        $this->view->assign('policies', $policies);
    }

    /**
     * action show
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Policy $policy
     * @return void
     */
    public function showAction(\SmartPAYD\UserPolicy\Domain\Model\Policy $policy)
    {
        $this->view->assign('policy', $policy);
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
     * @param \SmartPAYD\UserPolicy\Domain\Model\Policy $newPolicy
     * @return void
     */
    public function createAction(\SmartPAYD\UserPolicy\Domain\Model\Policy $newPolicy)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->policyRepository->add($newPolicy);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Policy $policy
     * @ignorevalidation $policy
     * @return void
     */
    public function editAction(\SmartPAYD\UserPolicy\Domain\Model\Policy $policy)
    {
        $this->view->assign('policy', $policy);
    }

    /**
     * action update
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Policy $policy
     * @return void
     */
    public function updateAction(\SmartPAYD\UserPolicy\Domain\Model\Policy $policy)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->policyRepository->update($policy);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Policy $policy
     * @return void
     */
    public function deleteAction(\SmartPAYD\UserPolicy\Domain\Model\Policy $policy)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->policyRepository->remove($policy);
        $this->redirect('list');
    }
}
