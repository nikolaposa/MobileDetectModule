<?php
/**
 * This file is part of the MobileDetectModule package.
 * 
 * Copyright (c) Nikola Posa <posa.nikola@gmail.com>
 * 
 * For full copyright and license information, please refer to the LICENSE file, 
 * located at the package root folder.
 */

namespace MobileDetectModule;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;
use Zend\ModuleManager\Feature\ControllerPluginProviderInterface;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class Module implements 
    AutoloaderProviderInterface,
    ServiceProviderInterface,
    ViewHelperProviderInterface,
    ControllerPluginProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            )
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'MobileDetect' => 'MobileDetectModule\Service\MobileDetectFactory',
            )
        );
    }
    
    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'mobileDetect' => function ($sm) {
                    $locator = $sm->getServiceLocator();
                    return new View\Helper\MobileDetect($locator->get('MobileDetect'));
                },
            ),
        );
    }

    public function getControllerPluginConfig()
    {
        return array(
            'factories' => array(
                'mobileDetect' => function ($sm) {
                    $locator = $sm->getServiceLocator();
                    return new Mvc\Controller\Plugin\MobileDetect($locator->get('MobileDetect'));
                },
            ),
        );
    }
}
