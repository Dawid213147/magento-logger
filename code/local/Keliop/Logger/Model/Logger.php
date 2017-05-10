<?php

/**
 * Class init model for logger module
 *
 * @author Dawid
 */
class Keliop_Logger_Model_Logger extends Mage_Core_Model_Abstract
{
    /**
     * Init model of logger
     */
    protected function _construct()
    {
        $this->_init('keliop_logger/logger');
    }
}