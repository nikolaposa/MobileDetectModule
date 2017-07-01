<?php

namespace MobileDetectModule\View\Helper;

use Detection\MobileDetect as MobileDetector;
use Zend\View\Helper\AbstractHelper;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
final class MobileDetect extends AbstractHelper
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
