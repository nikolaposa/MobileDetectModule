<?php
/**
 * This file is part of the MobileDetectModule package.
 *
 * Copyright (c) Nikola Posa <posa.nikola@gmail.com>
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

use MobileDetectModule\Mvc\Controller\Plugin\MobileDetectFactory as MobileDetectControllerFactory;
use MobileDetectModule\Service\MobileDetectFactory as MobileDetectServiceFactory;
use MobileDetectModule\View\Helper\MobileDetectFactory as MobileDetectViewFactory;

return [
    'service_manager'    => [
        'factories' => [
            'MobileDetect' => MobileDetectServiceFactory::class,
        ],
    ],
    'controller_plugins' => [
        'factories' => [
            'mobileDetect' => MobileDetectControllerFactory::class,
        ],

    ],
    'view_helpers'       => [
        'factories' => [
            'mobileDetect' => MobileDetectViewFactory::class,
        ],
    ],
];