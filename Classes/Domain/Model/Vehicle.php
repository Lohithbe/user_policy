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
 * Vehicle
 */
class Vehicle extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * vehicleNumber
     *
     * @var string
     */
    protected $vehicleNumber = '';

    /**
     * model
     *
     * @var string
     */
    protected $model = '';

    /**
     * Returns the vehicleNumber
     *
     * @return string $vehicleNumber
     */
    public function getVehicleNumber()
    {
        return $this->vehicleNumber;
    }

    /**
     * Sets the vehicleNumber
     *
     * @param string $vehicleNumber
     * @return void
     */
    public function setVehicleNumber($vehicleNumber)
    {
        $this->vehicleNumber = $vehicleNumber;
    }

    /**
     * Returns the model
     *
     * @return string $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets the model
     *
     * @param string $model
     * @return void
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
}
