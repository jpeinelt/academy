<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:academy/Resources/Private/Language/locallang_db.xml:tx_academy_domain_model_hcards_tel',
        'label' => 'type',
        'label_alt' => 'value',
        'label_alt_force' => 1,
        'default_sortby' => 'ORDER BY parent, type ASC',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => 2,
        'versioning_followPages' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'searchFields' => 'value',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('academy') . 'Resources/Public/Icons/tx_academy_domain_model_hcards_tel.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => '
            hidden, 
            parent, 
            type, 
            value, 
            freetext, 
            sys_language_uid, 
            l10n_parent, 
            l10n_diffsource, 
            sorting
        ',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
                hidden,
                parent,
                type,
                value,
                freetext,
                sys_language_uid,
                l10n_parent,
                l10n_diffsource,
                sorting
        '
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0,
            ]
        ],
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_academy_domain_model_hcards_tel',
                'foreign_table_where' => 'AND tx_academy_domain_model_hcards_tel.pid=###CURRENT_PID### AND tx_academy_domain_model_hcards_tel.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'max' => '255',
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'sorting' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        'starttime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => '10',
                'max' => '20',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0',
            ),
        ),
        'endtime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0',
                'range' => array(
                    'upper' => mktime(0, 0, 0, 12, 31, date('Y') + 10),
                    'lower' => mktime(0, 0, 0, date('m') - 1, date('d'), date('Y'))
                ),
            ),
        ),
        'parent' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:academy/Resources/Private/Language/locallang_db.xml:tx_academy_domain_model_hcards_tel.parent',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_academy_domain_model_hcards',
                'foreign_table' => 'tx_academy_domain_model_hcards',
                'maxitems' => 1,
                'size' => 1,
                'eval' => 'int',
                'default' => 0,
            ),
        ),
        'type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:academy/Resources/Private/Language/locallang_db.xml:tx_academy_domain_model_hcards_tel.type',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array(
                        'LLL:EXT:academy/Resources/Private/Language/locallang_db.xml:tx_academy_domain_model_hcards_tel.type.I.21',
                        '21'
                    ),
                    array(
                        'LLL:EXT:academy/Resources/Private/Language/locallang_db.xml:tx_academy_domain_model_hcards_tel.type.I.22',
                        '22'
                    ),
                    array(
                        'LLL:EXT:academy/Resources/Private/Language/locallang_db.xml:tx_academy_domain_model_hcards_tel.type.I.23',
                        '23'
                    ),
                    array(
                        'LLL:EXT:academy/Resources/Private/Language/locallang_db.xml:tx_academy_domain_model_hcards_tel.type.I.24',
                        '24'
                    ),
                ),
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ),
        ),
        'value' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:academy/Resources/Private/Language/locallang_db.xml:tx_academy_domain_model_hcards_tel.value',
            'config' => array(
                'type' => 'input',
                'size' => '255',
                'max' => '255',
                'eval' => 'trim'
            ),
        ),
        'freetext' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:academy/Resources/Private/Language/locallang_db.xml:tx_academy_domain_model_hcards_tel.freetext',
            'config' => array(
                'type' => 'input',
                'size' => '255',
                'max' => '255',
                'eval' => 'trim'
            ),
        ),
    ),
);
