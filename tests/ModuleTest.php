<?php

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
