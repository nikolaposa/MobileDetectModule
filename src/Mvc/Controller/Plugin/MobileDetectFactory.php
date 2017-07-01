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

use Detection\MobileDetect as MobileDetector;
use Interop\Container\ContainerInterface;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class MobileDetectFactory
{
    /**
     * @param ContainerInterface $container
     * @return MobileDetect
     */
    public function __invoke(ContainerInterface $container)
    {
        return new MobileDetect($container->get(MobileDetector::class));
    }
}
