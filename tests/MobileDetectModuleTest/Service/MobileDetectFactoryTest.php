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

use MobileDetectModule\Service\MobileDetectFactory;
use PHPUnit_Framework_TestCase;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class MobileDetectFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var MobileDetectFactory
     */
    protected $factory;

    public function testNothingInjectedInCaseOfNonHttpRequest()
    {
        $request = $this->getMock('Zend\Stdlib\RequestInterface');
        $request->expects($this->never())->method($this->anything());

        $this->factory->createService($this->getServiceLocator($request));
    }

    protected function getServiceLocator($request)
    {
        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
        $serviceLocator->expects($this->once())->method('get')->will($this->returnValue($request));

        return $serviceLocator;
    }

    public function testHeadersAndUAStringInjectedInCaseOfHttpRequest()
    {
        $host      = 'www.example.com';
        $userAgent = 'foo bar baz';

        $request = new \Zend\Http\PhpEnvironment\Request();
        $request->setServer(new \Zend\Stdlib\Parameters([
            'HTTP_HOST'       => $host,
            'HTTP_USER_AGENT' => 'foo bar baz',
        ]));

        $mobileDetect = $this->factory->createService($this->getServiceLocator($request));

        $this->assertEquals($host, $mobileDetect->getHttpHeader('Host'));
        $this->assertEquals($userAgent, $mobileDetect->getUserAgent());
    }

    protected function setUp()
    {
        $this->factory = new MobileDetectFactory();
    }
}
