<?php
return [
    'ctrl' => [
        'title' => 'football teams',
        'label' => 'team_name',
        'label-alt' => 'establish_year',
        'label-alt_force' => true,
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
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'columns' => [
        'team_name' => [
            'label' => 'Team Name',
            'config' => [
                'type' => 'input',
            ],
        ],
        'establish_year' => [
            'label' => 'Establish Year',
            'description' => 'cols=20, rows=2',
            'config' => [
                'type' => 'text',
                'cols' => 20,
                'rows' => 2
            ],
        ],
        'Champions_League_trophies' => [
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_teams_trophies',
            ],
        ],
    ],
    'types' => [
        [
            'showitem' => 'team_name, establish_year, Champions_League_trophies',
        ],
    ],
];