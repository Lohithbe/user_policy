<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SmartPAYD.UserPolicy',
            'Managementonpolicy',
            'ManagementOnPolicy'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SmartPAYD.UserPolicy',
            'Userplugin',
            'UserPlugin'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SmartPAYD.UserPolicy',
            'Billplugin',
            'BillPlugin'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SmartPAYD.UserPolicy',
            'Policyplugin',
            'PolicyPlugin'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SmartPAYD.UserPolicy',
            'Vehicleplugin',
            'VehiclePlugin'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('user_policy', 'Configuration/TypoScript', 'UserPolicy');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_userpolicy_domain_model_user', 'EXT:user_policy/Resources/Private/Language/locallang_csh_tx_userpolicy_domain_model_user.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_userpolicy_domain_model_user');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_userpolicy_domain_model_policy', 'EXT:user_policy/Resources/Private/Language/locallang_csh_tx_userpolicy_domain_model_policy.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_userpolicy_domain_model_policy');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_userpolicy_domain_model_bill', 'EXT:user_policy/Resources/Private/Language/locallang_csh_tx_userpolicy_domain_model_bill.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_userpolicy_domain_model_bill');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_userpolicy_domain_model_vehicle', 'EXT:user_policy/Resources/Private/Language/locallang_csh_tx_userpolicy_domain_model_vehicle.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_userpolicy_domain_model_vehicle');

    }
);
