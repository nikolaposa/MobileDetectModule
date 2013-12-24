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

use PHPUnit_Framework_TestCase;
use MobileDetectModule\Mvc\Controller\Plugin\MobileDetect as MobileDetectPlugin;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class MobileDetectTest extends PHPUnit_Framework_TestCase
{
    public function testInvokationReturnsMobileDetectInstance()
    {
        $mobileDetect = $this->getMock('Detection\MobileDetect', array(), array(), '', false);
        
        $plugin = new MobileDetectPlugin($mobileDetect);
        
        $this->assertSame($mobileDetect, $plugin());
    }
}
