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
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class MobileDetect extends AbstractPlugin
{
    protected $mobileDetect;
    
    public function __construct(MobileDetector $mobileDetect)
    {
        $this->mobileDetect = $mobileDetect;
    }

    public function __invoke()
    {
        return $this->mobileDetect;
    }
}
