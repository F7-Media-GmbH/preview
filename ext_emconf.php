<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Previews',
    'description' => 'Generate URLs that grant access to hidden languages without a backend login',
    'category' => 'be',
    'state' => 'stable',
    'uploadfolder' => 0,
    'clearCacheOnLoad' => 0,
    'author' => 'Marc Willmann',
    'author_email' => 'mw@f7.de',
    'author_company' => 'F7 Media GmbH',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
