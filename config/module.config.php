<?php

return [
    'controller_plugins' => [
        'factories' => [
            'MobileDetect' => MobileDetectModule\Mvc\Controller\Plugin\MobileDetectFactory::class,
            'mobileDetect' => MobileDetectModule\Mvc\Controller\Plugin\MobileDetectFactory::class,
        ],
    ],
    'view_helpers' => [
        'factories' => [
            'MobileDetect' => MobileDetectModule\View\Helper\MobileDetectFactory::class,
            'mobileDetect' => MobileDetectModule\View\Helper\MobileDetectFactory::class,
        ],
    ],
    'service_manager' => [
        'factories' => [
            Detection\MobileDetect::class => MobileDetectModule\Service\MobileDetectFactory::class,
            'MobileDetect' => MobileDetectModule\Service\MobileDetectFactory::class,
        ],
    ],
];
