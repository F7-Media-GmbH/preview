<?php
return [
    'frontend' => [
        'tx_preview/preview' => [
            'target' => F7\Preview\Http\Middleware\Preview::class,
            'after' => [
                'typo3/cms-frontend/site'
            ],
            'before' => [
                'typo3/cms-frontend/page-resolver',
                'typo3/cms-frontend/static-route-resolver',
                'typo3/cms-redirects/redirecthandler'
            ]
        ],
    ]
];
