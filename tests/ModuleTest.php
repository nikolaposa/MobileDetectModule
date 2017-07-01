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

use MobileDetectModule\Module;
use PHPUnit\Framework\TestCase;

class ModuleTest extends TestCase
{
    /**
     * @var Module
     */
    protected $module;

    protected function setUp()
    {
        $this->module = new Module();
    }

    /**
     * @test
     */
    public function it_provides_config()
    {
        $config = include __DIR__ . '/../config/module.config.php';

        $this->assertSame($config, $this->module->getConfig());
    }
}
