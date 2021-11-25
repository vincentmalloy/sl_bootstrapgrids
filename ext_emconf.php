<?php

/**
 * Extension Manager/Repository config file for ext "sl_bootstrapgrids".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'bootstrap gridelements',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'gridelements' => '9.7.0-9.7.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SimonLundius\\BootstrapGrids\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Simon Lundius',
    'author_email' => 'simon.lundius@gmail.com',
    'author_company' => 'Simon Lundius',
    'version' => '1.0.0',
];
