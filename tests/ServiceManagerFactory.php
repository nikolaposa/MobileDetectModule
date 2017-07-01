<?php
/**
 * This file is part of the MobileDetectModule package.
 *
 * Copyright (c) Nikola Posa <posa.nikola@gmail.com>
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

namespace MobileDetectModuleTest;

use Zend\ModuleManager\ModuleManager;
use Zend\ServiceManager\ServiceManager;

class ServiceManagerFactory
{
    /**
     * @return array
     */
    public static function getConfiguration()
    {
        return include __DIR__ . '/TestConfig.php';
    }

    /**
     * @param array|null $config
     * @return ServiceManager
     */
    public static function getServiceManager(array $config = null)
    {
        $config = $config ?: static::getConfiguration();

        $serviceManager = new ServiceManager(isset($config['service_manager']) ? $config['service_manager'] : []);
        $serviceManager->setService('ApplicationConfig', $config);

        /* @var $moduleManager ModuleManager */
        $moduleManager = $serviceManager->get('ModuleManager');
        $moduleManager->loadModules();

        return $serviceManager;
    }
}
