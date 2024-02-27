<?php
return [
    'ctrl' => [
        'title' => 'Number of Trophies',
        'label' => 'champions_League_trophies',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'rootLevel' => 0,
//        'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'searchFields' => 'title,description',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'columns' => [
        'champions_League_trophies' => [
            'label' => 'Champions League trophies',
            'config' => [
                'type' => 'input',
            ],
        ],
//        'label' => [
//            'label' => 'label_DZR',
//            'config' => [
//                'type' => 'input',
//            ],
//        ],
    ],
    'types' => [
        [
            'showitem' => 'champions_League_trophies',
        ],
    ],
];