<?php

namespace MobileDetectModule\Service;

use Detection\MobileDetect;
use Interop\Container\ContainerInterface;
use Zend\Http\PhpEnvironment\Request as HttpRequest;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;

/**
 * Creates and builds MobileDetect service.
 *
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
        if (! $container->has('Request')) {
            throw new ServiceNotCreatedException('Request object required for creating MobileDetect was not found in the container');
        }

        /* @var $request HttpRequest */
        $request = $container->get('Request');

        return new MobileDetect(
            $request->getServer()->toArray(),
            $request->getServer('HTTP_USER_AGENT')
        );
    }
}
