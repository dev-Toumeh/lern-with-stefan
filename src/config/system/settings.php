<?php
return [
    'BE' => [
        'debug' => true,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$Tm5OWmlSeTU0R2EydlhPSg$pU3Y7OYvawe18ilCcuk01zrXljCUTCb2nSnSFQgYQSA',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'typo3',
                'driver' => 'pdo_mysql',
                'host' => 'db',
                'password' => '222568',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'admin',
            ],
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'styleguide' => [
            'boolean_1' => '0',
            'boolean_2' => '1',
            'boolean_3' => '',
            'boolean_4' => '0',
            'color_1' => 'black',
            'color_2' => '#000000',
            'color_3' => '000000',
            'color_4' => '',
            'compat_default_1' => 'value',
            'compat_default_2' => '',
            'compat_input_1' => 'value',
            'compat_input_2' => '',
            'int_1' => '1',
            'int_2' => '',
            'int_3' => '-100',
            'int_4' => '2',
            'intplus_1' => '1',
            'intplus_2' => '',
            'intplus_3' => '2',
            'nested' => [
                'input_1' => 'aDefault',
                'input_2' => '',
            ],
            'offset_1' => 'x,y',
            'offset_2' => 'x',
            'offset_3' => ',y',
            'offset_4' => '',
            'options_1' => 'default',
            'options_2' => 'option_2',
            'options_3' => '',
            'predefined' => [
                'boolean_1' => '1',
                'int_1' => '42',
            ],
            'small_1' => 'value',
            'small_2' => '',
            'string_1' => 'value',
            'string_2' => '',
            'user_1' => '0',
            'wrap_1' => 'value',
            'wrap_2' => '',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => true,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => '0',
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => '1',
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '0b6e2cc4cb9c607eac8689891d14fe294acd471dda700b13b2da160ad9e62df389af504532802bbc6729bb1a50bae360',
        'exceptionalErrors' => 12290,
        'features' => [
            'security.backend.enforceContentSecurityPolicy' => true,
            'security.usePasswordPolicyForFrontendUsers' => true,
        ],
        'sitename' => 'mywebsite.local',
        'systemMaintainers' => [
            1,
        ],
    ],
];
