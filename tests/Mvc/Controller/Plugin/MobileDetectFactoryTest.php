<?php

namespace MobileDetectModuleTest\Mvc\Controller\Plugin;

use Detection\MobileDetect as MobileDetector;
use MobileDetectModule\Mvc\Controller\Plugin\MobileDetect as MobileDetectPlugin;
use MobileDetectModule\Mvc\Controller\Plugin\MobileDetectFactory;
use MobileDetectModuleTest\ServiceManagerFactory;
use PHPUnit\Framework\TestCase;
use Zend\ServiceManager\ServiceManager;

class MobileDetectFactoryTest extends TestCase
{
    /**
     * @var MobileDetectFactory
     */
    protected $factory;

    protected function setUp()
    {
        $this->factory = new MobileDetectFactory();
    }

    /**
     * @test
     */
    public function it_creates_plugin()
    {
        $container = new ServiceManager([
            'services' => [
                MobileDetector::class => new MobileDetector(),
            ],
        ]);

        $this->assertInstanceOf(MobileDetectPlugin::class, $this->factory->__invoke($container));
    }

    /**
     * @test
     */
    public function it_is_registered_as_app_controller_plugin_factory()
    {
        $serviceManager = ServiceManagerFactory::getServiceManager();

        $controllerPluginManager = $serviceManager->get('ControllerPluginManager');

        $this->assertTrue($controllerPluginManager->has('MobileDetect'));
        $this->assertTrue($controllerPluginManager->has('mobileDetect'));
    }
}
