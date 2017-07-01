<?php

namespace MobileDetectModule;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class Module
{
    /**
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
