<?php
/**
 * This file is part of the MobileDetectModule package.
 * 
 * Copyright (c) Nikola Posa <posa.nikola@gmail.com>
 * 
 * For full copyright and license information, please refer to the LICENSE file, 
 * located at the package root folder.
 */

namespace MobileDetectModule\Service;

use Detection\MobileDetect;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Http\PhpEnvironment\Request as HttpRequest;

/**
 * Creates and builds MobileDetect service.
 *
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class MobileDetectFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $mobileDetect = new MobileDetect();
        
        $request = $serviceLocator->get('Request');
        if ($request instanceof HttpRequest) {
            $mobileDetect->setHttpHeaders($request->getServer()->toArray());
            $mobileDetect->setUserAgent($request->getServer('HTTP_USER_AGENT'));
        }
        
        return $mobileDetect;
    }    
}
