<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_userpolicy_domain_model_user',
        'label' => 'full_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'full_name,user_i_d,start_date,end_date,policy,vehicle,bill',
        'iconfile' => 'EXT:user_policy/Resources/Public/Icons/tx_userpolicy_domain_model_user.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, full_name, user_i_d, start_date, end_date, policy, vehicle, bill',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, full_name, user_i_d, start_date, end_date, policy, vehicle, bill, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_userpolicy_domain_model_user',
                'foreign_table_where' => 'AND tx_userpolicy_domain_model_user.pid=###CURRENT_PID### AND tx_userpolicy_domain_model_user.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'full_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_userpolicy_domain_model_user.full_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'user_i_d' => [
            'exclude' => true,
            'label' => 'LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_userpolicy_domain_model_user.user_i_d',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'start_date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_userpolicy_domain_model_user.start_date',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date',
                'default' => '0000-00-00'
            ],
        ],
        'end_date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_userpolicy_domain_model_user.end_date',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date',
                'default' => '0000-00-00'
            ],
        ],
        'policy' => [
            'exclude' => true,
            'label' => 'LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_userpolicy_domain_model_user.policy',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_userpolicy_domain_model_policy',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'vehicle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_userpolicy_domain_model_user.vehicle',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_userpolicy_domain_model_vehicle',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'bill' => [
            'exclude' => true,
            'label' => 'LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_userpolicy_domain_model_user.bill',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_userpolicy_domain_model_bill',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
    
    ],
];
