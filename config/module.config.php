<?php

return [
    'controller_plugins' => [
        'factories' => [
            'MobileDetect' => MobileDetectModule\Mvc\Controller\Plugin\MobileDetectFactory::class,
        ],
        'aliases' => [
            'mobileDetect' => 'MobileDetect',
        ],
    ],
    'view_helpers' => [
        'factories' => [
            'MobileDetect' => MobileDetectModule\View\Helper\MobileDetectFactory::class,
        ],
        'aliases' => [
            'mobileDetect' => 'MobileDetect',
        ],
    ],
    'service_manager' => [
        'factories' => [
            Detection\MobileDetect::class => MobileDetectModule\Service\MobileDetectFactory::class,
        ],
        'aliases' => [
            'MobileDetect' => Detection\MobileDetect::class,
        ],
    ],
];
