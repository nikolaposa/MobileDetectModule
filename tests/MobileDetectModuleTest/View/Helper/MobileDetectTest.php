<?php
/**
 * This file is part of the MobileDetectModule package.
 *
 * Copyright (c) Nikola Posa <posa.nikola@gmail.com>
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

namespace MobileDetectModuleTest\View\Helper;

use MobileDetectModule\View\Helper\MobileDetect as MobileDetectHelper;
use PHPUnit_Framework_TestCase;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class MobileDetectTest extends PHPUnit_Framework_TestCase
{
    public function testInvokationReturnsMobileDetectInstance()
    {
        $mobileDetect = $this->getMock('Detection\MobileDetect', [], [], '', false);

        $helper = new MobileDetectHelper($mobileDetect);

        $this->assertSame($mobileDetect, $helper());
    }
}
