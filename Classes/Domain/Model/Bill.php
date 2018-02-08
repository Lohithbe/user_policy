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
 * Bill
 */
class Bill extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * policyID
     *
     * @var string
     */
    protected $policyID = '';

    /**
     * vehicleID
     *
     * @var string
     */
    protected $vehicleID = '';

    /**
     * billAmount
     *
     * @var string
     */
    protected $billAmount = '';

    /**
     * Returns the policyID
     *
     * @return string $policyID
     */
    public function getPolicyID()
    {
        return $this->policyID;
    }

    /**
     * Sets the policyID
     *
     * @param string $policyID
     * @return void
     */
    public function setPolicyID($policyID)
    {
        $this->policyID = $policyID;
    }

    /**
     * Returns the vehicleID
     *
     * @return string $vehicleID
     */
    public function getVehicleID()
    {
        return $this->vehicleID;
    }

    /**
     * Sets the vehicleID
     *
     * @param string $vehicleID
     * @return void
     */
    public function setVehicleID($vehicleID)
    {
        $this->vehicleID = $vehicleID;
    }

    /**
     * Returns the billAmount
     *
     * @return string $billAmount
     */
    public function getBillAmount()
    {
        return $this->billAmount;
    }

    /**
     * Sets the billAmount
     *
     * @param string $billAmount
     * @return void
     */
    public function setBillAmount($billAmount)
    {
        $this->billAmount = $billAmount;
    }
}
