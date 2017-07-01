<?php
/**
 * This file is part of the MobileDetectModule package.
 * 
 * Copyright (c) Nikola Posa <posa.nikola@gmail.com>
 * 
 * For full copyright and license information, please refer to the LICENSE file, 
 * located at the package root folder.
 */

namespace MobileDetectModuleTest\Mvc\Controller\Plugin;

use Detection\MobileDetect;
use MobileDetectModule\Mvc\Controller\Plugin\MobileDetect as MobileDetectPlugin;
use PHPUnit\Framework\TestCase;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class MobileDetectTest extends TestCase
{
    /**
     * @var MobileDetectPlugin
     */
    protected $mobileDetectPlugin;

    protected function setUp()
    {
        $this->mobileDetectPlugin = new MobileDetectPlugin(new MobileDetect([], 'test'));
    }

    /**
     * @test
     */
    public function it_proxies_calls_to_mobile_detect_instance()
    {
        $plugin = $this->mobileDetectPlugin;

        $this->assertInstanceOf(MobileDetect::class, $plugin());
        $this->assertSame('test', $plugin()->getUserAgent());
    }
}
