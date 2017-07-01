<?php

namespace MobileDetectModule\Mvc\Controller\Plugin;

use Detection\MobileDetect as MobileDetector;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
final class MobileDetect extends AbstractPlugin
{
    /**
     * @var MobileDetector
     */
    private $mobileDetect;
    
    public function __construct(MobileDetector $mobileDetect)
    {
        $this->mobileDetect = $mobileDetect;
    }

    /**
     * @return MobileDetector
     */
    public function __invoke()
    {
        return $this->mobileDetect;
    }
}
