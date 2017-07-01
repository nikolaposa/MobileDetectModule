<?php

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
