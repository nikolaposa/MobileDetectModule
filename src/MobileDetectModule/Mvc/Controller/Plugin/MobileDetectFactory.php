<?php
/**
 * This file is part of the MobileDetectModule package.
 *
 * Copyright (c) Nikola Posa <posa.nikola@gmail.com>
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

namespace MobileDetectModule\Mvc\Controller\Plugin;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class MobileDetectFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $mobileDetect = $container->get('MobileDetect');

        return new MobileDetect($mobileDetect);
    }
}