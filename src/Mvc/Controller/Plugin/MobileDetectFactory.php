<?php

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
