<?php

namespace MobileDetectModuleTest\View\Helper;

use Detection\MobileDetect as MobileDetector;
use MobileDetectModule\View\Helper\MobileDetect as MobileDetectHelper;
use MobileDetectModule\View\Helper\MobileDetectFactory;
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
    public function it_creates_view_helper()
    {
        $container = new ServiceManager([
            'services' => [
                MobileDetector::class => new MobileDetector(),
            ],
        ]);

        $this->assertInstanceOf(MobileDetectHelper::class, $this->factory->__invoke($container));
    }

    /**
     * @test
     */
    public function it_is_registered_as_app_view_helper_factory()
    {
        $serviceManager = ServiceManagerFactory::getServiceManager();

        $viewHelper = $serviceManager->get('ViewHelperManager');

        $this->assertTrue($viewHelper->has('MobileDetect'));
        $this->assertTrue($viewHelper->has('mobileDetect'));
    }
}
