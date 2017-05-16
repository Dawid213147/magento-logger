<?php

/**
 * Class init model for logger module
 *
 * @author Dawid
 */
class Kaliop_Logger_Model_Logger extends Mage_Core_Model_Abstract
{
    /**
     * Init model of logger
     */
    protected function _construct()
    {
        $this->_init('kaliop_logger/logger');
    }
}