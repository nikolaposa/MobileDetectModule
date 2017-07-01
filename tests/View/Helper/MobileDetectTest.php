<?php

namespace MobileDetectModuleTest\View\Helper;

use Detection\MobileDetect;
use MobileDetectModule\View\Helper\MobileDetect as MobileDetectHelper;
use PHPUnit\Framework\TestCase;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class MobileDetectTest extends TestCase
{
    /**
     * @var MobileDetectHelper
     */
    protected $mobileDetectHelper;

    protected function setUp()
    {
        $this->mobileDetectHelper = new MobileDetectHelper(new MobileDetect([], 'test'));
    }

    /**
     * @test
     */
    public function it_proxies_calls_to_mobile_detect_instance()
    {
        $helper = $this->mobileDetectHelper;
        
        $this->assertInstanceOf(MobileDetect::class, $helper());
        $this->assertSame('test', $helper()->getUserAgent());
    }
}
