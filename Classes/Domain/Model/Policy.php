<?php
namespace SmartPAYD\UserPolicy\Domain\Model;

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
 * Policy
 */
class Policy extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * policyName
     *
     * @var string
     */
    protected $policyName = '';

    /**
     * totalAmount
     *
     * @var string
     */
    protected $totalAmount = '';

    /**
     * Returns the policyName
     *
     * @return string $policyName
     */
    public function getPolicyName()
    {
        return $this->policyName;
    }

    /**
     * Sets the policyName
     *
     * @param string $policyName
     * @return void
     */
    public function setPolicyName($policyName)
    {
        $this->policyName = $policyName;
    }

    /**
     * Returns the totalAmount
     *
     * @return string $totalAmount
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets the totalAmount
     *
     * @param string $totalAmount
     * @return void
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }
}
