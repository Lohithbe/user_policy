<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Managementonpolicy',
            [
                'User' => 'list, show, new, create, edit, update, delete',
                'Policy' => 'list, show, new, create, edit, update, delete',
                'Bill' => 'list, show, new, create, edit, update, delete',
                'Vehicle' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'User' => 'create, update, delete',
                'Policy' => 'create, update, delete',
                'Bill' => 'create, update, delete',
                'Vehicle' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Userplugin',
            [
                'Policy' => 'list, show, edit, delete, update'
            ],
            // non-cacheable actions
            [
                'Policy' => 'list, show, edit, delete, update'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Billplugin',
            [
                'Policy' => 'list, show, edit, delete, update'
            ],
            // non-cacheable actions
            [
                'Policy' => 'list, show, edit, delete, update'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Policyplugin',
            [
                'Policy' => 'list, show, edit, delete, update'
            ],
            // non-cacheable actions
            [
                'Policy' => 'list, show, edit, delete, update'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Vehicleplugin',
            [
                'Policy' => 'list, show, edit, delete, update'
            ],
            // non-cacheable actions
            [
                'Policy' => 'list, show, edit, delete, update'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    managementonpolicy {
                        iconIdentifier = user_policy-plugin-managementonpolicy
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_managementonpolicy.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_managementonpolicy.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_managementonpolicy
                        }
                    }
                    userplugin {
                        iconIdentifier = user_policy-plugin-userplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_userplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_userplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_userplugin
                        }
                    }
                    billplugin {
                        iconIdentifier = user_policy-plugin-billplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_billplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_billplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_billplugin
                        }
                    }
                    policyplugin {
                        iconIdentifier = user_policy-plugin-policyplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_policyplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_policyplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_policyplugin
                        }
                    }
                    vehicleplugin {
                        iconIdentifier = user_policy-plugin-vehicleplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_vehicleplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_vehicleplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_vehicleplugin
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-managementonpolicy',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_managementonpolicy.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-userplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_userplugin.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-billplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_billplugin.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-policyplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_policyplugin.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-vehicleplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_vehicleplugin.svg']
			);
		
    }
);
